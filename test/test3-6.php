<?php
    include "test3-data6.php";
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test3-6.css">
    </head>
<body>
    <div id="container">
        <div id="main">
            <?php
                foreach($data as $val){
                    $area = $val["area"];
            ?>
                <div class="one"><img src="images/<?=$val["flag"]?>">
                <?=$val["name"]?><br><?=$areaList[$area]?></div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>