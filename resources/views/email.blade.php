<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Styles -->
        <style>
 
        </style>

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
    
    <div class = "exist">
        <div>
            <p>Email sent to {{$uemail}}</p>
        </div>
        <button id="return" type="button" onclick="document.location.href='../'" name = "return">return</button>
    </div>

    </body>
</html>
