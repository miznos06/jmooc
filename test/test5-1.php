<?php
$DBSERVER = "localhost";
$DBUSER = "root";
$DBPASSWORD = "password";
$DBNAME = "flags";

$conn = mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);

//接続
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit();
}