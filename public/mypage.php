<?php
session_start();
require_once '../classes/UserLogic.php';
require_once '../functions.php';

// ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
    $_SESSION['login_err'] = 'ユーザを登録してログインしてください！';
    header('Location: signup_form.php');
    return;
}

$login_user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
</head>

<body>
    <h1>レシピを登録する</h1>
    <p>You are：<?php echo h($login_user['name']) ?></p>
    <!-- <p>メールアドレス：<?php echo h($login_user['email']) ?></p> -->

    <h2>マイレシピ登録</h2>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        <div class="content">
            料理名：<br><input type="text" name="recipe_name" class="input"><br>
            写真(.png、.jpg、.gifのみ対応)：<br>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="img" accept="image/*"><br>
            材料：<br><input type="text" name="ingredients" class="input big"><br>
            作り方：<br><input type="text" name="instructions" class="input big"><br>
            レシピのエピソード：<br><textarea name="memo" id="textarea" cols="70" rows="10"></textarea><br>
        </div>
        <button id="b" type="submit">作成</button>
    </form>

    <form action="logout.php" method="POST">
        <input type="submit" name="logout" value="ログアウト">
    </form>

</body>

</html>