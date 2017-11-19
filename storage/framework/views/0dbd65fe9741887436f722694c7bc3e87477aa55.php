<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yingxi's project</title>


        <!-- Styles -->
        <style>
 
        </style>
    </head>

    <body>
       
        <div class="">
            <p>Create a new reservation<p>
        </div>

        <div class="createForm">
            <form enctype="multipart/form-data" id="createForm" action="" method="">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="customerName">Customer name<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="customerName" name="customerName" /></td>
                    </tr>
                    <tr>
                        <td><label for="keyword">Keyword<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="keyword" name="keyword" /></td>
                    </tr>
                    <tr>
                        <td><label for="numPeople">Number of People<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="numPeople" name="numPeople" /></td>
                    </tr>
                    <tr>
                        <td><label for="startDate">Date:</label></td>
                        <td class="data"><input type="text" id="startDate" name="startDate" value=""/></td>
                    </tr>
                    <tr>
                        <td><label for="time">Time:</label></td>
                        <td class="time"><input type="text" id="time" name="time" value=""/></td>
                    </tr>

                    <tr>
                        <td colspan=2>
                            <div class="button">
                                    <input class="publish" type="button"  value="Publish now" />
                                    <input class="save" type="button" value="Save draft"/>
                            </div>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>

    </body>
</html>
