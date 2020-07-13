@extends('frontend.master')
@section('flipkart_title')
shopping for Desired or all things Rajkot | Ahemdabad | Sign In Page
@endsection

@include('frontend.inc.navigation')
<!-- @include('frontend.inc.sidebar')
@include('frontend.inc.slider') -->
<br><br>        
<div class="row">
        
        <div class="col-lg-8 col-md-6 mb-2" style="margin-left:16%">
            <div class="card h-100">
                
<!-- Default form login -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="ForgetPassword">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-danger btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="SignUp">Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>

    <a href="#" class="mx-2" role="button"><i class="fa fa-facebook"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fa fa-twitter"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fa fa-github"></i></a>

</form>
<!-- Default form login -->



</div>
 </div>
  </div>
  @include('frontend.inc.footer')