<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Monster Music - Welcome</title>

        <!-- Styles -->
        <style>
          body{background-image: url('/DBProject/public/images/header-bg.jpg');}
        </style>
        <link rel="stylesheet" href="{{ URL::asset('css/vendor/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ URL::asset('css/vendor/font-awesome/css/font-awesome.min.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
         <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ URL::asset('css/agency.min.css')}}" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/login.js')}}"></script>


    </head>
    <body id="page-top">

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Monster Music!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase" href="users/sign_up">Sign Up Now</a>
          <a href="">___❤___</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="users/login">Log In Now</a>
        </div>
        
      </div>
    </header>

  </body>
</html>
