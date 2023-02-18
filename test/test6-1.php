<?php
include "dbConnect.php";

$sql = "SELECT*FROM country";
if($result = mysqli_query($conn, $sql)){

}
else {
    echo mysqli_error($conn)."<BR>";
    exit();
}
mysqli_close($conn);
?>

<!doctype html>
<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test6-1.css">
    </head>
    <body>
        <div id="container">
            <div id="main">
    <?php
    while($val=mysqli_fetch_assoc($result)){
    ?>
        <div class="one">
            <form action="test6-2sub.php" method="post">
                <img src="images/<?=$val["flag"]?>">
                <input type="hidden" name="id" value="<?= $val["id"]?>">
                <input type="submit" value="Favorite">
        </form>
        </div>
    <?php
    }
    ?>
            </div>
        </div>
    </body>
</html>