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
            $user->tel = $data['tel'];
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

  <!--   <form action="/cregistration.php" method="POST">

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
    </form> -->
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Senior.Start</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/glightbox.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/lindy-uikit.css"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
    .section-title { background: none;
    }
  </style>
  <body>
    
    <section id="contact" class="contact-section contact-style-1">
      <header class="header header-4">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="" />
                  </a>
  
                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent4">
                    <ul id="nav4" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll" href="login.php">Вход</a>
                      </li>
                      
                    </ul>
                    
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
        <div class="container">
          
          <div class="row">
            <div class="row" align="center">
              <div class="col-xxl-9 col-xl-9 col-lg-9">
                <div class="section-title mb-40">
                  <h3 class="mb-15">Регистрация</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-9 pt-50 pl-50 pr-50 pb-50 formregigster">
              <div class="contact-form-wrapper align-items-center">
                <form action="cregistration.php" method="POST"">
                  <div class="row ">
                    <div class="col-md-6 ">
                      <div class="single-input">
                        <label for="name">Имя</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Введите ваше имя">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Фамилия</label>
                        <input type="text" id="sername" name="surname" class="form-input" placeholder="Введите вашу фамилию">
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="single-input">
                        <label for="name">Логин</label>
                        <input type="text" id="name1" name="login" class="form-input" placeholder="Введите логин">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Комания</label>
                        <input type="text" id="sername1" name="company" class="form-input" placeholder="Введите название вашей компании">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Инн</label>
                        <input type="text" id="sername1" name="inn" class="form-input" placeholder="Введите ваш ИНН вашей компании">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Контактный телефон</label>
                        <input type="tel" id="sername1" name="tel" class="form-input" placeholder="Введите контактный ьелефон компании">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Пароль</label>
                        <input type="text" id="sername1" name="password" class="form-input" placeholder="Придумайте пароль">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="single-input">
                        <label for="sername">Подтвердите пароль</label>
                        <input type="text" id="sername1" name="password1" class="form-input" placeholder="Введите пароль ещё раз">
                      </div>
                    </div>
                    </div>
                    <div class="col-md-12" align="center">
                      <div class="form-button">
                        <button type="submit" class="button radius-30 submr" name='do_reg'>Зарегистрироваться</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-3  pt-150 pl-50 pr-50 pb-50">
                <h3>Компания</h3>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

