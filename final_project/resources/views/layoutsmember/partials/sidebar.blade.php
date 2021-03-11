 <nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-80 img-radius" src="{{ asset('assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span id="more-details">{{ Auth::user()->name}}<i class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="main-menu-content">
                    <ul>
                        <li class="more-details">
                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="/dashboard" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                    <hr>
                <li class="">
                    <a href="/profil" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                        <span class="pcoded-mtext">Profil</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li><hr>
                <li class="">
                    <a href="{{route('koleksi.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>D</b></span>
                        <span class="pcoded-mtext">Koleksi</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li><hr>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-book"></i><b>D</b></span>
                        <span class="pcoded-mtext">History</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        
                
            </ul>
            
        </div>
    </nav>