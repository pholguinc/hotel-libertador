<!-- begin navbar-header -->
<div class="navbar-header">
    <a href="index-1.html" class="navbar-brand"><span class="navbar-logo"></span> <b class="mr-1">Hotel Libertador</b> 2.0</a>
    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<!-- end navbar-header -->

<!-- begin header-nav -->
<ul class="navbar-nav navbar-right">
    <li class="navbar-form">
        <form action="" method="POST" name="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword">
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </li>

    <li class="dropdown navbar-user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('img/user/user-13.jpeg') }}" alt="">
            <span class="d-none d-md-inline">{{ auth()->user()->name }}</span> <b class="caret"></b>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="javascript:;" class="dropdown-item">Mi perfil</a>
            <div class="dropdown-divider"></div>
            <a href="javascript:;" class="dropdown-item">Log Out</a>
        </div>
    </li>
</ul>
<!-- end header-nav -->
