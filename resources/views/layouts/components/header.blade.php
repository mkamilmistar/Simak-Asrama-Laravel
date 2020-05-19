<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="{{asset('sites/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('sites/images/logo2.png')}}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <div class="icon-navbar">
                    <div class="col-md-2">
                        <a class="fa fa-calendar-o"></a>
                        &nbsp
                        <span id="date"></span>
                    </div>
                    <div class="col-md-2">
                        <a class="fa fa-clock-o">
                            &nbsp
                            <a id="jam"> </a>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->nama}}
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                    <a class="nav-link" href="/logout"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->