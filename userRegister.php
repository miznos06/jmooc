<!doctype html>
<html>
	<head>
    	<title>新規登録</title>
		<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="user.css" >
    </head>
    <body>
        <div id="container">
           <img src="images/large_logo.gif">
           <h2>在庫管理システム　社員登録</h2>
					 <div id="message" class="err"><?= $err_msg ?></div>
           <form action="userCheck.php" method="post">
           <table>
           	<tr>
           		<th>社員番号</th>
           		<td><input type="text" name="user_number" value="<?= $user_number ?>"></td>
           	</tr>
						<tr>
							<th>氏名</th>
							<td><input type="text" name="user_name" value="<?= $user_name ?>"></td>
						</tr>
           	<tr>
           		<th>パスワード</th>
           		<td><input type="password" name="user_password"></td>
           	</tr>
						<tr>
							<th>パスワード確認</th>
							<td><input type="password" name="user_password2"></td>
							</tr>
						<tr>
           	<tr>
           		<th colspan="2"><input type="submit" value="新規登録"></th>
           	</tr>
           </table>
           </form>
           <a href="index.html">ログインに戻る</a>
        </div>
    </body>
</html>
