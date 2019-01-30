@extends('layouts/basic')

@section('content')
    <h1>Students Hub</h1>
    <div class="form-group">
        <br>
        <form action="/" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-sm-6">
                    Email
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-sm-6">
                    Password
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
                </div>
            </div>
        </form>
        <form action="/register" method="GET" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Register
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection