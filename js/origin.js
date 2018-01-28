

var xx = document.getElementById('x');
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   var z = position.coords.latitude + "," + position.coords.longitude;
   xx.value = z;
}
//window.location.href ="/testsss.php?latlong=" + z;
