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
        <script type="text/javascript" src="{{URL::asset('js/mymusic.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    </head>
    <body>       
       <div id="wrapper">
            <!-- Navigation -->
            @include('includes.nav')

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            <img class="img-fluid" src="img/icon.png" alt="">
                            {{Session::get('uname')}}
                            <small><a href="{{url('createPlaylist')}}">New Playlist</a></small>
                            <small><a href="{{url('createPlaylist')}}"><i class="fa fa-fw fa-plus"></i></a> </small>
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
                                            <div class="middle"> </div>
                                        </div>
                                        <div class="col-xs-9 text-middle">
                                            <div class="huge">Artist</div>
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
                                            <div class="middle"> </div>
                                            <!-- <i class="fa fa-tasks fa-5x"></i>  -->
                                        </div>
                                        <div class="col-xs-9 text-middle">
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
                                            <div class="middle"> </div>
                                            <!-- <i class="fa fa-shopping-cart fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-middle">
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
                                            <div class="middle"> </div>
                                            <!--<i class="fa fa-support fa-5x"></i> -->
                                        </div>
                                        <div class="col-xs-9 text-middle">
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
                                <h2>Artist</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>                                                
                                                <th>Title</th>    
                                                <th>Genre</th>
                                                <th>Description</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($artistlike as $like)
                                            <tr>
                                                <td> </td>                                                
                                                <td>{{ $like->aname }}</td>   
                                                <td>{{ $like->atype }}</td>
                                                <td>{{ $like->adescription }}</td>
                                                <td>
                                                 <a class="searchartist" sectionId="{{$like->aid}}"><i class="fas fa-address-card"></i></a>
                                                </td>                                         
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                           
                            <div class="col-lg-10">
                                <h2>Track</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th> </th>                                                
                                                <th>Title</th>                                                
                                                <th>Artist</th>
                                                <th>Genre</th>
                                                <th>Time</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tracks as $t)
                                            <tr>
                                                <td> </td>                                                
                                                <td>{{$t->ttitle}}</td>                                                
                                                <td>{{$t->artistname}}</td>
                                                <td>{{$t->tgenre}}</td>
                                                <td>{{$t->duration}}</td>
                                                <td><a  class="playtrack" sectionId="{{$t->tid}}"><i class="fa fa-fw fa-play"></i></a>
                                                    <a class="addtrack" sectionId="{{$t->tid}}"><i class="fa fa-fw fa-plus"></i></a>
                                                    <a class="ratetrack" sectionId="{{$t->tid}}"><i class="fa fa-fw fa-star"></i></a>
                                                </td>                                        
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10">
                                <h2>Playlist</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>
                                                <th width="24%">Title</th>                                                
                                                <th width="14%">Creator</th>
                                                <th width="17%">Time</th>
                                                <th width="14%">Button</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($playlist as $p)
                                            <tr>
                                                <td> </td>
                                                <td>{{ $p->ptitle }}</td>
                                                <td>{{ $p->uname }}</td>
                                                <td>{{ $p->pldate }}</td>
                                                <td><a  class="playplaylist" sectionId="{{$p->pid}}"><i class="fa fa-fw fa-play"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10">
                                <h2>Album</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>
                                                <th width="24%">Title</th>
                                                <th width="17%">Time</th>
                                                <th width="14%">Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($albums as $al)
                                            <tr>
                                                <td> </td>
                                                <td>{{ $al->altitle }}</td>
                                               
                                                <td>{{ $al->aldate }}</td>
                                                <td><a class="playalbum" sectionId="{{$al->alid}}"><i class="fa fa-fw fa-play"></i></a></td>
                                            </tr>
                                            @endforeach
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

    </body>
    <footer>
        
    </footer>
</html>
