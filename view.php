<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM sweets');
    $stmt->execute();
    $results = $stmt->fetchAll();
    // var_dump($results);
    // foreach ($results as $result ) {
    //   # code...
    // var_dump($result['nickname']);
    // }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一覧</title>
</head>
<body>
<?php foreach ($results as $result) :?>
    <p><?php echo h($result['name']); ?><p>
    <p><?php echo h($result['email']); ?><p>
    <p><?php echo h($result['select']); ?><p>
    <p><?php echo h($result['content']); ?><p>
<?php endforeach; ?>

</body>
</html>