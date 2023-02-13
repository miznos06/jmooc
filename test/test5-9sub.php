<?php
include "test5-1.php";
$id = $_GET["c"];

$sql = (B);
if($result = mysqli_query($conn, $sql)){
}
else {
    echo mysqli_error($conn)."<br>";
    exit();
}

$sql =(C);
if($result = mysql_query($conn, $sql)){
}
else {
    echo mysqli_error($conn)."<br>";
    exit();
}

while($val=mysqli_fetch_assoc($result)){
    echo $val["country"]."<br>";
}

mysqli_close($conn);
?>