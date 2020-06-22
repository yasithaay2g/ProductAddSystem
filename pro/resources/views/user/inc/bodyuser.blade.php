@extends('user.layouts.userapp2')

@section('content')


<!-- Main layout -->


    <div class="container-fluid">


        <h5 class="my-4 white-text font-weight-bold">Welcome {{Auth::user()->name}} ! / Dashboards</h5>
        <!-- Section: Button icon -->
        <section>

            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower rgba(255, 255, 255, 0.7) rgba-white-strong">

                        <div class="view view-cascade gradient-card-header #ffc107 amber animated zoomIn">
                            <a href="{{url('/product')}}" class="text-white"><i class="fa fa-hand-holding-usd fa-7x"></i></a>
                        </div>

                        <div class="card-body card-body-cascade text-center">
                            <div class="list-group list-panel">
                                <h5>Add Product</h5>
                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower rgba(255, 255, 255, 0.7) rgba-white-strong ">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header #ffb300 amber darken-1 animated zoomIn">
                            <a href="{{url('/productshow')}}" class="text-white"><i class="fab fa-gofore fa-7x" aria-hidden="true"></i></a>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <div class="list-group list-panel">

                                <h5>Manage Product</h5>
                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower rgba(255, 255, 255, 0.7) rgba-white-strong">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header #ffa000 amber darken-2 animated zoomIn">

                                <i class="fas fa-envelope fa-7x"></i>

                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <div class="list-group list-panel">
                                <h5>Notification</h5>
                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>


        </section>


    </div>


<!-- Main layout -->



@endsection
