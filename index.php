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
<body>


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
        <li><a href="#python_history"  style="color: white;">Objective</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="log_in">
 <form method="POST">

 	<center>
 	<img src="images/logo.png" alt="CS Logo" height="150px">
 	</center>
<br>
<center>
<table style="width: 100%;">
	<tr><td align="center">
  	<span class="glyphicon glyphicon-user" style="color:#45b7b6;"></span></td><td><input type="text" id="fname" name="txtusername" placeholder="Username" required>
  </td></tr>

    <tr><td align="center"><span class="glyphicon glyphicon-lock" style="color: #45b7b6;"></span></td><td><input type="password" id="lname" name="txtpassword" placeholder="Password" required>
    </td></tr>

    <tr><td colspan="2">
    <input type="submit" class="btn btn-danger" value="Log In" style="font-weight: bolder;font-size: 18px;" name="btnLogin"></td></tr>
 </table>

    <p style="font-weight: bolder;font-size: 17px;">Not yet a Member? <a href="sign_up.php">Sign Up</a></p>
    </center>
  </form>
</div>



<nav class="navbar navbar-default navbar-fixed-bottom"><center>
  <strong>
  All Rights Reserved.<br>
  Grabbage | January 2018
</strong>
</center>
</nav>



<?php
  session_start();
  $con = mysqli_connect("localhost", "root","","db_bluehacks");

  if (isset($_POST['btnLogin'])) {
    $login_user = $_POST['txtusername'];
    $login_pword = $_POST['txtpassword'];
    $con_user = mysqli_query($con,"SELECT * FROM account_tbl WHERE Username = '$login_user' AND Password = '$login_pword'");
    $count = mysqli_num_rows($con_user);

  
  if ($count != 0) 
  {
    $query="SELECT * FROM account_tbl WHERE Username = '$login_user'";
    $result=mysqli_query($con,$query);
    $row =mysqli_fetch_assoc($result);
    $address = $row['Address'];
    $neym = $row['Name'];
        echo '<script>';
        echo 'alert("Logged In Successfully!");';
        $_SESSION["loginuser"] = $neym;
        $_SESSION["useradd"] = $address;
        echo 'window.location.href = "user.php";';
        echo '</script>';

  }
  else
  {
      echo "<script> alert('Access Denied!'); </script>";
      // $result = mysqli_query($conn, "SELECT * FROM db_acct ORDER BY name");
  }
}
?>


</body>
</html>