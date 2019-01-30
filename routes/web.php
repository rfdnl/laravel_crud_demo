<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Student;

Route::get('/', function () {
    $email = Session::get('email');
    if (empty($email)){
        return view('index');
    } else {
        return redirect('profile');
    }
});

Route::post('/', 'StudentController@Login');

Route::get('/register', function(){
    return view('register');
});

Route::post('/register', 'StudentController@Register');
Route::get('/profile', 'StudentController@ViewProfile');
Route::get('/profile/edit', 'StudentController@EditProfile');
Route::post('/profile/edit', 'StudentController@SaveProfile');
Route::delete('/profile/edit', 'StudentController@DeleteProfile');
Route::get('/stats', 'StudentController@GetStats');

Route::get('/logout', function(){
    $email = Session::get('email');
    if (!empty($email)){
        Session::flash('message', $email . ' logged out!');
        Session::put('email', NULL);
    }

    return redirect('/');
});
