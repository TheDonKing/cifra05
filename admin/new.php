<!doctype html>
<html lang="ru">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Добавление статей</title>
    <link href="ckeditor/plugins/spoiler/css/spoiler.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="AjexFileManager/ajex.js"></script>
    <script>CKEDITOR.dtd.$removeEmpty['span'] = false;</script>
</head>
<body>
<? include_once("block/menu.php")?>

<div class="container">
    <div class="row">
        <form method="post" action="add.php">
            <div class="form-group">
                <label>Введите название статьи ( заголовок: 50-80 знаков )</label>
                <input type="text" name="title" class="form-control"  placeholder="Статья">
            </div>
            <div class="form-group">
                <label>Описание данной страницы (до 150-200 знаков)</label>
                <input type="text" name="meta_d" class="form-control"  placeholder="Описание данной страницы">
            </div>
            <div class="form-group">
                <label>Ключевые слова (до 250 знаков через запятую) </label>
                <input type="text" name="meta_k" class="form-control"  placeholder="Ключевые слова">
            </div>
            <div class="form-group">
                <label>Введите полное описание статьи</label>
                <textarea id="editor1"  placeholder="Текст статьи" name="text" class="form-control" rows="3"></textarea>
                <script type="text/javascript">
                    var ckeditor1 = CKEDITOR.replace( 'editor1' );
                    AjexFileManager.init({
                        returnTo: 'ckeditor',
                        editor: ckeditor1
                    });
                </script>
            </div>


            <button type="submit" class="btn btn-default">Отправить</button>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>