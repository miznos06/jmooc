<?php
//外部ファイル：test5-1.phpを読み込みしてSQLに接続。地域を配列に格納
include "test5-1.php";
$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");

//SQL文でテーブル：countryを全行取り出して結果を変数$resultに格納
$sql = "SELECT*From country";
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
            <div id="main">
                <?php
                //取り出した結果を連想配列で変数&valに格納して、キーで取り出す
                    while($val = mysqli_fetch_assoc($result)){
                ?>
                    <div class="one"><img src="images/<?=$val["flag"]?>">
                    <?=$val["name"]?>
                    <?=$areaList[$val["area"]]?></div>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>