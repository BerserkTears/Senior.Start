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
                  <h2 class="mb-25">
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
                      $rabs = R::find('ratings','user_id = ?', array($_SESSION['logged_user']->id));
                        asort($rabs, $rab->score);
                      foreach ($rabs as $rab){
                        $rab->name = R::findOne('users','inn = ?',array($rab->company));
                      echo '
                          <h4 ">Тест компании '.$rab->name->company.' </h4>
                          <h4 >Счёт: '.$rab->score.'</h4>';
                      }
                      ?>
            
              <?php if ($_SESSION['logged_user']->company == "none"): ?>
                <a href="/find.php" class="button button-lg radius-30 ml-20">Подать заявку</a>
              <?php else:?>
                <a href="/testcreation.php" class="button button-lg radius-30 ml-20">Редактировать тест</a>
                <a href="/userresults.php" class="button button-lg radius-30 ml-20">Результаты заявок</a>
              <?php endif; ?>
  </body>
</html>