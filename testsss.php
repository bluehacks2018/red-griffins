<!DOCTYPE html>
<html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="src/bootstrap-3.3.7/docs/dist/css/bootstrap.min.css">
  <script src="src/jquery-3.2.1.min.js"></script>
  <script src="src/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
<body onload="getLocation()">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="border-radius: 0;">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><span style="color:#33cccc;">GRAB</span>AGE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li ><a href="request.php?">Update</a></li>
        <!--<li><a href="#">Map</a></li>-->
      </ul>
      
    </div>
  </div>
</nav>
 
    <script>
    	function initMap() {
    		var directionsService = new google.maps.DirectionsService;
        	var directionsDisplay = new google.maps.DirectionsRenderer;
        	 var map = new google.maps.Map(document.getElementById('map'), 
        	 	{zoom: 7, center: 
        	 		{lat:1.85, lng: -87.65}
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
    </script>
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>



<div class="google-maps">
<iframe max-width="100%" height="500px" frameborder="0" style="border:0;padding:5px 5px 5px 5px" src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo $_GET['latlong'];  ?>&destination=<?php echo $_GET['des']; ?>&key=AIzaSyAJnCY2EX5VLfSethf1y8Nud9qlIgZnj-c" allowfullscreen></iframe>
</div>
<script>
var x = document.getElementById("lati");
var y = document.getElementById("longi");



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
</body>
</html>
