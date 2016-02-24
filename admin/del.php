<?php
include ("block/bd.php");
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Удаление страниц</title>
</head>
<body>
<? include_once("block/menu.php")?>

<div class="container">
    <div class="row">
        <p><strong>Выберите урок для удаления          </strong></p>
        <form action="drop.php" method="post">
            <ul class="list-group">
            <?
            $result = mysql_query("SELECT title,id FROM page");
            $myrow = mysql_fetch_array($result);

            do
            {
                printf ("<li class='list-group-item'><input name='id' type='radio' value='%s'> <label>%s</label></li>",$myrow["id"],$myrow["title"]);
            }

            while ($myrow = mysql_fetch_array($result));
            ?>
            </ul>

            <p> <input name="submit" class="btn btn-danger" type="submit" value="Удалить статью"> </p>
            <div class="alert alert-warning" role="alert">Страница удалиться без возвратно!</div>

        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>