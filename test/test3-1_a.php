<?php
    include "test3-data1.php";
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test3-1.css">
    </head>
<body>
    <div id="container">
        <div id="main">
            <?php
                for($i = 0;$i<count($data);$i++){
            ?>
                <div class="one"><img src="images/<?=$data[$i]["flag"]?>"><?=$data[$i]["name"]?></div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>