<?php
require 'db.php';
$data = $_POST;
if (empty($_SESSION['logged_user'])) {
    header('location:/login.php');
}
$test = R::findAll('anketa');
if (isset($data['test_sumbit'])) {
    $rate['user_answer1'] = 0;
    $rate['user_answer2'] = 0;
    $rate['user_answer3'] = 0;
    $rate['user_answer4'] = 0;
    $rate['user_answer5'] = 0;
    for ($i = 1; $i <= 20; $i++) {
        $rate['user_answer'.$data['ans' . $i]] += 1;
    }
    $rating = R::findOne('users', 'id = ?', [$_SESSION['logged_user']->id]);

    $_SESSION['logged_user']->user_answer1 =$rate['user_answer1'];
    $_SESSION['logged_user']->user_answer2 =$rate['user_answer2'];
    $_SESSION['logged_user']->user_answer3 =$rate['user_answer3'];
    $_SESSION['logged_user']->user_answer4 =$rate['user_answer4'];
    $_SESSION['logged_user']->user_answer5 =$rate['user_answer5'];
    
    $rating->user_answer1 = $rate['user_answer1'];
    $rating->user_answer2 = $rate['user_answer2'];
    $rating->user_answer3 = $rate['user_answer3'];
    $rating->user_answer4 = $rate['user_answer4'];
    $rating->user_answer5 = $rate['user_answer5'];
    R::store($rating); 
    header('location:/lk.php');
}

?>
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
    <style>
    *,html,body{
      overflow:visible !important;
    }
    html,body{
      background-image: url('assets/img/6.png');
    }
    .section-title { background: none;
    }
    .contact-form-wrapper{
    border-radius: 71px;
    background: #fff !important;

}
    
    </style>
  </head>
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
                        <a class="page-scroll" href="lk.php">Личный кабинет</a>
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
            <div class="col-lg-12  pl-50 pr-50 pb-50 formreg">
  
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="section-title mb-40">
                    <h3 class="mb-15 text-center">Профориентационный тест. Шаг 2 из 3</h3>
                  </div>
                </div>
              </div>
  
              <div class="contact-form-wrapper pt-50 pl-50 pr-50 pb-50" id="cont">
                <form action="anketa.php" method="POST">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="section-title mb-40">
                    <h4 class="mb-15 text-center">Выберите то, что для вас ближе</h4>
                  </div>
                </div>
                <?php
                $i = 0;
                foreach ($test as $vopros) {
                    $i = $i + 1;
                echo '
                <div class="q-b">
                  <div class="row justify-content-between">
                
                    <div class="col-md-6 pt-40">
                      <div class="single-input1 profinp">
                        <input type="radio" name="ans'.$i.'" class="form-check-input" id="exampleCheck2" value="' . $vopros->value1 . '">
                        <label class="form-check-label" for="exampleCheck1">' . $vopros->otvet1 . '</label>
                      </div>
                    </div>
                    <div class="col-md-6 pt-40">
                      <div class="single-input1 profinp">
                        <input type="radio" name="ans'.$i.'" class="form-check-input" id="exampleCheck2"value="' . $vopros->value2 . '">
                        <label class="form-check-label" for="exampleCheck1">' . $vopros->otvet2 . '</label>
                      </div>
                    </div>
                    
                  </div>
                </div>';}
                ?>
                  <div class="col-md-12" align="center">
                    <div class="form-button">
                      <button type="submit" class="button radius-30 submr1" name="test_sumbit">Отправить</button>
                    </div>
                  </div>
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
