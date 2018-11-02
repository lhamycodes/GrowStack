<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>

    <a class="navbar-brand" href="index">
        growstack
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="./img/avatar-1.png" class="avatar avatar-sm" alt="logo" style="height:30px; width:30px">
                <span class="small ml-1 d-md-down-none"><?php echo $_SESSION['growstack']['fullName'];?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                
                <div class="dropdown-header">Account</div>

                <a href="logout" class="dropdown-item">
                    <i class="fa fa-lock"></i> Logout
                </a>
                
            </div>
        </li>
    </ul>
</nav>