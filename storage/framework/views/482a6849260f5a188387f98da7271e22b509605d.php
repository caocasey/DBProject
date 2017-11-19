<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yingxi's HM3</title>


        <!-- Styles -->
        <style>
            body {
                margin: 0px 0px;
                background-image: url('/yingxiHM3/public/images/bg1.jpg');
            }
             .noexsit{
                margin-top: 20px;
                margin-left: 20px;
                color:white;
            }
            #return{
                opacity:0.8;
                width:100px;
                height: 25px;
                font-size: 15px;
            }
        </style>
    </head>

    <body>
       
        <div class="noexsit">
            <p>Customer doesn't exsist, please contact administrator. Thank you.<p>
            <button id="return" type="button" onclick="history.back()" name = "return">return</button>
        </div>

       
    </body>
</html>
