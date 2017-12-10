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
                <div class="col-md-4 col-md-push-0">
                    

                    <!-- Start Form -->
                     <form enctype="multipart/form-data" id="createForm" class="fh5co-form animate-box" data-animate-effect="fadeIn" action="{{url('users/forgot')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h2>Forgot Password</h2>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="femail" placeholder="Email" autocomplete="off" name="femail">
                        </div>
                        <div class="form-group">
                            <p><a href={{url('users/login')}}>Log In</a> or <a href={{url('users/sign_up')}}>Sign Up</a></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="forgot" value="Send Email" class="btn btn-info btn-lg btn-block">
                        </div>
                    </form>
                    <!-- END Form -->

                </div>
            </div>
        </div>
    

    </body>
</html>
