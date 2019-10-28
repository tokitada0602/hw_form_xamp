<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $select = $_POST['select'];
    // $select1=$_POST['select'];
    // $select2=$_POST['select'];
    // $select3=$_POST['select'];
    // $select4=$_POST['select'];
    // $select5=$_POST['select'];
    // $select6=$_POST['select'];
    $content = $_POST['content'];

    if ($name ==''){
      $nickname_result = '名前が入力されてません。';
    }else {
      $name_result = $name.'様';
    }
    if ($email == ''){
      $email_result ='メールアドレスが入力されていません。';
    }else {
      $email_result ='メールアドレス'.$email;
    }
    require_once('function.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $name_result; ?></p>
  <p><?php echo $email_result; ?></p>
  <p><?php echo h($select); ?></p>
  <p><?php echo h($content); ?></P>
  <form method="POST" action="thanks.php">
    <input type="hidden" name="name" value="<?php
    echo $name; ?>">
    <input type="hidden" name="email" value="<?php
    echo $email; ?>">
    <input type="hidden" name="product" value="<?php
    echo $select; ?>">
    <input type="hidden" name="content" value="<?php
    echo $content; ?>">

    <button type="button" onclick="history.back()">戻る</button>
    <?php if ($name !=''&& $email !=''&& $select !=''&& $content !=''): ?>
    <button type="submit">OK</button>
  <?php endif; ?>
</body>
</html>