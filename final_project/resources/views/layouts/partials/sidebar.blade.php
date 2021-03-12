 <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="{{asset('assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name}}</span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ route("dashadmin.index") }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    <hr>
                                <li class="">
                                    <a href="{{ route("member.index") }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Member</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li><hr>
                                <li class="">
                                    <a href="{{ route("kategori.index") }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-vector"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Kategori</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li><hr>
                                <li class="">
                                    <a href="{{ route("penerbit.index") }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-ruler-pencil"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Penerbit</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li><hr>
                                <li class="">
                                    <a href="{{ route("buku.index") }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-book"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Buku</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        
                                
                            </ul>
                           
                        </div>
                    </nav>