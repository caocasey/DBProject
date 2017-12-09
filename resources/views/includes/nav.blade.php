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
        <a class="navbar-brand" href="mymusic.html">Monster music</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="search.html"><i class="fa fa-search"></i></a>
        </li>
        <li class="dropdown">
            <a href="logout"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{{ url('index') }}"><i class="fa fa-fw fa-home"></i> Home </a>
            </li>
            <li>
                <a href="{{ url('search') }}"><i class="fa fa-fw fa-search"></i> Search</a>
            </li>
            <li> <!--class="active"-->
                <a href="{{ url('users/account') }}"><i class="fa fa-fw fa-edit"></i> Profile</a>
            </li>
            <li>
                <a href="mymusic.html"><i class="fa fa-fw fa-music"></i> My music</a>
            </li>
            <li>
                <a href="{{ url('logout') }}"><i class="fa fa-fw fa-sign-out-alt"></i> Sign out</a>
            </li>
            @include('includes.footer')
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>