<div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ url('/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> <span class="ml-1">
                                        {{ ucwords(auth()->user()->name) }}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                     <!-- item-->
                                    <a href="#" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                        <i class="fi-power"></i> <span>Logout</span>

                                        <form action="{{ route('logout') }}" id="logout-form" method="POST"> @csrf </form>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Demo App dashboard panel</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>