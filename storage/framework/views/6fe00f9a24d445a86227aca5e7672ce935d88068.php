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
            .list{
                margin-top: 20px;
                margin-left: 20px;
                color:white;
            }
            #booking{
                width:100px;
                height: 20px;
                margin-top: 10px;
                opacity: 0.8;
            }
     
        </style>
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/restaurant.js')); ?>"></script>

    </head>

    <body>
       <div class = "list">
            <h>List of restautrant</h>
            <div><span id="noresult"></span></div>
            <form enctype="multipart/form-data" id="bookRestaurant" action="<?php echo e(url('restaurant/book')); ?>" method="POST"><input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <ul>
                <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>ID: <?php echo e($restaurant->rid); ?><br>
                        Restaurant Name: <?php echo e($restaurant->rname); ?><br>
                        Description: <?php echo e($restaurant->description); ?><br>
                        Address: <?php echo e($restaurant->raddress); ?><br>
                        Capacity: <?php echo e($restaurant->capacity); ?><br/>
                        Occupied: <?php echo e($restaurant->occupied); ?></li>
                        <div>
                            <button name = "booking" type="submit" id = "booking" value="<?php echo e($restaurant->rid); ?>"/>Book Now</button>
                        </div> <br/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </form>
            
           <!--get booking as option
            <div>
                <form enctype="multipart/form-data" id="bookRestaurant" action="<?php echo e(url('restaurant/book')); ?>" method="POST"><input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <label for="selectRestaurant">Choose a restaurant:</label><br>
                    <select name="selectRestaurant" id="selectRestaurant" type="text">
                        <option disabled selected> -- select a restaurant -- </option>
                        <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($restaurant->rid); ?>">
                            ID:<?php echo e($restaurant->rid); ?>, Name:<?php echo e($restaurant->rname); ?>

                          </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div>
                        <input id = "booking" type="submit"  value="Book now" />
                    </div>
                </form>
            </div>-->

       </div>

    </body>
</html>
