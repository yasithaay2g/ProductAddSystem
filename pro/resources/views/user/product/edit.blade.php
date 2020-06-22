@extends('user.layouts.userapp')

@section('headSection')
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
    <style>
        .box-title{
            font-size: 25px!important;
        }
    </style>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">

        <!-- Main content -->
        <div class="container mt-2">

            <div>
                <div >


                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}

                        </div>
                    @endif
                    <div class="card card-cascade narrower z-depth-1 rgba(255, 152, 0, 0.7) rgba-orange-strong">



                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header peach-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                            <div>

                            </div>

                            <a href="" class="black-text mx-3"><h4 class="my-1 mb-2 font-weight-bold">Update Product</h4></a>

                            <div>

                            </div>

                        </div>


                        <div class="px-4">





                            <form role="form" action="/productupdate/{{$pro->id}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                            {{method_field('PUT')}}

                                    <div class="box-body">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Product Name</label>
                                                <input type="text" class="form-control" id="title" name="p_name" placeholder="Product Name" value="{{$pro->p_name}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sub">Product Other Name</label>
                                                <input type="text" class="form-control" id="sub" name="p_sub_name" placeholder="Product Other Name" value="{{$pro->p_sub_name}}" required>
                                            </div>

                                            <div class="form-group">

                                                <label for="link">Price</label>
                                                <input type="text" class="form-control" id="link" name="p_price" placeholder="Price" value="{{$pro->p_sub_name}}">


                                            <div class="form-group">
                                                <label for="link">Product Description (Optional)</label>
                                                <input type="text" class="form-control" id="link" name="description" placeholder="Product Description" value="{{$pro->description}}">
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="image">Product Image :</label>
                                                    <input type="file" name="image" id="post_image" style="width: 120px" accept=".jpg, .jpeg, .png" value="{{ $pro -> image }}"><br><br>
                                                    <input type="hidden" name="old_image" value="{{$pro->image}}">
                                                    <img src="/{{$pro -> image}}" id="post-img-show" width="150px" height="150px">
                                                </div><br>


                                            </div>

                                    </div>



                                    <center><div class="box-footer mb-3">
                                            <button type="submit" class="btn btn-success btn-sm ">Submit</button>
                                            <a href="/user_dash">
                                                <button type="button" class="btn btn-danger btn-sm">Back</button>
                                            </a>
                                        </div></center>

                                    </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#post-img-show').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#post_image").change(function(){
            readURL(this);
        });
    </script>
@endsection

@section('footer')
    <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
    <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.select2').select2();

            CKEDITOR.replace( 'post-body-ckeditor' );

            $('.close').click(function(){
                $(this).next().hide();
                $(this).hide();
            });

        });

    </script>
@endsection
