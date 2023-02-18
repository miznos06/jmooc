<?php
include "dbConnect.php";

$sql = "SELECT v.vote_id, vote_time, sub_id, name ";
$sql .= " from vote v, vote_sub s, country c ";
$sql .= " (A) ";
$sql .= " order by v.vote_id, sub_id";

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
                        <th>No.</th>
                        <th>日時</th>
                        <th>番号</th>
                        <th width="100px">国名</th>
                    </tr>
                    <?php
                    while($val = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <?php
                    if($val["sub_id"]==1){
                    ?>
                        <td class="num"><?=$val["vote_id"]?></td>
                        <td><?=$val["vote_time"]?></td>
                    <?php
                    }
                    else{
                    ?>
                        <td></td>
                        <td></td>
                    <?php
                    }
                    ?>
                        <td class="num"><?=$val["sub_id"]?></td>
                        <td><?=$val["name"]?></td>
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