<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/basic.css">
    <link rel="stylesheet" href="./css/register.css">
    <title>注册</title>
    <style>

    </style>
</head>
<body>

<?php require_once 'header.php'?>

<div id="container">
    <form class="form" action="login_post.php" method="post">
        <label>
            <input type="text" name="accounts"
                   class="text" placeholder="电子邮件/手机">
        </label>
        <label>
            <input type="password" name="password"
                   class="text" placeholder="密码">
        </label>
        <label>
            <input type="password" name="notpassword"
                   class="text" placeholder="确认密码">
        </label>
        <label>
            <input type="text" name="nickname"
                   class="text" placeholder="昵称">
        </label>
        <label>
            <select name="face" class="select">
                <option>--请选择头像-- (可选)</option>
                <option value="1">头像1</option>
                <option value="2">头像2</option>
                <option value="3">头像3</option>
                <option value="4">头像4</option>
                <option value="5">头像5</option>
                <option value="6">头像6</option>
                <option value="7">头像7</option>
                <option value="8">头像8</option>
                <option value="9">头像9</option>
                <option value="10">头像10</option>
            </select>
        </label>
        <label>
            <button type="submit" class="submit">注册新用户</button>
        </label>
    </form>
</div>


<?php require_once 'footer.php'?>

</body>
</html>