<?php
    include "test3-data3.php";
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test3-3.css">
    </head>
<body>
    <div id="container">
        <div id="nav">
            <ul>
            <?php
                for($i = 0;$i < count($areaList); $i++) {
            ?>
                <li><a href=""><?=$areaList[$i]?></li>
            <?php
                }
            ?>
            </ul>
        </div>
    </div>
</body>
</html>