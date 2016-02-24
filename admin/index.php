<?
include("lock.php");
$ip = $_SERVER['REMOTE_ADDR']; $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json")); echo $details->city; // -> "Mountain View"
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Добро пожаловать в админ панель</title>
    <link rel="stylesheet" type="text/css" href="libs/who-is-online/styles.css" />


</head>
<body>
<? include_once("block/menu.php")?>
<div class="container">
    <div class="row">
        <p>
         Ваш ip адрес: <?echo $ip ?>
        </p>
        <h1>Кто онлайн</h1>
        <!-- This is the only XHTML code for the widget that you need: -->
        <div class="onlineWidget">
            <div class="panel"><img class="preloader" src="libs/who-is-online/img/preloader.gif" alt="Loading.." width="22" height="22" /></div>
            <div class="count"></div>
            <div class="label">online</div>

            <div class="arrow"></div>
        </div>

        <!-- End of important code -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="libs/who-is-online/widget.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>