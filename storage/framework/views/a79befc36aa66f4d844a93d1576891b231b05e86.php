<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>

        <title>Yingxi's HM3</title>


        <!-- Styles -->
        <style>
 
        </style>
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/index.css')); ?>" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/index.js')); ?>"></script>
    </head>

    <body>
       <div></div>
       <div class = "information">
        <div>
            <p>Welcome, let's create a new reservation</p>
        </div>

        <div class="createForm">
            <form enctype="multipart/form-data" id="createForm" action="<?php echo e(url('restaurant/request')); ?>" method="POST"><input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="customerName">Customer name<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="customerName" name="customerName" /></td>
                    </tr>
                    <tr>
                        <td><label for="keyword">Keyword：</label></td>
                        <td><input type="text" id="keyword" name="keyword" /></td>
                    </tr>
                    <tr>
                        <td><label for="numPeople">Number of People<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="numPeople" name="numPeople" /></td>
                    </tr>
                    <tr>
                        <td><label for="date">Date<span style="color:#ff7900"> *</span>:</label></td>
                        <td class="date"><input type="date" id="date" name="date" value=""/></td>
                    </tr>
                    <tr>
                        <td><label for="time">Time<span style="color:#ff7900"> *</span>:</label></td>
                        <td class="time"><input type="time" id="time" name="time" value=""/></td>
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
    </div>
    </body>
</html>
