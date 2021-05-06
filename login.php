<?php
require "db.php";
$data = $_POST;
if (isset($data['do_log'])) {
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user) {
        if ($data['password'] == $user->password) {
            $_SESSION['logged_user'] = $user;
            header('Location: /lk.php');
        } else {
            echo '<script>alert("Неверный пароль")</script>';
        }
    } else {
        echo '<script>alert("Пользователь не найден")</script>';
    }
}
?>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Senior.Start</title>
</head>
<body>
    <form action="/login.php" class="signup-form pt-50 pl-50 pr-50 pb-50" method='POST'>
        <label for="login">Логин</label>
        <input type="text" id="login" name="login" placeholder="Ваш логин" required>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Ваш пароль" required>
        <button name='do_log'>Войти</button>
        <p><a href="/userregister.php">Регистрация</a> </p>
    </form>
</body>
</html>