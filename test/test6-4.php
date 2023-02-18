<?php
include "dbConnect.php";

$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");

$sql = "SELECT id, name, area, n ";
$sql .= " FROM country as c LEFT JOIN ";
$sql .= " (SELECT country, count(*) AS n FROM vote_sub GROUP BY country) ";
$sql .= " as v ON c.id=v.country ORDER BY id";

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
                <table>
                    <tr>
                        <th>id</th>
                        <th>国名</th>
                        <th>地域</th>
                        <th>件数</th>
                    </tr>
                    <?php
                    while($val = mysqli_fetch_assoc($result)){
                    ?>
                    (A)
                    <?php
                    }
                    ?>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>