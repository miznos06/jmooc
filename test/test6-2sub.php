<?php
session_start();
if(isset($_SESSION["test6-1"])){
    $data = $_SESSION["test6-1"];
}
$data[]=$_POST["id"];
$_SESSION["test6-1"]=$data;

$host=$_SERVER["HTTP_HOST"];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
if(count($data)<3)
{
    $extra="test6-1.php";
    header("Location:http://$host$uri/$extra");
    exit();
}
else{
    $extra="test6-2add.php";
    header("Location:http://$host$uri/$extra");
    exit();
}

?>