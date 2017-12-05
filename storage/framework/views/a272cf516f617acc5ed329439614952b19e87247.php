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
         <div id="account">
            <a href="<?php echo e(url('users/account')); ?>">Account</a>
        </div>

       <div>Welcome <span id="uname"><?php echo e(Session::get('uname')); ?></span></p><div>
        
     <h>Search result</h>
      <div class="searchForm">
            <form enctype="multipart/form-data" id="createForm" action="<?php echo e(url('search')); ?>" method="POST"><input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="keyword">Keyword：</label></td>
                        <td><input type="text" id="keyword" name="keyword" /></td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <div>
                                <input id = "search" type="submit"  value="Search now" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>


                        

    </body>
    <footer>
        <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </footer>
</html>
