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

    <p class="h4 mb-4">Sign Up</p>
    <!-- Upload image -->
    <input type="file" name="img" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Photo">

    <!-- Email -->
     <input type="email" name="em" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">


    <!-- Password -->
    <input type="password" name="pass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <!-- Confirm Password -->
    <input type="password" name="cpass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Confirm-Password">

    
    <!-- Gender -->
    Male <span class="fa fa-male"></span>:<input type="radio" name="gender" value="male" id="defaultLoginFormPassword">
    
    Female <span class="fa fa-female"></span>: <input type="radio" name="gender" value="Female" id="defaultLoginFormPassword">



    <br><br>
    <!-- Gender -->
    Singing <span class="fa fa-music"></span>:<input type="checkbox" name="chk[]" value="singing" id="defaultLoginFormPassword">
    
    Playing <span class="fa fa-play"></span>: <input type="checkbox" name="chk[]" value="singing" id="defaultLoginFormPassword">



    <!-- Address -->
    <textarea name="address" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Address"></textarea>


    
    <!-- Mobile -->
    <input type="text" name="mobile" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mobile">





    <div class="d-flex justify-content-around">
        <div>
            
        </div>
        
    </div>

    <!-- Sign in button -->
    <button class="btn btn-danger btn-block my-4" type="submit">Sign Up</button>

    <!-- Register -->
    <p>Already a member?
        <a href="SignIn">Login Here</a>
    </p>

</form>
<!-- Default form login -->



</div>
 </div>
  </div>
  @include('frontend.inc.footer')