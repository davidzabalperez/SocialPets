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

   
    <!-- Custom styles for this template -->

    <!-- Script para el mapa OSV -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
   <script src="https://unpkg.com/leaflet-control-geocoder@latest/dist/Control.Geocoder.js"></script>

  </head>

  <body class="feed-section text-center">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" >
@yield('content')

</section>
<div id="mapid"></div>
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
   <script>
    var mapa = L.map('mapid').setView([43.3072913, -1.99], 5);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoiam9zdTE1IiwiYSI6ImNqcmFmNXRqYTBwcm40NGw4bTBqYjc5bzgifQ.vwuIDsqmWOzfYoTznLksEA', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mapa);
    var searchControl = L.esri.Geocoding.geosearch({                                     
    providers: [ L.esri.Geocoding.arcgisOnlineProvider() ]
  }).addTo(mapa);


 </script>

</html>
