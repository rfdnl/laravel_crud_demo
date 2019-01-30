<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Students Hub</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>
        <!-- Display Validation Errors -->
        
        <div class="panel-body">
            @include('common.errors')

            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            
            @yield('content')
        </div>
    </body>
</html>