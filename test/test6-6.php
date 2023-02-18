<?php
include "dbConnect.php";

$sql = "SELECT c.id, name, count(*) AS n ";
$sql .= " FROM vote_sub v INNER JOIN country c ";
$sql .= " ON v.country = c.id ";
$sql .= " GROUP BY v.country ORDER BY n DESC, c.id";

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
                        <th width="40px">順位</th>
                        <th width="20px">id</th>
                        <th width="100px">国名</th>
                        <th width="40px">件数</th>
                    </tr>
                    <?php
                    while($i=1;$val=mysqli_fetch_assoc($result);$i++){
                    ?>
                    <tr>
                        <td class="num"><?=$i?>位</td>
                        <td class="num"><?=$val["id"]?></td>
                        <td><?=$val["name"]?></td>
                        <td class="num"><?=$val["n"]?></td>
                    </tr>
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