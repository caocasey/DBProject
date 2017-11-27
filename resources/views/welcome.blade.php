<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>
 
        </style>
        <link rel="stylesheet" href="{{ URL::asset('css/index.css')}}" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/index.js')}}"></script>

    </head>
    <body>
       <h>This is Yingxi and Jingyun 's DB project</h></body></br>
        <div id="signup">
            <a href="{{ url('users/signup') }}">Sign up</a>
        </div>
        <div id="login">
            <a href="{{ url('users/login') }}">Login</a>
        </div>
        <div id="logout">
            <a href="{{ url('users/logout') }}">Logout</a>
        </div>

       <div>Welcome <span id="uname">{{Session::get('uname')}}</span></p><div>

    </body>
</html>
