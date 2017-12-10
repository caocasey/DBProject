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
        <script type="text/javascript" src="{{URL::asset('js/index.js')}}"></script>
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
                            Add to the playlist
                            <small><i  class="fa fa-fw fa-check"></i></small>
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
                                                <th width="5%"> </th>
                                                <th width="24%">Playlist</th>                                                
                                                <th width="14%">Creator</th>
                                                <th width="17%">Time</th>
                                                <th width="14%">Button</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form enctype="multipart/form-data" id="bookRestaurant" action="{{url('adding')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            @foreach ($data as $d)
                                            <tr>
                                                <td> </td>
                                                <td>{{$d->ptitle}}</td>
                                                <td>{{$d->uname}}</td>
                                                <td>{{$d->pldate}}</td>
                                                <td><button name = "adding" type="submit" id = "adding" value="{{ $d->pid }}" class="btn btn-info  btn-xs"><i class="fa fa-fw fa-check"></i></button></td>
                                            </tr>
                                            @endforeach
                                            </form>
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
