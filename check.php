<?php
// Super global変数
// ー　PHPがもともと用意している変数
var_dump($_POST);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>


    <?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    ?>

    <!-- 名前 -->

    <?php
        if($username ==""){
            $usernameresult = 'ユーザー名が入力されてません';
        }else {
            $usernameresult = $username;
        }

    ?>
    <p>名前：<?php echo $usernameresult; ?></p>

    <!-- アドレス -->

    <?php
        if($email ==""){
            $emailresult = 'メールアドレスが入力されてません';
        }else {
            $emailresult = $email;
        }

    ?>

    <p>メールアドレス：<?php echo $emailresult; ?></p>


        <!-- 入力内容 -->
    <?php
        if($content ==""){
            $contentresult = '入力されてません';
        }else {
            $contentresult = $content;
        }

    ?>

    <p>入力内容：<?php echo $contentresult;  ?></p>
  


    <form action="">
        <button>戻る</button>
        <input type="submit" value ="OK">

    </form>


</body>
</html>