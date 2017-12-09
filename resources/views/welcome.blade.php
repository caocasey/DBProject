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
       <h>This is Yingxi and Jingyun 's DB project</h></body></br>
       
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="mymusic.html">Monster Music</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="search.html"><i class="fa fa-search"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="logout.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="index.html"><i class="fa fa-fw fa-home"></i> Home </a>
                        </li>
                        <li>
                            <a href="search.html"><i class="fa fa-fw fa-search"></i> Search</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fa fa-fw fa-edit"></i> Profile</a>
                        </li>
                        <li>
                            <a href="mymusic.html"><i class="fa fa-fw fa-music"></i> My music</a>
                        </li>
                        <li>
                            <a href="logout.html"><i class="fa fa-fw fa-sign-out-alt"></i> Sign out</a>
                        </li>
                        @include('includes.footer')
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            <div>Welcome <span id="uname"><small>{{Session::get('uname')}}</small></span></p><div>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->
                    <div class="row">
                        <!-- blue-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="middle">Date Today</div>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><span id="date"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- green-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="middle">{{ $trackNumber }} total</div>
                                            <!-- <i class="fa fa-tasks fa-5x"></i>  -->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Track</div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                        <!-- yellow-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="middle">{{ $plNumber }} total</div>
                                            <!-- <i class="fa fa-shopping-cart fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Playlist</div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                        <!-- red-->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="middle">{{ $albumNumber }} total</div>
                                            <!--<i class="fa fa-support fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">Album</div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-10">
                                <h2>New Track</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th> </th>                                                
                                                <th>Track</th>                                                
                                                <th>Artist</th>
                                                <th>Genre</th>
                                                <th>Time</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>                                                
                                                <td>Listen to Your Mom</td>                                                
                                                <td>Jay Chou</td>
                                                <td>Jazz</td>
                                                <td>03:20</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>                                         
                                            </tr>
                                            <tr>
                                                <td>2</td>                                                
                                                <td>Simple Love</td>                                                
                                                <td>Jay Chou</td>
                                                <td>Pop</td>
                                                <td>04:02</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>                                         
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10">
                                <h2>New Playlist</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>
                                                <th width="24%">Playlist</th>                                                
                                                <th width="9%">Listened</th>                                                
                                                <th width="14%">Creator</th>
                                                <th width="17%">Time</th>
                                                <th width="14%">Button</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Gentle Song of Jay Chou</td>
                                                <td>354</td>
                                                <td>username1</td>
                                                <td>2017-11-11 20:11:02</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10">
                                <h2>New Album</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>
                                                <th width="24%">Playlist</th>                                                
                                                <th width="9%">Listened</th>                                                
                                                <th width="14%">Artist</th>
                                                <th width="17%">Time</th>
                                                <th width="14%">Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Stil Fantasy</td>
                                                <td>120000</td>
                                                <td>Jay Chou</td>
                                                <td>2017-11-11 20:11:02</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
     
     
                        

    </body>
    <footer>
        
    </footer>
</html>
