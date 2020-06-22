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



<!-- SCRIPTS -->
<!-- JQuery -->
<script src="../../js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>




<!-- data table-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {

        $('#datatableid').DataTable();

    });
</script>

@yield('footer')





<!-- Initializations -->
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>



<script>
    $(function(){
        $( "#dob" ).datepicker();
    });
</script>










</body>

</html>

