<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>
 
        </style>
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
        <script type="text/javascript" src="{{URL::asset('js/artist.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    </head>
    <body>
        <!-- Navigation -->
        @include('includes.nav')

         <div style="padding-left: 250px;"id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            <img class="img-fluid" src="img/icon.png" alt="">
                            {{$aname}}
                            <small>has {{$tracknum}} tracks</small>
                            <small><a href="../../artist/like/{{$aid}}">Like Artist</a></small>

                            <small><a href="../../artist/like/{{$aid}}"><i class="fa fa-fw fa-heart"></i></a> </small>
                            <small><a href="../../artist/unlike/{{$aid}}">Unlike Artist</a></small>
                            <small><a href="../../artist/unlike/{{$aid}}"><i class="fa fa-fw fa-times"></i></a> </small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                           
                            <div class="col-lg-10">
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
                                            @foreach ($tracklists as $l)
                                            <tr>
                                                <td> </td>                                                
                                                <td>{{$l->ttitle}}</td>                                                
                                                <td>{{$aname}}</td>
                                                <td>{{$l->tgenre}}</td>
                                                <td>{{$l->duration}}</td>
                                                <td><a class="playtrack" sectionId="{{$l->tid}}"><i class="fa fa-fw fa-play"></i></a>
                                                    <a href=".html"><i class="fa fa-fw fa-plus"></i></a>
                                                    <a class="ratetrack" sectionId="{{$l->tid}}"><i class="fa fa-fw fa-star"></i></a>
                                                </td>                                      
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
</html>
