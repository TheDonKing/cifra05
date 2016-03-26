<?php
include ("block/bd.php"); /*Соединяемся с базой*/
$result = mysql_query("SELECT * FROM page WHERE id=4",$db);
$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->
<head>
    <!--Created by DonKing
    Base template (without user's data) checked by http://s-dt.ru-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" lang="ru" content="s-dt.ru"/>
    <meta name="copyright" content="&copy; DTStudio <?php echo date("Y"); ?> "/>
    <meta name="keywords" content="<?php echo $myrow['meta_k']; ?>"/>
    <meta name="robots" content="all"/>
    <meta name="description" content="<?php echo $myrow['meta_d']; ?>">
    <title><?php echo $myrow['title']; ?></title>
    <meta name='yandex-verification' content='6c33212f4dc14e06' />

    <!-- Для нормального отображении сайта в мобильных устройствах  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- SSS -->
    <link rel="DC.identifier" type="text/plain" href="http://#">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
    <link rel="meta" type="application/rdf+xml" title="Dublin" href="dublin.rdf" />
    <link rel="search" type="application/opensearchdescription+xml" title="DTstudio" href="opensearch.xml" />
    <meta name="robots" content="index, follow">
    <meta name='yandex-verification' content='4c5619304dc1f8d7' />

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- For the iPad mini and the first- and second-generation iPad on iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png">
    <!-- For the iPad mini and the first- and second-generation iPad on iOS ≤ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png">
    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png">
    <!-- For iPhone with high-resolution Retina display running iOS ≤ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png">
    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png">
    <!-- For iPad with high-resolution Retina display running iOS ≤ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png">

    <!-- Libs -->
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" type="text/css" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/filter/filter.css" type="text/css" />

    <!-- Root Style -->
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css"/>
    <link rel="stylesheet" href="css/ie.css" type="text/css" />
    <link rel="stylesheet" href="css/media.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css" type="text/css"/>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- Пишем стили для каждой версии IE -->
    <!--[if IEMobile 7 ]> <html lang="ru" class=" iem7"> <![endif]-->
    <!--[if lt IE 7 ]> <html lang="ru" class="ie6 oldie"> <![endif]-->
    <!--[if IE 7 ]> <html lang="ru" class="ie7 oldie"> <![endif]-->
    <!--[if IE 8 ]> <html lang="ru" class="ie8 oldie"> <![endif]-->
    <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html lang="ru"/><!--<![endif]-->

    <!--if lte IE 8]>
    <script src="libs/respond/respond.min.js"/></script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php include_once("block/menu.php")?>


<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse sidebar-nav left-menu col-md-4" id="responsive-menu">
                <ul class="list nav list-group">
                    <?php
                    $result = mysql_query ("SELECT id, title FROM page",$db);
                    $myrow = mysql_fetch_array ($result);
                    do {
                        printf ("
                        <li><a href='page_view.php?id=%s'>%s</a></li>",$myrow["id"],$myrow["title"]);
                    }
                    while ($myrow = mysql_fetch_array ($result));
                    ?>
                </ul>
            </div>
            <div class="center-content col-md-8">
                <h2><?php
                    $result = mysql_query("SELECT * FROM page WHERE id=4",$db);
                    $myrow = mysql_fetch_array($result);
                    echo $myrow['title']; ?></h2>
        <p><?php
            $result = mysql_query("SELECT * FROM page WHERE id=4",$db);
            $myrow = mysql_fetch_array($result);
            echo $myrow['text']; ?>
        </p>
            </div>

        </div>
    </div>
</div>

<div id="reviews">
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>
    <div class="testimonial hidden">
        <p>"Here is a review. I love the product!"</p>
        <span class="customer">- John Doe, Ohio</span>
    </div>

    <button id="show-more">Show More</button>
</div>
<?php include_once("block/footer.php") ?>
</body>
</html>