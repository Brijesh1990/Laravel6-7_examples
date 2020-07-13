
@extends('frontend.master')
@section('flipkart_title')
shopping for Desired or all things Rajkot | Ahemdabad
@endsection
@include('frontend.inc.navigation')


  <!-- Navbar -->

  <!--Carousel Wrapper-->
  
  
  <main>
    <div class="container">
     <br><br><br><br><br>
     <h2 align="center">View Your Cart <span class="fa fa-shopping-cart"></span></h2>
     <hr style="border:solid 2px red">
     

     <table class="table">
  <thead>
    <tr>
      <th scope="col">#Cartid</th>
      <th scope="col">Product</th>
      <th scope="col">Productname</th>
      <th scope="col">Price</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Action</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="{{ asset('front')}}/images/250738177.jpg" style="width:80px; height:80px"></td>
      <td>Ladies woolen</td>
      <td>4500-/</td>
      <td>4500-/</td>
      <td><a href=""><span class="fa fa-trash" style="color:red; font-size:40px"></span></td>
    </tr>


    <tr>
    
     <td scope="row" colspan="5"><h2 align="right" style="color:green">Subtotal : Rs. 4500-/</td>

     </tr>
    

     <tr>
    
    <td scope="row" colspan="5">
    
    <a href="\products"><button type="button" class="btn btn-lg btn-success">Continue Shopping >></button></a>

    
    <a href="\checkout"<button type="button" class="btn btn-lg btn-danger pull-right" style="float:right">Checkout Here >></button></a>
    
    </td>

    </tr>
   
  </tbody>
</table>


</div>
</main>






  
    @include('frontend.inc.footer')
