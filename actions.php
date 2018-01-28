<?php

    require_once('config.php');
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            case "remove":
               $pid = $_GET['code'];
               if(! $conn ) {
                die('Could not connect: ' . mysqli_error());
             }
             
             $delsql = ' DELETE FROM tbl_request WHERE req_id =' .@$pid ;
             
             if (mysqli_query($conn, $delsql)) {
                echo "<script>alert('Record deleted successfully');</script>";
             } else {
                echo "Error deleting record: " . mysqli_error($conn);
             }
             mysqli_close($conn);
               
            break;
        }

    }
?>