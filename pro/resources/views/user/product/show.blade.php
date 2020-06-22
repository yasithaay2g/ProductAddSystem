@extends('user.layouts.userapp')
@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
    <style>
        th,td{
            text-align: center;
        }
        .box-title{
            font-size: 25px!important;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-2">

        <div>
            <div >



            @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}

                    </div>
                @endif

                <div class="row">
                    <div class="col-auto mr-auto"></div>
                    <div class="col-auto"><a href="/product" class="btn btn-danger btn-sm mb-3">Add New Product</a> </div>
                </div>
                <!-- Card image -->

                <div class="card card-cascade narrower z-depth-1 rgba(255, 152, 0, 0.7) rgba-orange-strong">
                <div class="view view-cascade gradient-card-header peach-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                    <div>

                    </div>

                    <a href="" class="black-text mx-3"><h4 class="my-1 mb-2 font-weight-bold">Product Manage</h4></a>

                    <div>

                    </div>

                </div>


                <div class="px-4">

                                <div class="table-responsive">

                                    <!-- Table -->
                                    <table id="example1" class="table   table-hover table-sm" cellspacing="0" width="100%">

                                        <!-- Table head -->
                                        <thead class="winter-neva-gradient">
                                <tr class="text-black">
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Add Date</th>


                                    <th class="edit_post">Edit</th>

                                    <th class="delete_post">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $pro)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $pro -> p_name }}</td>
                                        <td><img src="{{ $pro -> image }}" width="75px" height="75px"  class="rounded z-depth-3"></td>
                                        <td>{{ $pro -> created_at }}</td>




                                        <td><a href="/productedit/ {{$pro->id }}" class="btn btn-success btn-sm btn-rounded" >Edit</a></td>

                                        <td><form action="/productdelete/{{ $pro->id }}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" onclick="return confirm('Are you sure delete post?');" class="btn btn-danger btn-sm btn-rounded">Delete</button>
                                            </form>

                                           </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footer')
    {{--<script rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.js') }}"></script>
  --}}
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />

    <script>
        $(function () {
            $('#example1').DataTable();
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        })
        $('.close').click(function(){
            $(this).next().hide();
            $(this).hide();
        });
    </script>
@endsection
