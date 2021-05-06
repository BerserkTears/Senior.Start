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
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Профопрос</title>
</head>
<body>
    <h3 class="mb-15 text-center">Первичное тестирование</h3>
    <form action="anketa.php" method="POST">
        <div class="row">
            <?php
            $i = 0;
            foreach ($test as $vopros) {
                $i = $i + 1;
                echo '
                    <div class="col-md-6">
                      <div class="single-input">
                        <p><input type="radio" id="name" name="ans' . $i . '" class="form-input"  value="' . $vopros->value1 . '">' . $vopros->otvet1 . '</p>
                        <p><input type="radio" id="name" name="ans' . $i . '" class="form-input"  value="' . $vopros->value2 . '">' . $vopros->otvet2 . '</p>
                      </div>
                    </div><hr>';
            }
            ?>
            <div class="form-button">
                <button type="submit" class="button radius-30" name='test_sumbit'>Отправить ответы</button>
            </div>
    </form>
</body>

</html>