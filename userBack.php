<!doctype html>

<html>
    <head>
        <title>新規登録</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="user.css">
    </head>
    <body>
        <div id="container">
            <img src="images/large_logo.gif">
            <h2>在庫管理システム　社員登録</h2>
            <form action="userNext.php" method="post">
                <table>
                    <tr>
                        <th>社員番号</th>
                        <td><?= $_POST["user_number"] ?></td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td><?= $_POST["user_name"] ?></td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td><?= $_POST["user_password"] ?></td>
                    </tr>
                    <tr>
                        <th>パスワード確認</th>
                        <td><?= $_POST["user_password2"] ?></td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input type="hidden" name="user_number" value="<?= $_POST["user_number"] ?>">
                            <input type="hidden" name="user_name" value="<?= $_POST["user_name"] ?>">
                            <input type="hidden" name="user_password" value="<?= $_POST["user_password"] ?>">
                            <input type="submit" name="return" value="戻る">
                            <input type="submit" name="register" value="新規登録">
                        </th>
                    </tr>
                </table>
            </form>
            <a href="index.html">ログインに戻る</a>
        </div>
    </body>
</html>