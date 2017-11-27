<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>
 
        </style>
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/index.css')); ?>" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/index.js')); ?>"></script>

    </head>
    <body>
       <h>This is Yingxi and Jingyun 's DB project</h></body></br>
        <div id="signup">
            <a href="<?php echo e(url('users/signup')); ?>">Sign up</a>
        </div>
        <div id="login">
            <a href="<?php echo e(url('users/login')); ?>">Login</a>
        </div>
        <div id="logout">
            <a href="<?php echo e(url('users/logout')); ?>">Logout</a>
        </div>

       <div>Welcome <span id="uname"><?php echo e(Session::get('uname')); ?></span></p><div>

    </body>
</html>
