<?php
session_start();
if(isset($_SESSION["test5-10"])){
    $data = $_SESSION["test5-10"];
}
$data[]=(B);
$_SESSION["test5-10"]=$data;

if((C)){
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    $extra = "test5-4.php";
    header("Location:http://$host$uri/$extra");
    exit();
}

include "test5-1.php";

foreach($data as $id){
    $sql = (D);
    if($result = mysqli_query($conn, $sql)){
    }
    else{
        echo mysqli_error($conn)."<br>";
        exit();
    }
}

echo "投票ありがとうございました";

mysqli_close($conn);
?>