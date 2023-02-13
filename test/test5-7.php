<?php
session_start();

if(isset($_SESSION["test5-7"])){
    $data = $_SESSION["test5-7"];
}

$data[]="A";
$_SESSION["test5-7"]=$data;

?>
<!doctype html>

<html>
    <head>
        <title>問題</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="test5-7sub.php">
            <input type="submit" value="buttion">
        </form>
            <?php
            foreach($data as $value){
                echo "$value";
            }
            ?>
    </body>
</html>
