<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Styles -->
        <style>
 
        </style>
        <style>
            body{background-image: url('/DBProject/public/images/bg.jpg');}
        </style>
       <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" />
       <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}" />
       <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

        <!-- js -->
        <!-- Modernizr JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/signup.js')}}"></script>
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-0">
                    

                    <!-- Start Sign In Form -->
                     <form enctype="multipart/form-data" id="createForm" class="fh5co-form animate-box" data-animate-effect="fadeInIn" action="{{url('users/sign_up')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <h2>Sign Up</h2>
                       
                        <div class="form-group">
                            <label for="name" class="sr-only">*Username</label>
                            <input type="text" class="form-control" id="uname" placeholder="*Username" autocomplete="off" name="uname">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">*Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="*Password" autocomplete="off" name="password1">
                        </div>
                        <div class="form-group">
                            <label for="re-password" class="sr-only">*Re-type Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="*Re-type Password" autocomplete="off" name="password2">
                        </div>
                        <div class="form-group">
                            <label for="name" class="sr-only">Realname</label>
                            <input type="text" class="form-control" id="urname" placeholder="Realname" autocomplete="off"  name="urname">
                        </div>
                        <div class="form-group">
                            <label for="sex" class="sr-only">Sex</label>
                            <input type="text" class="form-control" id="usex" placeholder="Sex" autocomplete="off" name="usex">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">*Email</label>
                            <input type="email" class="form-control" id="uemail" placeholder="*Email" autocomplete="off" name="uemail">
                        </div>
                        <div class="form-group">
                            <label for="birthday" class="sr-only">Birthday</label>
                            <input type="date" class="form-control" id="dbirth" placeholder="Birthday" autocomplete="off" name="dbirth">
                        </div>
                        <div class="form-group">
                            <label for="country" class="sr-only">*Country</label>
                            <input type="text" class="form-control" id="country" placeholder="*Country" autocomplete="off" name="country">
                        </div>
                        <div class="form-group">
                            <label for="state" class="sr-only">*State</label>
                            <input type="text" class="form-control" id="state" placeholder="*State" autocomplete="off" name="state">
                        </div>
                        <div class="form-group">
                            <label for="city" class="sr-only">*City</label>
                            <input type="text" class="form-control" id="city" placeholder="*City" autocomplete="off" name="city">
                        </div>
                        <div class="form-group">
                            <label for="zip" class="sr-only">Zip Code</label>
                            <input type="text" class="form-control" id="zip" placeholder="Zip Code" autocomplete="off" name="zip">
                        </div>
                         <div class="form-group">
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" class="form-control" id="uphone" placeholder="Phone" autocomplete="off" name="uphone">
                        </div>
                        <div class="form-group">
                            <p>Already registered? <a href={{url('users/login')}}>Sign In</a></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="signup" value="Sign Up" class="btn btn-primary">
                        </div>
                    </form>
                    <!-- END Sign In Form -->


                </div>
            </div>
        </div>
      

    </body>
</html>
