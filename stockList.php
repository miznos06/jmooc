<?php
session_start();
if(isset($_SESSION["user"])){
    //ユーザ情報があるときはloginCheckで格納したSG変数$_SESSIONを変数$userに格納
    $user = $_SESSION["user"];
}
else {
    //ユーザ情報がないときはセッションを切ってログイン画面に遷移
    session_destroy();
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\' );
    $extra = "index.html";
    header("Location: http://$host$uri/$extra");
    exit();
}

    include "dbConnect.php";

    //種類の選択があるときは変数に格納してセッションに渡す。無い時（ログイン時）は変数に格納するだけ
    if(isset($_POST['type_select'])){
        $type=$_POST["type_select"];
        $_SESSION["type"] = $type;
    }
    else {
        $type = $_SESSION["type"];
    }

    //種類の選択があるとき（0以上のとき）はSQL文にwhereを追加。無い時（ログイン時）はwhereを無しに。
    if($type >0){
        $where = " WHERE type=$type";
    }
    else {
        $where = "";
    }
    $sql = "SELECT List.stock_id, List.stock_name, List.amount, List.type, ";
    $sql .= " Log.sum_n, List.remarks FROM stockList as List LEFT JOIN ";
    $sql .= " (SELECT stock_id, SUM(in_out_n) AS sum_n FROM stockLog ";
    $sql .= "GROUP BY stock_id) as Log ON List.stock_id = Log.stock_id ";
    $sql .= "$where ORDER BY List.stock_id ";

    if($result = mysqli_query($conn, $sql)){
    }
    else {
        echo mysqli_error($conn)."<br>";
        exit();
    }

    if(isset($_GET['m']))
    {
        $mode = $_GET['m'];
    }
    else {
        $mode = 0;
    }
    //切断
    mysqli_close($conn);
?>

<!doctype html>

<html>
    <head>
        <title>在庫管理</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="stock.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="images/logo.gif">
                <div id="header_title">在庫管理システム</div>
                    <form action="logout.php" method="post">
                        <!-- SG変数$_SESSION＞変数$user＞からuser名を受け取って表示 -->
                        <div id="header_user" ><?= $user["user_name"] ?> 様
                        <input type ="submit" value="ログアウト"></div>
                    </form>
                </div>
            <div id="nav">
                <ul>
                    <li>メニュー選択</li>
                    <li><a href="stockList.php?m=0">在庫一覧</a></li>
                    <li><a href="stockList.php?m=1">入庫（仕入れ）</a></li>
                    <li><a href="stockList.php?m=2">出庫（消費）</a></li>
                </ul>
            </div>
            <div id="main">
                <?php
                    if ($mode == 0) {
                ?>
                <div id="main_title">在庫一覧</div>
                <?php
                    }
                    else if ($mode == 1) {
                ?>
                <div id="main_title">入庫（仕入れ）</div>
                <?php
                    }
                    else {
                ?>
                <div id="main_title">出庫（消費）</div>
                <?php
                    }
                ?>
                <form action="stockList.php" method="post">
                    種類の選択：<select name="type_select">
                        //選択時にフォーム選択リスト（selectedで決まる）も変更する。typeの値でif文。
                        <?php
                            if($type == 0){
                        ?>
                            <option value="0" selected>すべて</option>
                        <?php
                            }
                            else{
                        ?>
                            <option value="0">すべて</option>
                        <?php
                            }
                        if($type == 1){
                            ?>
                                <option value="1" selected>パン生地の材料</option>
                            <?php
                                }
                                else{
                            ?>
                                <option value="1">パン生地の材料</option>
                            <?php
                                }
                        if($type == 2){
                            ?>
                                <option value="2" selected>ドライフルーツ</option>
                            <?php
                                }
                                else{
                            ?>
                                <option value="2">ドライフルーツ</option>
                            <?php
                                }
                        if($type == 3){
                            ?>
                                <option value="3" selected>調味料</option>
                            <?php
                                }
                                else{
                            ?>
                                <option value="3">調味料</option>
                            <?php
                                }
                        if($type == 4){
                            ?>
                                <option value="4" selected>和菓子の材料</option>
                            <?php
                                }
                                else{
                            ?>
                                <option value="4">和菓子の材料</option>
                            <?php
                                }
                            ?>
                    </select>
                    <input type="submit" value="切り替え">
                </form>
                <form action="log.php" method="post">
                <table width="100%">
                    <tr>
                        <th>番号</th>
                        <th>材料</th>
                        <th>内容量</th>
                        <th>種類</th>
                        <th>個数</th>
                        <?php
                            if ($mode == 0) {
                        ?>
                        <th>備考</th>
                        <?php
                            }
                            else if ($mode == 1) {
                        ?>
                        <th>入庫個数</th>
                        <?php
                            }
                            else {
                        ?>
                        <th>出庫個数</th>
                        <?php
                            }
                        ?>
                    </tr>
                    <?php
                        while($val = mysqli_fetch_assoc($result)) {
                            if($val["type"] == 1){
                                $type_s = "パン生地の材料";
                            }
                            else if($val["type"] == 2){
                                $type_s = "ドライフルーツ";
                            }
                            else if($val["type"] == 3){
                                $type_s = "調味料";
                            }
                            else if($val["type"] == 4){
                                $type_s = "和菓子の材料";
                            }
                    ?>
                    <tr>
                        <td class="num"><?= $val["stock_id"] ?></td>
                        <td><?= $val["stock_name"] ?></td>
                        <td class="num"><?= $val["amount"] ?></td>
                        <td><?= $type_s ?></td>
                        <td class="num"><?= $val["sum_n"] ?></td>
                        <?php
                            if ($mode == 0) {
                        ?>
                        <td><?= $val["remarks"] ?></td>
                        <?php
                            }
                            else {
                        ?>
                        <td class="center_elements">
                            <input type="text" size="4" name="<?= $val["stock_id"] ?>">
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                    if ($mode == 1) {
                ?>
                <div class="right_elements">
                <input type="submit" name="in" value="入庫"></div>
                <?php
                    }
                    else if ($mode == 2) {
                ?>
                <div class="right_elements">
                <input type="submit" name="out" value="出庫"></div>
                <?php
                }
                ?>
                </form>
            </div>
            <div id="footer">Copyright © All Rights Reserved by JMOOC</div>
        </div>
    </body>
</html>