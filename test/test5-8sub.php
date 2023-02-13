<?php
session_start();

if(isset($_SESSION["vote"])){
    $data = $_SESSION["vote"];
}
$data[]=$c;
$_SESSION["vote"]=$data;

//外部ファイル：test5-1.phpを読み込みしてSQLに接続。地域を配列に格納
include "test5-1.php";
$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");

foreach($data as $id){
    $sql = "SELECT*FROM country WHERE id = $id";
    if($result=mysqli_query($conn, $sql)){
        if($val=mysqli_fetch_assoc($result)){
            echo $val["name"]."(".$areaList[$val["area"]].")<br>";
        }
    }
    else {
        echo mysqli_error($conn)."<br>";
        exit();
    }
}

mysqli_close($conn);
?>