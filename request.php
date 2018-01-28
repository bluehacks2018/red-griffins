<!DOCTYPE html>
<html>
<head>

<title>Blue Hacks</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="src/bootstrap-3.3.7/docs/dist/css/bootstrap.min.css">
  <script src="src/jquery-3.2.1.min.js"></script>
  <script src="src/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
</head>
<?php
require_once('actions.php');
?>
<body onload="startTime()">
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
        
        <li class="active"><a href="#">Update</a></li>
        <!--<li><a href="#">Map</a></li>-->
      </ul>
      
    </div>
  </div>
</nav>


<div class="container">
<h2>Garbage Collection Request</h2>       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name/Barangay</th>
        
        <th>Date</th>
        <th></th>   
      </tr>
    </thead>
    <tbody>
    <?php
        require_once('config.php');
        
        $sql = "SELECT * FROM tbl_request ORDER BY req_date DESC";
        @$result = $conn->query($sql);

        if (@$result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '
            <form method="POST" action="testsss.php?des= '.@$row['cus_loc'].'&latlong='.@$_GET['latlong'].'">
            <tr>
            <td><strong>' . @$row['cus_name'].'</strong><br>'. @$row['cus_loc']. '</td>
          
            <td>'. @$row['req_date'].'</td>
            <td>
              <a href="?action=remove&code='. $row["req_id"] .'" class="btn btn-danger" style="width:100%;">Done</a><br>
              <button type="submit" class="btn btn-success" style="width:100%;">Get Direction</button>
            </td>
            </tr>
            </form>
            ';
        }
        } else {
          echo "0 results";
        }
            @$conn->close();

    ?>
    <script type="text/javascript">
    
      function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }

      function showPosition(position) {
        var z = position.coords.latitude + "," + position.coords.longitude;  
        window.location.href ="request.php?latlong=" + z;

    
      }  
      function startTime(){
        setTimeout(function(){getLocation()},1000);
      }
    </script>
    </tbody>
  </table>
</div>

</body>

</html>