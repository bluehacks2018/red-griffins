<!DOCTYPE html>
<html>
<head>
  <title>Grabbage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="text/css" href="images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: white;">


<nav class="navbar navbar-default navbar-fixed-top">
  <div  class="container-fluid" style="background-color: #61d3d2;">
    <div class="navbar-header" style="color: white;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="color: white;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a class="navbar-brand" href="index.php"  style="color: white;"><strong>GRAB<span style="#1a1a1a">AGE</span></strong></a>

    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"  style="color: white;">Objective</a></li>
        <li><a href="logout.php" style="color: white;">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="UIuser">
  <?php
  session_start();
  ?>
  <font style="font-size:20px;font-weight:bolder;">
    <center>
      
      <?php echo $_SESSION["loginuser"]; ?>  
    </center>
  </font>
   
  <center>
      <p style="font-size:14px;">
        <strong>
        <?php echo $_SESSION["useradd"]; ?> 
        </strong>
      </p>
    <hr  size="40px" color="black">

    <h1 style="font-size: 32px;">Send Collection<Br>Request</h1>
<br>
  
  <form method="POST">
    <!-- <input type="submit" name="hays"> -->
     <input type='image' src='images/trash.png' name='collect' style='height: 50%;width: 40%;' class="img-responsive">
  </form>
  </center>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom"><center>
  <strong>
  All Rights Reserved.<br>
  Grabbage | January 2018

</strong>
</center>
</nav>


<?php

    $con=mysqli_connect('localhost','root','','db_bluehacks');
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

    if(isset($_POST['collect_x']))
    {
      $fname=$_SESSION["loginuser"];
      $add=$_SESSION["useradd"];
      $date=date('m/d/Y');
      $result= mysqli_query($con,"INSERT INTO tbl_request VALUES('','$fname','$add','$date','')");
      if($result)
      {
      echo '<p align="center" style="float:top;color:red; ">Request for Collection Sent!</p>';
      
      }
    }

?>


</body>
</html>