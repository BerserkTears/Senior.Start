<?php 
require "db.php";
$data=$_POST;
//if ($_SESSION['logged_user']->company == "none"){
//    echo $_SESSION['logged_user']->name , ", privet!";
//} else {
//    echo $_SESSION['logged_user']->company , ", zdravstvu'te!";
//}
?>

<!-- 
                    <?php 
                      if ($_SESSION['logged_user']->company == "none"){
                            echo $_SESSION['logged_user']->name;
                        } else {
                            echo $_SESSION['logged_user']->company;
                        }
                    ?>

                    <h4 class=" mb-20">Информация о Вас,</h4>
                    <?php 
                      if(empty($_SESSION['logged_user']->user_answer1)){
                        echo '<a href="anketa.php">Пройдите анкету чтобы узнать свои навыки</a>';
                    } else {
                        echo "Вам подходит";
                        }
                      ?>
                    <a href="logout.php">Выйти</a>
                      
              <?php if ($_SESSION['logged_user']->company == "none"): ?>
                <a href="/find.php" class="button button-lg radius-30 ml-20">Все вакансии</a>
              <?php else:?>
                <a href="/testcreation.php" class="button button-lg radius-30 ml-20">Редактировать тест</a>
                <a href="/userresults.php" class="button button-lg radius-30 ml-20">Результаты заявок</a>
              <?php endif; ?>
 -->


<?php if($_SESSION['logged_user']->company == "none"): ?>
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
      #about, body,html{
        background-image: url('assets/img/6.png');
      }
    </style>
  </head>
  <body>
    <header class="header header-4">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                  </a>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent4">
                    <ul id="nav4" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll" href="logout.php">Выход</a>
                      </li>
                      
                    </ul>
                    
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
    <section id="about" class="about-section about-style-2 mb-80 pt-20">
        
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-12 col-xl-12 text-center pb-50">
                <h3>Личный кабинет</h3>
            </div>
            <div class="col-xl-5 col-lg-5 ">
              <div class="about-content-wrapper">
                <div class="section-title mb-40 pt-50 pl-50 pr-50 pb-40 hello">
                  <h4>Здравствуйте,</h4>
                  <h2 class="mb-25"><?php echo $_SESSION['logged_user']->name; ?></h2>
                </div>
                <div class="section-title mb-40 pt-50 pl-50 pr-50 pb-40 hello">
                  <h3 align="center" class="pb-30">Ваши навыки</h3>
                  <div class="row">
                  <h4 class="col-lg-6 "> Природа</h4>
                  <div class="col-lg-6 pt-10 pb-40">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']->user_answer1)/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (($_SESSION['logged_user']->user_answer1)/8*100)  ?>%</div>
                    </div>
                    
                  </div>
                  <h4 class="col-lg-6 "> Техника</h4>
                  <div class="col-lg-6 pt-10 pb-40">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']->user_answer2)/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (($_SESSION['logged_user']->user_answer2)/8*100)  ?>%</div>
                    </div>
                    
                  </div>
                  <h4 class="col-lg-6 "> Общение</h4>
                  <div class="col-lg-6 pt-10 pb-40">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']->user_answer3)/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (($_SESSION['logged_user']->user_answer3)/8*100)  ?>%</div>
                    </div>
                    
                  </div>
                  <h4 class="col-lg-6 "> Вычисления</h4>
                  <div class="col-lg-6 pt-10 pb-40">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']->user_answer4)/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (($_SESSION['logged_user']->user_answer4)/8*100)  ?>%</div>
                    </div>
                    
                  </div>
                  <h4 class="col-lg-6 ">Творчество</h4>
                  <div class="col-lg-6 pt-10 pb-40">
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo (($_SESSION['logged_user']->user_answer5)/8*100)  ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo (($_SESSION['logged_user']->user_answer5)/8*100)  ?>%</div>
                    </div>
                  </div>
                  <?php 
                      if(empty($_SESSION['logged_user']->user_answer1)){
                        echo '<a href="anketa.php">Пройдите анкету чтобы узнать свои навыки</a>';
                    }?>
                </div>
                </div>
                
              </div>
            </div>
            
            <div class="col-xl-7 col-lg-7">
              <div class="about-image-wrapper">
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="section-title mb-40 pt-50 pl-50 pr-50 pb-40 hello">
                      <h4 align="center" class="pb-30">Предстоящие собеседования</h4>
                      
                      <div class="col-lg-12 col-md-12 col-sm-12 mr-30 pb-30">
                        <div class="single-pricing row" align="center">
                          <div class="image col-lg-3" align="center">
                            <img src="assets/img/sber.png" alt="">
                          </div>
                          <h5 class="col-lg-3 text-center pt-30 sber2">Сбербанк</h5>
                          <h4 class="col-lg-3 sber3 text-center pt-30">Тестировщик ПО</h4>
                          <h4 class="col-lg-3 sber35 text-center pt-30"><a  href="#0">12.05.2021 13:30 Подключиться</a></h4>
                          
                        </div>
                        
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 mr-30 pb-30">
                        <div class="single-pricing row" align="center">
                          <div class="image col-lg-3" align="center">
                            <img src="assets/img/sber.png" alt="">
                          </div>
                          <h5 class="col-lg-3 text-center pt-30 sber2">Сбербанк</h5>
                          <h4 class="col-lg-3 sber3 text-center pt-30">Тестировщик ПО</h4>
                          <h4 class="col-lg-3 sber35 text-center pt-30"><a  href="#0">12.05.2021 13:30 Подключиться</a></h4>
                          
                        </div>
                        
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!--
            <div class="col-lg-12">
                <a href="#0" class="button button-lg radius-30">Редактировать информацию</a>
                <a href="#0" class="button button-lg radius-30 ml-20">Подать заявку</a>
                <a href="#0" class="button button-lg radius-30 ml-20">Результаты заявок</a>
            </div>
            -->
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

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<?php else:?>

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
      #about, body,html{
        background-image: url('assets/img/6.png');
      }
    </style>
  </head>
  <body>
    <header class="header header-4">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                  </a>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent4">
                    <ul id="nav4" class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="page-scroll" href="logout.php">Выход</a>
                      </li>
                      
                    </ul>
                    
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
    <section id="about" class="about-section about-style-2 mb-80 pt-20">
        
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-12 col-xl-12 text-center pb-50">
                <h3>Личный кабинет компании</h3>
            </div>
            <div class="col-xl-5 col-lg-5 ">
              <div class="about-content-wrapper">
                <div class="section-title mb-40 pt-50 pl-50 pr-50 pb-40 hello">
                  <div class="row">
                  <h3 class="mb-25 col-lg-6 pt-20"><?php echo $_SESSION['logged_user']->company;?></h3>
                  </div>
                </div>
                
                </div>
                
              </div>
              <div class="col-xl-4 col-lg-4">
                <div class="about-image-wrapper">
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="section-title pt-30 pr-20 pb-10 hello">
                        
                        
                        <h5 align="center" class="pb-30"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-dot svgg svgblue" viewBox="0 0 16 16">
                          <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg><a  href="#0">  Создать вакансию</a></h5>
                        
                      </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-12">
              <div class="section-title mb-40 pt-50 pl-50 pr-50 pb-40 hello">
                <h4 class="pb-50">Открытые вакансии</h4>
                <div class="row justify-content-between">
                  <div class="col-lg-3 compblock pb-20 pt-10" align="center">
                    <h5 class="colortest pt-10 pb-10">Тестировщик ПО</h5>
                    <h4 class="col-lg-12 text-center pt-30 sber1 pb-10"><a  href="#0">Таблица лидеров</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Время собеседований</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Закрыть вакансию</a></h4>
                  </div>
                  <div class="col-lg-3 compblock pb-20 pt-10" align="center">
                    <h5 class="colortest pt-10 pb-10">Тестировщик ПО</h5>
                    <h4 class="col-lg-12 text-center pt-30 sber1 pb-10"><a  href="#0">Таблица лидеров</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Время собеседований</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Закрыть вакансию</a></h4>
                  </div>
                  <div class="col-lg-3 compblock pb-20 pt-10" align="center">
                    <h5 class="colortest pt-10 pb-10">Тестировщик ПО</h5>
                    <h4 class="col-lg-12 text-center pt-30 sber1 pb-10"><a  href="#0">Таблица лидеров</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Время собеседований</a></h4>
                    <h4 class="col-lg-12 text-center pt-30 sber1"><a  href="#0">Закрыть вакансию</a></h4>
                  </div>
                  
                </div>
              </div>
            </div>
            
            <!--
            <div class="col-lg-12">
                <a href="#0" class="button button-lg radius-30">Редактировать информацию</a>
                <a href="#0" class="button button-lg radius-30 ml-20">Подать заявку</a>
                <a href="#0" class="button button-lg radius-30 ml-20">Результаты заявок</a>
            </div>
            -->
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
<?php endif; ?>