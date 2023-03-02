<?php 
    $hostname = "iisvoltapescara.edu.it";
    $username = "quintab";
    $password = "x9Sb8e58?";

    $con = mysqli_connect($hostname, $username, $password);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to the Database: " . mysqli_connect_error();
    } else {
        echo "Connected";
    }

    $con->select_db("labinf_db");
?>