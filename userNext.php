<?php
  session_start();
  if(isset($_POST["register"])){
		//データベースに登録する処理
    include "dbConnect.php";

    $user_number = $_POST["user_number"];
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];

    $sql = "INSERT INTO stockUser (user_number , user_name , user_password , enable) ";
    $sql .= " VALUES ('$user_number' , '$user_name' , '$user_password' , 1)";

    if($result = mysqli_query($conn , $sql) ){
      //SQLの結果を配列にして変数＞SG変数に格納して在庫一覧画面へ
      $user = array("user_id" => mysqli_insert_id($conn) , "user_name" => $user_name);
      $_SESSION["user"] = $user;
      $_SESSION["type"] = 0;
      $host = $_SERVER['HTTP_HOST'];
      $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
      $extra = "stockList.php?m=0";
      header("Location: http://$host$uri/$extra");
      exit();
    }
    else {
      //入力画面に戻す処理
      $err_msg = mysqli_error($conn);
      $user_number = $_POST["user_number"];
      $user_name = $_POST["user_name"];
      include "userRegister.php";
    }
	}
  else{
    //入力画面に戻す処理
    $err_msg = "";
    $user_number = $_POST["user_number"];
    $user_name = $_POST["user_name"];
    include "userRegister.php";

  }
 ?>
