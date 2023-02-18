<?php
include "dbConnect.php";

$sql = "SELECT*FROM country ORDER BY id";
if($result = mysqli_query($conn, $sql)){
}
else {
    echo mysqli_error($conn)."<BR>";
    exit();
}

while($val = mysqli_fetch_assoc($result)){
    for($i=1;$i<=3;$i++){
        $data[$val["id"]][$i]=0;
    }
        $data[$val["id"]]["name"]=$val["name"];
}

$sql = "SELECT*FROM vote_sub";
if($result=mysqli_query($conn, $sql)){   
}
else {
    echo mysqli_error($conn)."<BR>";
    exit();
}

while($val = mysqli_fetch_assoc($result)){
    $i=(A);
    $i=(B);
    $data[$j][$i]++;
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
                        <th width="20px">id</th>
                        <th width="100px">国名</th>
                        <th width="40px">5点</th>
                        <th width="40px">3点</th>
                        <th width="40px">1点</th>
                        <th width="40px">得点</th>
                    </tr>
                    <?php
                    foreach($data as $key => $val){
                        $n=0;
                        for($i=1;$i<=3;$i++){
                            $n+=$data[$key][$i];
                        }
                        if($n>0){
                    ?>
                    <tr>
                        <td class="num"><?=$key?></td>
                        <td><?=$val["name"]?></td>
                        <td class="num"><?=$val[1]?></td>
                        <td class="num"><?=$val[2]?></td>
                        <td class="num"><?=$val[3]?></td>
                        <td class="num"><?=$val[1]*5+$val[2]*3+$val[3]*1?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>