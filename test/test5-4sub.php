<?php
//外部ファイル：test5-1.phpを読み込みしてSQLに接続。地域を配列に格納
include "test5-1.php";
$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");
$c = $_GET["c"];
$sql = "SELECT*From country WHERE id=$c";
if($result = mysqli_query($conn,$sql)){

}
else {
    //エラー処理
    echo mysqli_error($conn)."<br>";
    exit();
}

//5-6での挿入
if($val = mysqli_fetch_assoc($result)){
    $sql = "SELECT*FROM country WHERE area=$area";
    if($result = mysqli_query($conn, $sql)){

    }
    else {
        echo mysqli_error($conn)."<br>";
        exit();
    }
}

mysqli_close($conn);

while($val=mysqli_fetch_assoc($result)){
    echo $val["name"]."(".$areaList[$val["area"]].")<br>";
}
