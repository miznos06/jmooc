<?php
    $user_name="毘沙門太郎";
    $stock_id = array(4, 5, 6);
    $stock_name = array("バター", "ショートニング", "スキムミルク");
    $amount = array("450g", "15kg", "25kg");
    $n = array(9, 5, 3);
    $remarks = array("無塩", "バターロール　揚げパン", "");
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
                <div id="header_user"><?= $user_name ?> 様</div>
            </div>
            <div id="nav">
                <ul>
                    <li>メニュー選択</li>
                    <li><a href="stockList.html">在庫一覧</a></li>
                    <li><a href="stockList.html">入庫（仕入れ）</a></li>
                    <li><a href="stockList.html">出庫（消費）</a></li>
                </ul>
            </div>
            <div id="main">
                <div id="main_title">在庫一覧</div>
                <form action="stockList.html" method="post">
                    種類の選択：<select name="type_select">
                        <option value="0" selected>すべて</option>
                        <option value="1">パン生地の材料</option>
                        <option value="2">ドライフルーツ</option>
                        <option value="3">調味料</option>
                        <option value="4">和菓子の材料</option>
                    </select>
                    <input type="submit" value="切り替え">
                </form>
                <table width=100%>
                    <tr>
                        <th>番号</th>
                        <th>材料</th>
                        <th>内容量</th>
                        <th>種類</th>
                        <th>個数</th>
                        <th>備考</th>
                    </tr>
                    <tr>
                        <td class="num"><?= $stock_id[0] ?></td>
                        <td><?= $stock_name[0] ?></td>
                        <td class="num"><?= $amount[0] ?></td>
                        <td>パン生地の材料</td>
                        <td class="num"><?= $n[0] ?></td>
                        <td><?= $remarks[0] ?></td>
                    </tr>
                    <tr>
                        <td class="num"><?= $stock_id[1] ?></td>
                        <td><?= $stock_name[1] ?></td>
                        <td class="num"><?= $amount[1] ?></td>
                        <td>パン生地の材料</td>
                        <td class="num"><?= $n[1] ?></td>
                        <td><?= $remarks[1] ?></td>
                    </tr>
                    <tr>
                        <td class="num"><?= $stock_id[2] ?></td>
                        <td><?= $stock_name[2] ?></td>
                        <td class="num"><?= $amount[2] ?></td>
                        <td>パン生地の材料</td>
                        <td class="num"><?= $n[2] ?></td>
                        <td><?= $remarks[2git] ?></td>
                    </tr>
                </table>
            </div>
            <div id="footer">Copyright © All Rights Reserved by JMOOC</div>
        </div>
    </body>
</html>