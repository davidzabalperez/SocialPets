<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
 

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="/css/grayscale.css">

     <link rel="stylesheet" type="text/css" href="/css/feed.css">

     <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     

    <!-- Custom fonts for this template -->
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  

  </head>

  <body class="feed-section text-center">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" >
@yield('content')

</section>
  </body>
<footer class="footerCustom">
      <div class="container">

        Copyright &copy; Social Pets 2019
      </div>
</footer>
    <!-- Footer -->

  <script src="/jquery/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
  <script src="/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/grayscale.min.js"></script>

</html>
