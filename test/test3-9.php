<?php
    include "test3-data3.php";

    if(isset($_GET["area"])){
        $area=$_GET["area"];
    }
    else {
        $area =1;
    }
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test3-9.css">
    </head>
<body>
    <div id="container">
        <div id="nav">
            <ul>
            <?php
                for($i = 1;$i < count($areaList); $i++) {
            ?>
                <li><a href="test3-9.php?area=<?=$i?>"><?=$areaList[$i]?></a></li>
            <?php
                }
            ?>
            </ul>
        </div>
        <div id="main">
            <?php
                foreach($data as $val){
                    if($val["area"]==1) {
                ?>
            <div class="one"><img src="images/(B)">(C)</div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>