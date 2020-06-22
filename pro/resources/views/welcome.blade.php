<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SellPro Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../css/mdb.min.css" rel="stylesheet">
    <link href="../../css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../../css/style.css" rel="stylesheet">

    
      
    </head>
    <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sunny-morning-gradient">

        <div class="container ">

            <a class="navbar-brand" href="#">
                <h1 class="blo"><b>SellPro</b></h1>
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Contact</a>
                    </li>


                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a  class="btn brn-sm btn-outline-default waves-effect" href="{{ url('/home') }}">Home</a>
                                @else
                                    <a class="btn btn-sm btn-outline-default waves-effect" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a class="btn btn-sm btn-outline-default waves-effect" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <div class="container mt-5 heavy-rain-gradient rounded">

        <style>
            .card-body {
                border-bottom-left-radius: inherit !important;
                border-bottom-right-radius: inherit !important;
            }
        </style>

        <!--Section: Content-->
        <section class="dark-grey-text text-center">

            <!-- Section heading -->
            <h3 class="font-weight-bold mb-4 pb-2">Our Product</h3>
            <!-- Section description -->
            <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                @foreach($home as $pro)

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!-- Card -->
                    <div class="card card-cascade wider card-ecommerce">
                        <!-- Card image -->
                        <div class="view view-cascade overlay zoom">
                            <img src="{{$pro->image}}" class="card-img-top "
                                 alt="sample photo">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card image -->
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center pb-0">
                            <!-- Title -->
                            <h5 class="card-title">
                                <strong>
                                    <a href="">{{ $pro->p_name }}</a>
                                </strong>
                            </h5>
                            <!-- Description -->
                            <p class="card-text">{{$pro->User_name}}</p>
                            <!-- Card footer -->
                            <div class="card-footer mt-4">
                                <p class="float-left font-weight-bold mb-1 pb-2">{{$pro->p_price}}</p>
                                <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                    <i class="fas fa-heart grey-text ml-3"></i>
                                </a>
                                <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick Look">
                                    <i class="fas fa-eye grey-text ml-3"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>

                @endforeach
                <!-- Grid column -->


                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Content-->


    </div>
    {{ $home->links() }}


    <footer class="page-footer pt-0 mt-5 unique-color-dark fixed">

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">

                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

            </div>
        </div>

    </footer>








        
    <script src="../../js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
    <script>
        $(function () {
            $('.material-tooltip-main').tooltip({
                template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
            });
        })
    </script>



    </body>
</html>
