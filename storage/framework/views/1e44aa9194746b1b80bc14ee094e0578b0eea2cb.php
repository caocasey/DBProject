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
            ul li {
                list-style-type:none;  
             }
            .history{
                margin-top: 20px;
                margin-left: 20px;
                color:white;
            }
            
        </style>
        <link rel="stylesheet" href="<?php echo e(URL::asset('css/restaurant.css')); ?>" />
    </head>

    <body>
       <div class = "history">
            <h>Your previous bookings</h>
            <ul>
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>Customer Name: <?php echo e($booking->cname); ?><br>
                     	Restaurant Name: <?php echo e($booking->rname); ?><br>
                     	Date and Time: <?php echo e($booking->btime); ?><br>
						Number of people: <?php echo e($booking->quantity); ?><br><br>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>
       </div>

    </body>
</html>
