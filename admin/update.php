<?php
include ("block/bd.php");
if (isset($_POST['title'])) {$title = $_POST['title'];
    if ($title == '') {unset($title);}
}
/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.   */
if (isset($_POST['meta_d']))      {$meta_d = $_POST['meta_d']; if ($meta_d == '') {unset($meta_d);}}
if (isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset($meta_k);}}
if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['id']))      {$id = $_POST['id'];}


?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Обработчик</title>
</head>
<body>
<? include_once("block/menu.php")?>

<div class="container">
    <div class="row">
        <?php
        if (isset($title) && isset($meta_d) && isset($meta_k) && isset($text)) {
            /* Здесь пишем что можно заносить информацию в базу */
            $result = mysql_query ("UPDATE page SET title='$title', meta_d='$meta_d', meta_k='$meta_k', text='$text' WHERE id='$id'");

            if ($result == 'true') {
                echo "<p>Ваш урок успешно обновлен!</p>";
            } else {
                echo "<p>Ваш урок не обновлен!</p>";
            }
        }
        else
        {
            echo "<p>Вы ввели не всю информацию, поэтому урок в базе не может быть обновлен.</p>";
        }
        ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>