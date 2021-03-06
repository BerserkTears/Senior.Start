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
<!DOCTYPE html>
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
  <body>
    <section class="signup signup-style-2">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-3"></div>
            <div class="col-lg-6 justify-content-center mt-150">
              <div class="row" align="center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="section-title reg mb-40">
                    <h3 class="mb-15">Авторизация</h3>
                  </div>
                </div>
              </div>
              <div class="signup-form-wrapper">
                <form action="/login.php" class="signup-form pt-50 pl-50 pr-50 pb-50" method="POST">
                  <div class="single-input">
                    <label for="login" class="lab">Логин</label>
                    <input type="text" class="inpuu" id="login" name="login" placeholder="Ваш логин" required>
                  </div>
                  <div class="single-input">
                    <label for="password" class="lab">Пароль</label>
                    <input type="password" class="inpuu" id="Password" name="password" placeholder="Ваш пароль" required>
                  </div>
                  <div class="signup-button mb-25">
                    <button type="submit" class="button radius-30 submr" name='do_log'>Войти</button>
                  </div>
                  <p><a href="/userregister.php">Регистрация</a> </p>
                </form>
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
