<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav warning-color-dark" >

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-dn mr-auto" >
        <p><b><h4 style="font-family:'Cambria Math';">&nbsp;&nbsp;Product Add System</h4></b></p>
    </div>

    <div class="d-flex change-mode">

        <div class="ml-auto mb-0 mr-3 change-mode-wrapper" >

            <a href="/adminad" class="btn btn-outline-default btn-sm waves-effect shadow-sm">&nbsp;User Dashboard</a>
        </div>

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <span class="badge red">3</span> <i class="fas fa-bell"></i>

                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>



                <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink">





                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{Auth::user()->name}}
</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-warning" aria-labelledby="userDropdown">

                    <a class="dropdown-item note-danger"  href="#"><i class="far fa-user-circle"></i>&nbsp;&nbsp;My Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
        <!-- Navbar links -->

    </div>

</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hi {{Auth::user()->name}}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you want logout?</div>
            <div class="modal-footer">

                <a class="btn btn-primary btn-sm" href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Yes</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

