<?php
    $DBSERVER = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "";
    $DBNAME = "stock";

    $conn = mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);

    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
        exit();
    }
?>