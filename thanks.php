<?php

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
    <h1>お問い合わせありがとうございました</h1>
    <p>お名前: <?= h($username); ?></p>
    <p>メールアドレス: <?= h($email); ?></p>
    <p>電話番号: <?= h($phone); ?></p>
    <p>住所: <?= h($address); ?></p>
    
</body>
</html>