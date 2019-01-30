@extends('layouts/basic')

@section('content')
    <h1>{{$name}}'s Profile</h1>
    <h2>Email: {{$email}}</h2>
    <h2>Gender: {{$gender}}</h2>
    <h2>Program: {{$program}}</h2>
    <h2>Field: {{$field}}</h2>
    <h2>CGPA: {{$cgpa}}</h2>

    <form action="/stats" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Stats
                </button>
            </div>
        </div>
    </form>
    <form action="/profile/edit" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Edit
                </button>
            </div>
        </div>
    </form>
    <form action="/profile/edit" method="POST" class="form-horizontal">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Delete
                </button>
            </div>
        </div>
    </form>
    <form action="/logout" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Logout
                </button>
            </div>
        </div>
    </form>
@endsection