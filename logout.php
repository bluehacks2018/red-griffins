<?php
session_start();
session_unset();
session_destroy();
	echo '<script>';
        echo 'alert("You have Logged Out!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
?>