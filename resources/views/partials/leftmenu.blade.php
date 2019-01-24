<!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                
                    <!-- User box -->
                    <div class="user-box" style="margin-top: -20px;">
                        <div class="user-img">
                            <img src="{{ url('/images/users/avatar-1.jpg') }}" alt="user-img"class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">{{ ucwords(auth()->user()->name) }}</a> </h5>
                        <p class="text-muted">
                            App Admin
                         </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li><a href="{{ url('/') }}">Home</a></li>


                            <li>
                                <a href="javascript: void(0);"><i class="fi-plus"></i> <span> People </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="true">
                                    <li><a href="{{ url('/add/person') }}">Add Person</a></li>
                                </ul>
                            </li>

                            
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->