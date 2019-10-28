<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $content = $_POST['content'];


    require_once('function.php');
    require_once('dbconnect.php');

    $stmt = $dbh->prepare('INSERT INTO sweets (name, email, product, content) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $email, $product, $content]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ご注文完了</title>
</head>
<body>
  <h1>ご注文有り難う御座います。</h1>
  <p><?php echo $name; ?></p>
  <p><?php echo $email; ?></p>
  <p><?php echo $product; ?></p>
  <p><?php echo $content; ?></p>
</body>
</html>