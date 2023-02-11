<?php
    session_start();
    
    include "dbConnect.php";

    $unit =1;
    if(isset($_POST["out"])){
        $unit=-1;
    }
    $user = $_SESSION["user"];
    $user_id = $user["user_id"];

    date_default_timezone_set("Asia/Tokyo");
    $now_str = date("Y-m-d H:i:s");
    
    foreach($_POST as $key => $value){
        if($key != "in" && $key != "out" && $value != ""){
        $n = $value * $unit;
        $sql = "INSERT INTO stockLog (stock_id, user_id, in_out_n, update_date) ";
        $sql .= " VALUES($key, $user_id, $n, '$now_str' )";
        
        if($result = mysqli_query($conn, $sql)){
        }
        else {
            echo mysqli_error($conn)."<br>";
            exit();
        }
        }
    }

	mysqli_close($conn);

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "stockList.php?m=0";
    header("Location: http://$host$uri/$extra");
?>