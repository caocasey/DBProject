<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Monster Music - Welcome</title>

        <!-- Styles -->
        <style>
            body{background-image: url('/DBProject/public/images/bg.jpg');}
        </style>
       <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" />
       <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}" />
       <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/login.js')}}"></script>


    </head>
    <body>
       

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-0">
                    <!-- Start Log In Form -->
                     <form enctype="multipart/form-data" class="fh5co-form animate-box" data-animate-effect="fadeInDown" id="createForm" action="{{url('users/log_in')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h2>Log In</h2>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="username" name="uname" placeholder="Username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <p>Not registered? <a href={{url('users/sign_up')}}>Sign Up</a> | <a href={{url('forgot')}}>Forgot Password?</a></p>
                        </div>
                        <div class="form-group">
                            <input id="login" type="submit" value="Log In" class="btn btn-info btn-lg btn-block">
                        </div>
                    </form>
                    <!-- END Log In Form -->
                </div>
            </div>
        </div>

    </body>
</html>
