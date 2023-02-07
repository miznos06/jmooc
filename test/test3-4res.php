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
        <img src="images/<?=$data[$index]["flag"]?>">
    </body>
</html>