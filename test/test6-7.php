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
    $score[$val["id"]]=0;
    $name[$val["id"]]=$val["name"];
}

$sql = "SELECT*FROM vote_sub";
if($result=mysqli_query($conn, $sql)){   
}
else {
    echo mysqli_error($conn)."<BR>";
    exit();
}

while($val = mysqli_fetch_assoc($result)){
    if($val["sub_id"]==1){
        $this_score=5;
    }
    else if($val["sub_id"]==2){
        $this_score=3;
    }
    else if($val["sub_id"]==3){
        $this_score=1;
    }
    $score[$val["country"]]+= $this_score;
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
                        <th width="40px">得点</th>
                    </tr>
                    <?php
                    foreach($score as $key => $val){
                        if($score[$key]>0){                
                    ?>
                    <tr>
                        <td class="num"><?=$key?></td>
                        <td><?=$name[$key]?></td>
                        <td class="num"><?=$score[$key]?></td>
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