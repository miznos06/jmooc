<?php
  $flag = true;
  $err_msg = "";
  if($_POST["user_number"] == ""){
    $err_msg .= "社員番号を入れてください<br>";
    $flag = false;
  }
  if($_POST["user_name"] == ""){
    $err_msg .= "ユーザ名を入れてください<br>";
    $flag = false;
  }
  if($_POST["user_password"] == ""){
    $err_msg .= "パスワードを入れてください<br>";
    $flag = false;
  }
  if($_POST["user_password"] != $_POST["user_password2"]){
    $err_msg .= "パスワードが一致していません<br>";
    $flag = false;
  }

  if($flag)  {
    include "userBack.php";
  }
  else {
    $user_number = $_POST["user_number"];
    $user_name = $_POST["user_name"];

    include "userRegister.php";
  }


?>
