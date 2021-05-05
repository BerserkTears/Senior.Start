<?php
require "db.php";
$data = $_POST;
if (isset($data['do_reg'])) {
    if (R::count('users', "login = ?", array($data['login'])) > 0) {
        echo '<script>alert("Пользователь зарегистрирован")</script>';
    } else {
        if ($data['password'] == $data['password1']) {
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->password = $data['password'];
            $user->name = $data['name'];
            $user->surname = $data['surname'];
            $user->company = $data['company'];
            $user->inn = $data['inn'];
            R::store($user);
            $test = R::dispense('tests');
            $test->name = $data['inn'];
            $test->kol = 0;
            R::store($test);
            $_SESSION['logged_user'] = $user;
            header('Location: /lk.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Senior.Start</title>
</head>

<body>
    <h3>Регистрация</h3>
    <form action="/companyregister.php" method="POST">

        <label for="name">Имя</label>
        <input required type="text" id="name" name="name" class="form-input" placeholder="Введите ваше имя">


        <label for="surname">Фамилия</label>
        <input required type="text" id="surname" name="surname" class="form-input" placeholder="Введите вашу фамилию">


        <label for="company">Название компании</label>
        <input required type="text" id="company" name="company" class="form-input" placeholder="Введите название вашей компании ">

        <label for="surname">ИНН</label>
        <input required type="text" id="inn" name="inn" class="form-input" placeholder="Введите ИНН вашей компании">


        <label for="login">Логин</label>
        <input required type="email" id="login" name="login" class="form-input" placeholder="Введите ваш логин">


        <label for="password">Пароль</label>
        <input required type="password" id="password" name="password" class="form-input" placeholder="Введите ваш пароль">


        <label for="password1">Подтвердите пароль</label>
        <input required type="password" id="password1" name="password1" class="form-input" placeholder="Введите ваш пароль ещё раз">
        <button type="submit" name='do_reg'>Зарегистрироваться</button>
    </form>
</body>
</html>