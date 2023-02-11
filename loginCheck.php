<?php
session_start();

include "dbConnect.php";

$user_number = $_POST["user_number"];
$user_password = $_POST["user_password"];

$sql = "SELECT * FROM stockUser WHERE user_number = '$user_number' AND ";
$sql .= " user_password = '$user_password'";

if($result = mysqli_query($conn, $sql)){
    if($row = mysqli_fetch_assoc($result)){
        $flag = true;
    }
    else {
        $flag = false;
    }
}
else {
    echo mysqli_error($conn)."<br>";
}
mysqli_close($conn);

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if($flag){
    //ログインに成功
    $user = array("user_id" => $row["user_id"], "user_name" => $row["user_name"]);
    $_SESSION["user"] = $user;
    $_SESSION["type"] = 0;
    $extra = "stockList.php";
    header("Location: http://$host$uri/$extra");
    exit();
}
else{
    session_destroy();
    $extra ="index2.html";
    header("Location: http://$host$uri/$extra");
    exit();
}
?>