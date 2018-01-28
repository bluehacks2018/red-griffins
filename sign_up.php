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
  <div  class="container-fluid" style="background-color:#61d3d2;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a class="navbar-brand" href="index.php"  style="color: white;"><strong>GRABBAGE</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#python_history" style="color: white;">Objective</a></li>
        <li><a href="index.php" style="color: white;">Log In</a></li>
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
    <span class="glyphicon glyphicon-user" style="color:#45b7b6;"></span></td><td><input type="text" id="username" name="txtuser" placeholder="Enter Username" required>
  </td></tr>

  <tr><td align="center">
    <span class="glyphicon glyphicon-pencil" style="color:#45b7b6;"></span></td><td><input type="text" id="usern" name="txtname" placeholder="Enter Full Name" required>
  </td></tr>

    <tr><td align="center"><span class="glyphicon glyphicon-home" style="color: #45b7b6;"></span></td><td>
    <select name="txtaddress">
      <option>--Choose Barangay--</option>
      <option>Brgy. Alicia</option>
      <option>Brgy. Bagong PAG-ASA</option>
      <option>Brgy. Bahay Toro</option>
      <option>Brgy. Balingasa</option>
      <option>Brgy. Bungad</option>
      <option>Brgy. Damar</option>
      <option>Brgy. Damayan</option>
      <option>Brgy. Del Monter</option>
      <option>Brgy. Katipunan</option>
      <option>Brgy. Lourdes</option>
      <option>Brgy. Maharlika</option>
      <option>Brgy. Manresa</option>
      <option>Brgy. Mariblo</option>
      <option>Brgy. Masambong</option>
      <option>Brgy. N.S. Amoranto</option>
      <option>Brgy. Nayong Kanluran</option>
      <option>Brgy. Paang Bundok</option>
      <option>Brgy. Paltok</option>
      <option>Brgy. Paraiso</option>
      <option>Brgy. Phil-Am</option>
      <option>Brgy. Proj. 6</option>
      <option>Brgy. Ramon Magsaysay</option>
      <option>Brgy. Salvacion</option>
      <option>Brgy. San Antonio</option>
      <option>Brgy. San Isidro Labrador</option>
      <option>Brgy. San Jose</option>
      <option>Brgy. Siena</option>
      <option>Brgy. St. Peter</option>
      <option>Brgy. Sta. Cruz</option>
      <option>Brgy. Sta. teresita</option>
      <option>Brgy. Sto. Cristo</option>
      <option>Brgy. Sto. Domingo</option>
      <option>Brgy. Palayan</option>
      <option>Brgy. Vasra</option>
      <option>Brgy. Veterans Village</option>
      <option>Brgy. West Triangle</option>
      <option>Brgy. Bagong Silanga</option>
      <option>Brgy. Batasan Hills</option>
      <option>Brgy. Commonwealth</option>
      <option>Brgy. Payatas</option>
      <option>Brgy. Amihan</option>
      <option>Brgy. Bagumbayan</option>
      <option>Brgy. Bagumbuhay</option>
      <option>Brgy. Bayanihan</option>
      <option>Brgy. Blue Ridge A</option>
      <option>Brgy. Blue Ridge B</option>
      <option>Brgy. Camp Aguinaldo</option>

      <option>Brgy. Claro</option>
      <option>Brgy. Dioquino Zobel</option>
      <option>Brgy. Duyan-Duyan</option>
      <option>Brgy. E. Rodriguez</option>

      <option>Brgy. East Camias</option>
      <option>Brgy. Escopa I</option>
      <option>Brgy. Escopa II</option>
      <option>Brgy. Escopa III</option>

      <option>Brgy. Escopa IV</option>
      <option>Brgy. Libis</option>

      <option>Brgy. Loyola Heights</option>
      <option>Brgy. Mangga</option>
      <option>Brgy. Marilag</option>

      <option>Brgy. Masagana</option>
      <option>Brgy. Matandang Balara</option>
      <option>Brgy. Milagrosa</option>

      <option>Brgy. Pansol</option>
      <option>Brgy. Quirino 2-A</option>
      <option>Brgy. Quirino 2-B</option>

      <option>Brgy. Quirino 2-C</option>
      <option>Brgy. Quirino 3-A</option>
      <option>Brgy. San Roque</option>

      <option>Brgy. Silangan</option>
      <option>Brgy. Socorro</option>

      <option>Brgy. St. Ignatius</option>
      <option>Brgy. Tagumpay</option>

      <option>Brgy. Ugong Norte</option>
      <option>Brgy. Villa Maria Clara</option>
      <option>Brgy. West Camias</option>
      <option>Brgy. White Plains</option>
      <option>Brgy. Bagong Lipunan ng Crame</option>
      <option>Brgy. Botocan</option>
      <option>Brgy. Central</option>
      <option>Brgy. Damayang Lagi</option>
      <option>Brgy. Don Manuel</option>
      <option>Brgy. Doña Aurora</option>
      <option>Brgy. Doña Imelda</option>
      <option>Brgy. Doñ Josefa</option>
      <option>Brgy. Horse Shoe</option>
      <option>Brgy. Immaculate Concepcion</option>
      <option>Brgy. Kalusugan</option>
      <option>Brgy. Kamuning</option>
      <option>Brgy. Kaunlaran</option>
      <option>Brgy. Kristong Hari</option>
      <option>Brgy. Krus na Ligas</option>
      <option>Brgy. Laging Handa</option>
      <option>Brgy. Malaya</option>
      <option>Brgy. Mariana</option>
      <option>Brgy. Obrero</option>
      <option>Brgy. Old Capitol Site</option>
      <option>Brgy. Paligsahan</option>
      <option>Brgy. Pinagkaisahan</option>
      <option>Brgy. Pinyahan</option>
      <option>Brgy. Roxas</option>
      <option>Brgy. Sacred Heart</option>
      <option>Brgy. San Isidro Galas</option>
      <option>Brgy. San Martin de Porres</option>
      <option>Brgy. San Vicente</option>
      <option>Brgy. Santol</option>
      <option>Brgy. Sikutan Village</option>
      <option>Brgy. South Triangle</option>
      <option>Brgy. Sto. Ñino</option>
      <option>Brgy. Tatalon</option>
      <option>Brgy. Teacher's Village East</option>
      <option>Brgy. Teacher's Village West</option>
      <option>Brgy. UP Campus</option>
      <option>Brgy. UP Vilage</option>
      <option>Brgy. Valencia</option>
      <option>Brgy. Bagbag</option>
      <option>Brgy. Capri</option>
      <option>Brgy. Fairview</option>
      <option>Brgy. Great Lagro</option>
      <option>Brgy. Gulod</option>
      <option>Brgy. Kaligayahan</option>
      <option>Brgy. Nagkaisang Nayon</option>
      <option>Brgy. North Fairview</option>
      <option>Brgy. Novaliches Proper</option>
      <option>Brgy. Pasong Putik Proper</option>
      <option>Brgy. San Agustin</option>
      <option>Brgy. San Bartolome</option>
      <option>Brgy. Sta. Lucia</option>
      <option>Brgy. Sta. Monica</option>
      <option>Brgy. Apolonio Samson</option>
      <option>Brgy. Baesa</option>
      <option>Brgy. Balon Bato</option>
      <option>Brgy. Culiat</option>
      <option>Brgy. New Era</option>
      <option>Brgy. Pasong Tamo</option>
      <option>Brgy. Sagandaan</option>
      <option>Brgy. Sauyo</option>
      <option>Brgy. Talipapa</option>
      <option>Brgy. Tandang Sora</option>
      <option>Brgy. Unang Sigaw</option>

    </select>
    </td></tr>

    <tr><td align="center"><span class="glyphicon glyphicon-lock" style="color: #45b7b6;"></span></td><td><input type="password" id="lname" name="txtpass" placeholder="Enter Password" required>
    </td></tr>

    <tr><td></td><td><input type="password" id="lname" name="txtrpass" placeholder="Confirm Password" required>
    </td></tr>

    <tr><td colspan="2">
    <input type="submit" class="btn btn-danger" value="Sign Up" style="font-weight: bolder;font-size: 18px;" name="btnSubmit"></td></tr>
 </table>
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

    $con=mysqli_connect('localhost','root','','db_bluehacks');
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
 
    if(isset($_POST['btnSubmit']))
    {
        $uname=$_POST['txtuser'];
        $fname=$_POST['txtname'];
        $add=$_POST['txtaddress'];
        $pword=$_POST['txtpass'];
        $rpword=$_POST['txtrpass'];

        $con_user = mysqli_query($con,"SELECT username FROM account_tbl WHERE username = '$uname'");
        $count = mysqli_num_rows($con_user);

        if ($count != 0) {
            echo "<script> alert('Username Already Taken!');</script>";
        } 
        else if($pword != $rpword)
        {
          echo "<script> alert('Password not matched!');</script>";
        }
        else
        {
            $result= mysqli_query($con,"INSERT INTO account_tbl VALUES('','$uname','$fname','$add','$pword')");
            if($result)
            {
                echo '<script>';
                echo 'alert("Thank you for Registering! You may now Login");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }
        }
    }

?>



</body>
</html>