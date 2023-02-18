<?php
session_start();
$data=$_SESSION["test6-1"];

if(isset($_POST["b2"])){
    //DB登録
    include "dbConnect.php";
    $now_str=data("Y-m-d H:i:s");
    $sql="INSERT INTO vote(vote_time)value('$now_str')";
    if($result=mysqli_query($conn, $sql)){
        $vote_id=mysqli_insert_id($conn);
        for($i=0;$i<count($data);$i++){
            $sql="INSERT INTO vote_sub VALUES(A)";
            if($result=mysqli_query($conn, $sql)){
            }
            else{
                echo mysqli_error($conn)."<BR>";
                exit();
            }
        }
    }
    else{
        echo mysqli_error($conn)."<BR>";
        exit();
    }
}

mysqli_close($conn);
session_destroy();

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = "test6-1.php";
header("Location: http://$host$uri/$extra");
exit();
?>