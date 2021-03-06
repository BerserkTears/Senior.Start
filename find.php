<?php
require 'db.php';
$data = $_POST;
$tests = R::find('tests','proftype = ?',array($data["proftype"]));
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
    <style>body{overflow: auto;}
    btnn{
        background-color: none;
        border-color: none;
      }</style>
  </head>
  <body>
    
    <section class="pricing-section pricing-style-1 mb-80">
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
      <div class="res">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10 mt-20">
            <div class="section-title text-center mb-60">
              <h3 class="mb-15">Тестирование. Шаг 3 из 3</h3>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="single-pricing row">

              <h4 class="col-lg-3 "><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-dot svgg" viewBox="0 0 16 16">
                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              </svg> <?php if($data['proftype'] == '1'){
                echo "Природа";
              }
              if($data['proftype'] == '2'){
                echo "Техника";
              }
              if($data['proftype'] == '3'){
                echo "Общение";
              }
              if($data['proftype'] == '4'){
                echo "Вычисления";
              }
              if($data['proftype'] == '5'){
                echo "Творчество";
              }
              ?>
              </h4>
              <div class="col-lg-3 pt-30">
                <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']['user_answer'.$data['proftype']])/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (round((($_SESSION['logged_user']['user_answer'.$data['proftype']])/8*100)))  ?>%</div>
                </div>
              </div>
          </div>

          <?php 
            foreach ($tests as $te){
              echo '<form action="test.php" method="POST">';
              $te->sur = R::findone('users','inn = ?', array($te->name));
              echo "<input type='hidden' name = 'te' value = '".$te->name."'>";
              echo '

            <div class="col-lg-5 col-md-5 col-sm-5 mr-30">
              <div class="single-pricing row" align="center">
                <h4 class="col-lg-6 text-center pt-30 sber">'.$te->sur->company.'</h4>
                <h4 class="col-lg-12 sber1">Вы подходите на должность:</h4>
                <div class="single-pricing1 row mb-20" align="center">
                  <h4 class="col-lg-12 text-center pt-30 sber1">'.$te->prof.'</h4>
                </div>
               
                  <button class="col-lg-12 btnn button mb-20" style:"border-radius:10px;color:black !important;" type="submit" name = "tet">Пройти тест</button>
              
                <div class="single-pricing1 row mb-20" align="center">
                  <h4 class="col-lg-12 text-center pt-30 sber1">Вопросов: '.$te->kol.'</h4>
                </div>
              </div>
              
            </div>';
            } 
          ?>
            
          
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
