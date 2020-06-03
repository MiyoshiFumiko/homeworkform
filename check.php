<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: index.html');
}

require_once('functions.php');

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p>お名前: <?= h($username); ?></p>
    <p>メールアドレス: <?= h($email); ?></p>
    <p>電話番号: <?= h($phone); ?></p>
    <p>住所: <?= h($address); ?></p>

    <form action="thanks.php" method="POST">
        <input type="hidden" name="username" value="<?= h($username); ?>">
        <input type="hidden" name="email" value="<?= h($email); ?>">
        <input type="hidden" name="phone" value="<?= h($phone); ?>">
        <input type="hidden" name="address" value="<?= h($address); ?>">

        <button type="button" onclick="history.back()">戻る</button>

        <?php if ($username != '' && $email != '' && $phone != '' && $address != '') { ?>
        <button type="submit" >確定</button>
        <?php } ?>

    </form>
</body>
</html>