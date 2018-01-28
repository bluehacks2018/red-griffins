<!DOCTYPE html>
<html>
<head>

<title>Blue Hacks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/bootstrap-3.3.7/docs/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src="src/jquery-3.2.1.min.js"></script>
    <script src="src/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script src="src/navbar.js"></script>
    <?php
      
    ?>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
</head>

<body onload="getLocation()">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="border-radius: 0;">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> grabbage</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Update</a></li>
        <li><a href="#">Map</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="content">
      
    <b>Start: </b>
    <select id="start">
      <option value="<?php echo $_GET['latlong']; ?>"><?php echo $_GET['latlong']; ?></option>
      <option value="Congressional Avenue">St Louis</option>
      
    </select>
    <b>End: </b>
    <select id="end">
    <option value="Novaliches, Quezon City">Chicago</option>
    <option value="Congressional Avenue">St Louis</option>
      
    </select>
    </div>
    <div id="map"></div>
    <script>
      

      function initMap() {

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }
      
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

      function getLocation() {
        
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   var z = position.coords.latitude + "," + position.coords.longitude;
  
}

    </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBuWpjVswEpd81xORWJBOcen0J6LIHLRc&callback=initMap"
   async defer></script>
  
  </body>


    
</html>