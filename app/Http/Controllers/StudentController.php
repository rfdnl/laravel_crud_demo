<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{
    public function Login(Request $request){
        $validator = Validator::make($request->all(),
            [
                'email' => 'required',
                'password' => 'required|min:6'
                ]
        );
    
        if ($validator->fails()){
            return redirect('/')
            ->withInput()
            ->withErrors($validator);
        }
    
        $student = Student::where('email','=',$request->email)->first();
    
        if (empty($student)){
            $request->session()->flash('message', $request->email . ' is not registered, please register first');
            return redirect('/register');
        }
    
        if ($student->password == $request->password){
            $request->session()->put('email', $request->email);
            return redirect('/profile');
        } else {
            $request->session()->flash('message', 'Wrong email or password');
            return redirect('/');
        }
    }

    public function Register(Request $request){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:255',
                'email' => 'required',
                'password' => 'required|min:6',
                'gender' => 'required',
                'program' => 'required',
                'field' => 'required',
                'cgpa' => 'required'
                ]
        );
    
        if ($validator->fails()){
            return redirect('/register')
            ->withInput()
            ->withErrors($validator);
        }
    
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->gender = $request->gender;
        $student->program = $request->program;
        $student->field = $request->field;
        $student->cgpa = $request->cgpa;
        $student->save();
    
        $request->session()->flash('message', $student->email . ' has been created. Please login.');
        return redirect('/');
    }

    public function ViewProfile(Request $request){
        $email = StudentController::checkLogin($request);
    
        $student = Student::where('email', '=', $email)->first();
    
        return view('profile')
        ->with('name', $student->name)
        ->with('email', $email)
        ->with('genderid', $student->gender)
        ->with('gender', StudentController::genderStr($student->gender))
        ->with('programid', $student->program)
        ->with('program', StudentController::programStr($student->program))
        ->with('fieldid', $student->field)
        ->with('field', StudentController::fieldStr($student->field))
        ->with('cgpa', $student->cgpa);
    }

    public function EditProfile(Request $request){
        $email = StudentController::checkLogin($request);
    
        $student = Student::where('email', '=', $email)->first();
    
        return view('editProfile')
        ->with('name', $student->name)
        ->with('email', $email)
        ->with('genderid', $student->gender)
        ->with('gender', StudentController::genderStr($student->gender))
        ->with('programid', $student->program)
        ->with('program', StudentController::programStr($student->program))
        ->with('fieldid', $student->field)
        ->with('field', StudentController::fieldStr($student->field))
        ->with('cgpa', $student->cgpa);
    }

    public function SaveProfile(Request $request){
        $email = StudentController::checkLogin($request);
    
        $student = Student::where('email', '=', $email)->first();
        $student->program = $request->program;
        $student->field = $request->field;
        $student->cgpa =$request->cgpa;
        $student->save();
        return redirect('/profile');
    }

    public function DeleteProfile(Request $request){
        $email = StudentController::checkLogin($request);
    
        $student = Student::where('email', '=', $email)->first();
        $student->delete();
        $request->session()->flash('message', $email . ' has been deleted!');
        $request->session()->put('email', NULL);
        return redirect('/');
    }

    public function GetStats(Request $request){
        $email = StudentController::checkLogin($request);
        
        $total = Student::all()->count();
        if ($total < 1){
            Sessions::flash('message', 'No resumes');
            return redirect('/');
        }
    
        $totalMale =        Student::where('gender', '<', '1')->count();
        $totalFemale =      Student::where('gender', '>', '0')->count();
    
        $totalFoundation =  Student::where('program','=','0')->count();
        $totalDiploma =     Student::where('program','=','1')->count();
        $totalDegree =      Student::where('program','=','2')->count();
        $totalMasters =     Student::where('program','=','3')->count();
        $totalPhD =         Student::where('program','=','4')->count();
    
        $totalMaths =       Student::where('field','=','0')->count();
        $totalPhysics =     Student::where('field','=','1')->count();
        $totalEngine =      Student::where('field','=','2')->count();
        $totalChemistry =   Student::where('field','=','3')->count();
        $totalBiology =     Student::where('field','=','4')->count();
    
        return view('stats')
        ->with('total', $total)
        ->with('totalMale', $totalMale)
        ->with('totalFemale', $totalFemale)
        ->with('totalFoundation', $totalFoundation)
        ->with('totalDiploma', $totalDiploma)
        ->with('totalDegree', $totalDegree)
        ->with('totalMasters', $totalMasters)
        ->with('totalPhD', $totalPhD)
        ->with('totalMaths', $totalMaths)
        ->with('totalPhysics', $totalPhysics)
        ->with('totalEngine', $totalEngine)
        ->with('totalChemistry', $totalChemistry)
        ->with('totalBiology', $totalBiology);
    }
    
    public function checkLogin(Request $request){
        $email = $request->session()->get('email');

        if (empty($email)){
            $request->session()->flash('message', 'Please log in first');
            return redirect('/');
        }

        return $email;
    }

    public function genderStr($genderid){
        if ($genderid > 0) return 'Female';
        else return 'Male';
    }

    public function programStr($programid){
        switch ($programid) {
            case 0:
                return 'Foundation';
            case 1:
                return 'Diploma';
            case 2:
                return 'Degree';
            case 3:
                return 'Masters';
            case 4:
                return 'PhD';
        }
    }

    public function fieldStr($fieldid){
        switch ($fieldid) {
            case 0:
                return 'Mathematics';
            case 1:
                return 'Physics';
            case 2:
                return 'Engineering';
            case 3:
                return 'Chemistry';
            case 4:
                return 'Biology';
        }
    }
}
