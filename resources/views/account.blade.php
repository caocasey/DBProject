<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Monster Music</title>

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

    </head>
    <body>

        <div id="wrapper">

            @include('includes.nav')

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            <img class="img-fluid" src="{{ URL::asset('images/icon.png')}}" alt="">
                            {{Session::get('uname')}} 
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($lists as $list)
                            <div class="form-group">           
                                <p class="form-control-static">Username：{{ $list->uname }}</p>
                                <p class="form-control-static">Realname：{{ $list->urname }}</p>
                                <p class="form-control-static">Sex：{{ $list->usex }}</p>
                                <p class="form-control-static">E-mail：{{ $list->uemail }}</p>
                                <p class="form-control-static">Birthday：{{ $list->dbirth }}</p>
                                <p class="form-control-static">Country：{{ $list->country }}</p>
                                <p class="form-control-static">State：{{ $list->state }}</p>
                                <p class="form-control-static">City：{{ $list->city }}</p>
                                <p class="form-control-static">Zip：{{ $list->zip }}</p>
                                <p class="form-control-static">Phone：{{ $list->uphone }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
      
    </body>
</html>
