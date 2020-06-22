<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SellPro Register</title>

    <!-- Fonts --><link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="/" class="nav-link pl-0">Home</a></li>

                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
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


<div class="container mt-4">
    <div class="row justify-content-center ">
        <div class="col-md-8 ">
            <div class="card example z-depth-5 rgba(255, 152, 0, 0.3) rgba-orange-light">
                <div class="card-header text-white warning-color-dark" ><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;<B>User Register</B></div>

                <div class="card-body rgba-blue-slight">
                    <div class="form-row">
                        @if(session()->has('message'))
                            <center><div class="alert alert-success col-md-6">
                                    {{session()->get('message')}}

                                </div></center>
                        @endif

                        @if(session()->has('id'))
                            <center><div class="alert alert-primary col-md-6">
                                    {{session()->get('id')}}

                                </div></center>
                        @endif

                    </div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn blue-gradient btn-rounded btn-sm" name="submit">
                                    {{ __('Register') }}
                                </button>

                                <button type="reset" class="btn peach-gradient btn-rounded btn-sm" >
                                    {{ __('Clear') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>




</body>
</html>








