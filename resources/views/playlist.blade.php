<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

         <title>Monster Music - Playlist</title>


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
        <script type="text/javascript" src="{{URL::asset('js/playlist.js')}}"></script>

    </head>
    <body>
       <h>This is Yingxi and Jingyun 's DB project</h></body></br>
       
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
                            {{$pl[0]->ptitle}}
                            <small>Created  by {{$pl[0]->uname}}</small>
                            <small><a href="../playlist/follow/{{$pl[0]->uname}}">Follow Creator</a></small>
                            <small><a href="../playlist/follow/{{$pl[0]->uname}}"><i class="fa fa-fw fa-heart"></i></a> </small>
                            <small><a href="../playlist/unfollow/{{$pl[0]->uname}}">Unollow Creator</a></small>
                            <small><a href="../playlist/unfollow/{{$pl[0]->uname}}"><i class="fa fa-fw fa-times"></i></a> </small>
                            <br>
                          
                            <small>Created at {{$pl[0]->pldate}}</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-10">
                               <h2>
                               <!--<a href=" .html">Play All</a> -->
                               <!-- <a href=".html"><i class="fa fa-fw fa-play-circle"></i></a> -->
                               <!-- <input type="button" value="Play All" name = "Play All"> -->
                               </h2>
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
                                            @foreach ($tracks as $t)
                                            <tr>
                                                <td> </td>                                                
                                                <td>{{$t->ttitle}}</td>                                                
                                                <td>{{$t->artistname}}</td>
                                                <td>{{$t->tgenre}}</td>
                                                <td>{{$t->duration}}</td>
                                                <td><a class="playtrack" sectionId="{{$t->tid}}"><i class="fa fa-fw fa-play"></i></a> </td>                                   
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
             
            
            <!-- /#page-wrapper -->
        </div>

    </body>
    <footer>
        
    </footer>
</html>
