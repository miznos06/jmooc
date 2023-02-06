<?php
    $flag = true;
    if($_POST["user_number"]==""){
        $flag = false;
    }

    if($_POST["user_name"]==""){
        $flag = false;
    }

    if($_POST["user_password"]==""){
        $flag = false;
    }

    if($_POST["user_password"]!=$_POST["user_password2"]){
        $flag = false;
    }

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/¥¥');

    if($flag) {
        $extra = "stockList.php";
        header("Location: http://$host$uri/$extra");
        exit();
    }
    else {
        $extra = "userRegister.html";
        header("Location: http://$host$uri/$extra");
        exit();
    }
?>