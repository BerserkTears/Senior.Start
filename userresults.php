<?php 
    require 'db.php';
    $data=$_POST;
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
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                  <div class="section-title mb-40">
                    <div class="row">
                      <h4 class="mb-15 text-center col-lg-3">Таблица лидеров</h4>
                      <h4 class="mb-15 text-center col-lg-6">Тестирование ПО</h4>
                  </div>
                  </div>
                </div>
              </div>
  
              <div class="contact-form-wrapper pt-50 pl-50 pr-50 pb-50" id="cont">
              <?php 
                $rabs = R::find('ratings','company = ?', array($_SESSION['logged_user']->inn));
                asort($rabs,$rabs['score']);
                foreach ($rabs as $rab){
                $rab->name = R::findOne('users','id = ?',array($rab->user_id));
                echo '
                <div class="q-b">
                  <div class="row">
                    <div class="col-md-1 pt-10">
                      <h5 class="lead text-center">1</h5>
                    </div>
                    <div class="col-md-3 pt-10">
                        <h5 class="lead text-center">'.$rab->name->name.' '.$rab->name->surname.'</h5>
                    </div>
                    <div class="col-md-3 pt-10">
                        <h5 class="lead text-center">Дата собеседования
                          12.05.2021 30:30</h5>

                    </div>
                    <div class="col-md-3 pt-10">
                      <h5 class="lead text-center">'.$rab->score.'
                        баллов</h5>
                    </div>

                  </div>
                </div>';}
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
