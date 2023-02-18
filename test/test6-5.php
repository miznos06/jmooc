<?php
include "dbConnect.php";

$areaList = array("", "アジア", "アメリカ", "ヨーロッパ", "アフリカ", "オセアニア");

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
            (A){
                $sql = "SELECT id, name, area, n ";
                $sql .= " FROM country as c LEFT JOIN ";
                $sql .= " (SELECT country, count(*) AS n FROM vote_sub GROUP BY country) ";
                $sql .= " as v ON c.id=v.country WHERE area= $i ORDER BY id";
                
                if($result = mysqli_query($conn, $sql)){

                }
                else {
                    echo mysqli_error($conn)."<BR>";
                    exit();
                }
            ?>
            <?=$areaList[$i]?>
                <table>
                    <tr>
                        <th width="20px">id</th>
                        <th width="100px">国名</th>
                        <th width="40px">件数</th>
                    </tr>
                    <?php
                    while($val = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td class="num"><?=$val["id"]?></td>
                        <td><?=$val["name"]?></td>
                        <td class="num"><?=$val["n"]?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>
<?php
mysqli_close($conn);
?>