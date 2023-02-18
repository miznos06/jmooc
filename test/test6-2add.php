<?php
session_start();
if(isset($_SESSION["test6-1"])){
    $data = $_SESSION["test6-1"];
}

//DB登録
include "dbConnect.php";
//現在時刻の取得＞SQLへ書き込み
$now_str=data("Y-m-d H:i:s");
$sql="INSERT INTO vote(vote_time) values('$now_str')";
if($result = mysqli_query($conn, $sql)){
    $vote_id=mysqli_insert_id($conn);
    for($i=0;$i<count($data);$i++){
        $sql="INSERT INTO vote_sub VALUES($vote_id,($i+1),$data[$i])";
        if($result=mysqli_query($conn, $sql)){
        }
        else{
            echo mysqli_error($conn)."<BR>";
            exit();
        }
    }
}
else {
    echo mysqli_error($conn)."<BR>";
    exit();
}

session_destroy();
mysqli_close($conn);
?>
投票ありがとうございました