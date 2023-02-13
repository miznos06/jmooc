<?php
    //ログインに必要な情報を変数に格納
    $DBSERVER = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "";
    $DBNAME = "stock";

    //SQLに接続
    $conn = mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);

    //接続エラー時のメッセージとexit
    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
        exit();
    }
?>