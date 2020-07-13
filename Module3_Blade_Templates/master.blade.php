<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Mega Store @yield('flipkart_title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('front') }}/images/favicon.png" rel="icon">
  <link href="{{ asset('front') }}/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('front') }}/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @yield("navbar")
  <!-- Page Content -->
  @yield("sidebar")
  @yield("slider")
  <!-- /.container -->
  @yield("content")
  <!-- Footer -->
  @yield("footer")
 

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('front') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('front') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
