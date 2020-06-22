<header>
    <style>
        .bg {
            background-image: url("../../img/d1.jpg");


        }
    </style>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav bg fixed">
        <ul class="custom-scrollbar">
            <div class="warning-color">
                <a class="navbar-brand d-flex align-items-center justify-content-center" href="#">
                    <div ><img src="../../img/logo.png" width="40px" alt="Responsive image" class="mt-3"></div>
                </a>
                <b><hr class="hr-bold"></b>


                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user_dash">

                    <div class="sidebar-brand-text text-muted mx-2"><h5><b>{{Auth::user()->name}}</b></h5></div>
                </a>
            </div>



            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                    <li>


                        <a href="/user_dash" class="collapsible-header waves-effect "><i class="w-fa fas fa-tachometer-alt"></i>Dashboard</a>


                    </li>


                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Manage Product<i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="/product" class="waves-effect"><i class="fas fa-user-lock"></i>Add Product</a>
                                </li>
                                <li>
                                    <a href="/productshow" class="waves-effect"><i class="fas fa-user-md fa-lg" aria-hidden="true" ></i>&nbsp;&nbsp;View Product</a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li>
                        <a class="collapsible-header waves-effect arrow-r" href="/AInfo">
                            <i class="w-fa fas fa-user"></i>Personal Information
                        </a>

                    </li>




                </ul>
            </li>
            <!-- Side navigation links -->

        </ul>
        <div class="sidenav-bg mask-slight "></div>


    </div>



