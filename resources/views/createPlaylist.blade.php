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
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}" />
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" />
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/login.js')}}"></script>

    </head>
    <body>
       <h>This is Yingxi and Jingyun 's DB project</h></body></br>
       
       <div id="wrapper">
            <!-- Navigation -->
            @include('includes.nav')

             <div id="page-wrapper">
               <div class="row" style=" position:absolute; top:0px; width:100%; height:100%; background:white;"></div>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            <img class="img-fluid" src="img/icon.png" alt="">
                                New Playlist 
                            <small><i class="fa fa-fw fa-music"></i></small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-0">
                            <!-- Start Log In Form -->
                             <form enctype="multipart/form-data" id="createForm" class="fh5co-form animate-box" action="{{url('create_Playlist')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <form >
                                <h2>New Playlist Name</h2>
                                <div class="form-group">
                                    <label for="username" class="sr-only">New Playlist</label>
                                    <input type="text" class="form-control" id="plname" placeholder="New Playlist Name" autocomplete="off" name="plname">
                                </div>
                                <div class="form-group">
                                    <label for="remember"><input type="checkbox" id="remember" name="private"> Private</label>
                                </div>
                                <div class="form-group">
                                    <a href="playlist.html"><p>Go to the palylist page of the new created playlist</p></a>
                                </div>
                                <div class="form-group">
                                    <input type="submit" id="createpl" value="Create It" class="btn btn-info btn-lg btn-block">
                                </div>
                            </form>
                            <!-- END Log In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>

            
            <!-- /#page-wrapper -->
        </div>

    </body>
    <footer>
        
    </footer>
</html>
