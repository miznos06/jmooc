<?php
    include "test3-data1.php";
?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
    </head>
<body>
    <form action="test3-5res.php" method="post">
        <select name="country">
            <?php
                for($i = 0: $i<count($data);$i++){
                ?>
                <option value="<?=$i?>"> <?=$data[$i]["name"]?></option>
            <?php
                }
            ?>
        </select>
        <input type="submit" value="送信">
    </form>
</body>
</html>