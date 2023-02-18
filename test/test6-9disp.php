<?php
session_start();
$data=$_SESSION["test6-1"];
include "dbConnect.php";
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
                    <?php
                    for($i=0;$i<count($data);$i++){
                        $sql = "SELECT*FROM country WHERE id=".(A);
                        if($result=mysqli_query($conn, $sql)){   
                        }
                        else {
                            echo mysqli_error($conn)."<BR>";
                            exit();
                        }

                        if($val=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td width="20px" class="num"><?=$i+1?></td>
                        <td width="100px"><?=$val["name"]?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
                <form action="test6-9next.php" method="post">
                    <input type="submit" name="b1" value="ボタン1">
                    <input type="submit" name="b2" value="ボタン2">
                </form>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($conn);
?>