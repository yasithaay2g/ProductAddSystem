


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SellPro login</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Plugin file -->

    <link href="css/main.css" rel="stylesheet">
    <style>
        div.imgg {
            background: rgba(0, 151, 19, 0.1);

        }

    </style>








</head>
<body  style="background-image: url(../../);  background-size: cover;background-repeat: no-repeat;" class="img-fluid" alt="Responsive image">

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light sunny-morning-gradient">

    <div class="container-fluid">

        <a class="navbar-brand mt-1" href="/">
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
                <li class="nav-item"><a href="/" class="nav-link pl-0">Home</a></li>

                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect"
                       target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
<!--/.Navbar-->




<!-- Modal -->

<div class="modal-dialog rounded-circle " >
    <!--Content-->
    <div class="modal-content form-elegant rgba(255, 152, 0, 0.3) rgba-orange-light">
        <!--Header-->
        <div class="modal-header text-center warning-color-dark">


            <h3 class="modal-title w-100 font-weight-bold my-3 text-white" id="myModalLabel"><i class="fas fa-user"></i>&nbsp;<strong>Sign In</strong></h3>

        </div>
        <!--Body-->
        <div class="modal-body mx-4 ">
            <!--Body-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix dark"></i>
                    <input type="email" id="Form-email1" class="form-control validate  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label data-error="wrong" data-success="right" for="Form-email1" class="font-weight-bold">Your email</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="md-form pb-3">

                    <i class="fas fa-lock prefix dark"></i>
                    <input type="password" id="Form-pass1" class="form-control validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label data-error="wrong" data-success="right" for="Form-pass1" class="font-weight-bold">Your password</label>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="text-center mb-3">
                    <button type="submit" class="btn  btn-warning btn-block btn-rounded text-primary .z-depth-4 font-weight-bold waves-effect waves-light">Sign in</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-danger font-weight-bold" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>


            <div>
                <!--Footer-->




                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">
                    </p>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
</div>

<!--<footer class="page-footer pt-0 mt-5 unique-color-dark fixed">

 Copyright
  <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">

          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="www.sci.ruh.ac.lk/computer/" target="_blank">DCS RUH</a>

      </div>
  </div>

</footer>-->





<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>




</body>
</html>
