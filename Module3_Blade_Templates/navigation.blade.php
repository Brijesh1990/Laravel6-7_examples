 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <!-- <a class="navbar-brand" href="#"><img src="{{ asset('front')}}/images/logo.png" style="width:15%; height:60px;position:absolute; border-bottom: 2px solid red; margin-top:-2.5%"></a> -->

      <a hrf="#"><h2 style="color:white"><span style="color:red; font-size:40px;">Me</span>ga <span style="color:red;  font-size:40px;">St</span>ore</h2></a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b><input type="text" name="search" placeholder="Search Products Here!!" class="form-control"></b>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AboutUs">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MensProducts"><span class="fa fa-male"></span> Mens</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="WomensProducts"><span class="fa fa-female"></span> Womens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ContactUs">Contact</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="ViewCart">Cart <span class="fa fa-shopping-cart"> <span class="badge badge-lg" style="background-color:red; color:white">0</span><span></span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" class="dropdown" data-toggle="dropdown"><span class="fa fa-user"></span> MyAccount <span class="caret" style="color:white"></span></a>

            <ul class="dropdown-menu">
              <center>
                <li>
                  <a href="SignIn" style="color:black !important"><span class="fa fa-user"> SignIn!</span></a>
                </li>
            <li>
            <a  href="SignUp" style="color:black !important"><span class="fa fa-user"> SignUp!</span></a>
          </li>
          
         

          </center>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
