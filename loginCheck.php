<?php
session_start();

include "dbConnect.php";

$user_number = $_POST["user_number"];
$user_password = $_POST["user_password"];

//.=は前行と接続するため。（長いからといって改行してはいけないので）
$sql = "SELECT * FROM stockUser WHERE user_number = '$user_number' AND ";
$sql .= " user_password = '$user_password'";

//SQLが発行できたかどうかでif文＞fetchをして1行取り出せたら（=↑の条件文に合うものが出せたら＝ログインできたら）ログインOKと表示
if($result = mysqli_query($conn, $sql)){
    if($row = mysqli_fetch_assoc($result)){
        $flag = true;
    }
    else {
        $flag = false;
    }
}
else {
    echo mysqli_error($conn)."<br>";
}
mysqli_close($conn);

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if($flag){
    //ログインに成功した場合、在庫一覧画面に遷移
    $user = array("user_id" => $row["user_id"], "user_name" => $row["user_name"]);
    $_SESSION["user"] = $user;
    $_SESSION["type"] = 0;
    $extra = "stockList.php";
    header("Location: http://$host$uri/$extra");
    exit();
}
else{
    //ログイン失敗したらセッションを切ってエラーメッセージ画面に遷移。
    session_destroy();
    $extra ="index2.html";
    header("Location: http://$host$uri/$extra");
    exit();
}
?>