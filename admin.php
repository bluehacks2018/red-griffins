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
      <a class="navbar-brand" href="index.php"  style="color: white;"><strong>GRABBAGE</strong></a>

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
  echo "<font style='font-size:40px;font-weight:bolder;'><center>\tGood Day! " . $_SESSION["loginuser"] .".</center></font>";
  
  echo "<center>".

      "<p style='font-size:24px;'><strong>". $_SESSION["useradd"]."</strong></p><hr color='black' size='40px'>"
      ."

    <h1 style='font-size: 40px;'>Tap to Collect Garbage</h1>
<br><br><br>
  
  <form action=''>
    <a href=''><input type='image' src='images/trash.png' name='collect' style='height: 50%;width: 40%;'></a>
  </form>

  </center>
</div>";
  ?>

<nav class="navbar navbar-default navbar-fixed-bottom"><center>
  <strong>
  All Rights Reserved.<br>
  Grabbage | January 2018

</strong>
</center>
</nav>
</body>
</html>