<?php
    include "test3-data1.php"
    $index =$_POST["country"];
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?=$data[$i]["name"]?>の地域は
        <?php
        if($data[$i]["area"]==1) {
            ?>
            アジア
            <?php
        }
        else {
            ?>
            アジアでない
            <?php
        }
        ?>
    </body>
</html>