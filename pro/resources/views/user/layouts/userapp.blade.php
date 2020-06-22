@include('/user/inc/header')

<body class="fixed-sn white-skin  lighten-1" style="background-image: url(../../img/d4.jpg);background-repeat: no-repeat;
  background-attachment: fixed;">

@include('/user/inc/sidebar')
@include('/user/inc/nav')
@include('/user/inc/fixlay')


<main>
@yield('content')
</main>


@include('/user/inc/footer')

@include('/user/inc/end')





</body>

</html>

