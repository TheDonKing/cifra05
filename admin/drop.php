<?php
include ("block/bd.php");
if (isset($_POST['id'])) {$id = $_POST['id'];}
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2; url=del.php">
    <title>Удаление страниц</title>
</head>
<body>
<? include_once("block/menu.php")?>

<div class="container">
    <div class="row">
        <?php
            if (isset($id))
            {
                $result = mysql_query ("DELETE FROM page WHERE id='$id'");

                if ($result == 'true') {echo "<p>Ваш урок успешно удален!</p>";}
                else {echo "<p>Ваш урок не удален!</p>";}


            }
            else

            {
                echo "<p>Вы запустили данный фаил без параметра id и поэтому, удалить урок невозможно (скорее всего Вы не выбрали радиокнопку на предыдущем шаге).</p>";
            }



            ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>