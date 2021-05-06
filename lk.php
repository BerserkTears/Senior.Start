<?php 
require "db.php";
$data=$_POST;
//if ($_SESSION['logged_user']->company == "none"){
//    echo $_SESSION['logged_user']->name , ", privet!";
//} else {
//    echo $_SESSION['logged_user']->company , ", zdravstvu'te!";
//}
?>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Senior.Start</title>
  </head>
  <body>
                  <h4>Здравствуйте,</h4>
                  <h2>
                    <?php 
                      if ($_SESSION['logged_user']->company == "none"){
                            echo $_SESSION['logged_user']->name;
                        } else {
                            echo $_SESSION['logged_user']->company;
                        }
                    ?>
                  </h2>
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
  </body>
</html>