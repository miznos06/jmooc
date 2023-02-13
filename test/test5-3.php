<?php
//外部ファイル：test5-1.phpを読み込みしてSQLに接続。地域を配列に格納
include "test5-1.php";
$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");

//isset関数で変数に値があるか確認。あれば（=true）値を変数$areaに格納。なければ(NULL=空欄)$areaを1とする
if(isset($_GET["area"])){
    $area = $_GET["area"];
}
else{
    $area = 1;
}

//SQL文でテーブル：countryのうち↑で変数$areaに格納された値で絞りこまれた結果を変数$resultに格納
$sql = "SELECT*From country WHERE area = $area";
if($result = mysqli_query($conn,$sql)){

}
else {
    //エラー処理
    echo mysqli_error($conn)."<br>";
    exit();
}
mysqli_close($conn);
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test5-2.css">
    </head>
    <body>
        <div id="container">
            <div id="nav">
                <ul>
                <?php
                //for文で地域名の分、地域名の<li>を作成してナビゲーションとする繰り返し
                    for($i=1;$i<count($areaList);$i++){
                ?>
                    <li><a href="test5-3.php?area=<?=$i?>"><?=[$i]?></a></li>
                <?php
                }
                ?>
                </ul>
            </div>
            <div id="main">
            <?php
            //↑で絞り込んだ結果を連想配列で変数&valに格納して、キーで取り出す
            while($val = mysqli_fetch_assoc($result)){
                ?>
                <div class="one"><img src="images/<?=$val["flag"]?>"><?=$val["name"]?></div>
            <?php
            }
            ?>
            </div>
        </div>
    </body>
</html>
