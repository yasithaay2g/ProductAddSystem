@extends('layouts.app')

@section('content')

<div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Default form register -->
          <form class="text-center" action="/store">
                @csrf
            <p class="h4 mb-4">Sign up</p>

            <div class="form-row mb-4">
              <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
              </div>
            </div>

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

         

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

   

            <!-- Terms of service -->
            <p>By clicking
              <em>Sign up</em> you agree to our
              <a href="" target="_blank">terms of service</a>

          </form>
          <!-- Default form register -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

@endsection