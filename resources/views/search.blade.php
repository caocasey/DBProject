<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Monster Music - Search</title>
        


        <!-- Styles -->
        <style>
            #search{
                height:46px;
                width: 100px;
                position: absolute;
                left:0px;
                z-index: 100;
            }
            #keyword{
                width: 800px;
                margin-left: 100px;
            }
            
        </style>
        <link rel="stylesheet" href="{{ URL::asset('css/index.css')}}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css')}}" />
        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/plugins/morris.css')}}" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" rel="stylesheet">
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/search.js')}}"></script>

    </head>
    <body>
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
                            Monster <small>music</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                   
                    <div class="container">
                         <form enctype="multipart/form-data" id="createForm" action="{{url('search')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="input-group" >  
                            <input id = "search" type="submit" value="Search">                      
                            
                            </input>
                            <input id="keyword" name="keyword"  type="text" placeholder="Search for an Artist, Song, Album or Playlist" class="form-control input-lg">
                            </div>

                        </form>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="col-lg-10" id="artist">
                                <h2>Artist</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="5%"> </th>                                                
                                                <th>Name</th>    
                                                <th>Genre</th>
                                                <th>Description</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        @foreach ($searchArtist as $a)
                                        <tbody>
                                            <tr>  
                                                <td>  </td>                             
                                                <td>{{$a->aname}}</td>   
                                                <td>{{$a->atype}}</td>
                                                <td>{{$a->adescription}}</td>
                                                <td>
                                                    <a href=".html"><i class="fa fa-fw fa-user-plus"></i></a>
                                                </td>                                         
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                           
                            <div class="col-lg-10" id="track">
                                <h2>Track</h2>
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
                                            @foreach ($searchTrack as $t)
                                            <tr>
                                                <td>  </td>                                               
                                                <td>{{ $t->ttitle }}</td>                               
                                                <td>{{ $t->artistname }}</td>
                                                <td>{{ $t->tgenre }}</td>
                                                <td>{{ $t->duration }}</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>                                         
                                            </tr>
                                            @endforeach
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10" id="pl">
                                <h2>Playlist</h2>
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
                                            @foreach ($searchPlaylist as $p)
                                            <tr>
                                                <td>  </td>
                                                <td>{{ $p->pname }}</td>
                                                <td>XXX</td>
                                                <td>{{ $t->uname }}</td>
                                                <td>{{ $t->pldate }}</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-10" id="album">
                                <h2>Album</h2>
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
                                            @foreach ($searchAlbum as $al)
                                            <tr>
                                                <td>  </td>
                                                <td>{{ $al->altitle }}</td>
                                                <td>XXX</td>
                                                <td>XXX</td>
                                                <td>{{ $al->aldate }}</td>
                                                <td><a href=".html"><i class="fa fa-fw fa-play"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-heart"></i></a>
                                                <a href=".html"><i class="fa fa-fw fa-user-times"></i></a></td>
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
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    
    </body>
    <footer>
    </footer>
</html>
