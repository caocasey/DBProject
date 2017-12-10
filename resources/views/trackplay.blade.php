<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>

        </style>

        <link rel="stylesheet" href="{{ URL::asset('css/index.css')}}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css')}}" />
        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/plugins/morris.css')}}" />
        <!-- Custom Fonts -->
        <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" rel="stylesheet">

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/index.js')}}"></script>

    </head>
    <body>
       
        <div id="wrapper">
            <!-- Navigation -->
            @include('includes.nav')

            <iframe src="https://open.spotify.com/embed?uri=spotify%3Atrack%3A{{$tid}}" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
     
                        

    </body>
    <footer>
        
    </footer>
</html>
