<?
include ("block/bd.php"); /*Соединяемся с базой*/
$result = mysql_query("SELECT title FROM home",$db);
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
    <meta name="keywords" content="FraemWork"/>
    <meta name="robots" content="all"/>
    <meta name="description" content="Framework">
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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" type="text/css" />
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
<section id="slider" class="slider">
    <div class="container-fluid">
        <div class="row">
            <div class="slider-leftBox col-sm-12 col-md-6">
                <div  class="sync2 owl-carousel">
                    <div class="item"><a class="active " href="">Цифровая печать</a></div>
                    <div class="item"><a class="active" href="">Оперативная печать</a></div>
                    <div class="item"><a class="active" href="">Офсетная печать</a></div>
                    <div class="item"><a class="active" href="">Широкоформатная печать</a></div>
                    <div class="item"><a class="active" href="">Дизайн</a></div>
                    <div class="item"><a class="active" href="">Переплетные работы</a></div>
                </div>
                <a class="slider-button" href="#slider">Полный список услуг</a>

            </div>
            <div class="slider-rightBox col-sm-12 col-md-6">
                <div  class="sync1 owl-carousel">
                    <div class="item"><img src="img/1.png" alt=""/></div>
                    <div class="item"><img src="img/1.png" alt=""/></div>
                    <div class="item"><img src="img/1.png" alt=""/></div>
                    <div class="item"><img src="img/1.png" alt=""/></div>
                    <div class="item"><img src="img/1.png" alt=""/></div>
                    <div class="item"><img src="img/1.png" alt=""/></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="about-leftBox col-md-5">
                <h3>О НАС</h3>
                <p><b>Наша основная деятельность:</b>
                    оказание услуг по разработке дизайна и тиражированию полиграфической продукции, такие как рекламные материалы, офисные бланки, плакаты, календари, визитки, грамоты, этикетки, брошюры, журналы, книги и т.п.
                    Выполняем работы на современном высококачественном оборудовании с помощью новейших технологий и материалов, оперативно и качественно по доступным ценам.
                    Форматы изделий – от визиток до плакатов неограниченных размеров.
                    Мы принимаем заказы с любыми тиражами - от нескольких экземпляров, сделанных в одном цвете или полноцветном варианте до многотысячных изданий.
                    Принимаем заказы от частных лиц, индивидуальных предпринимателей, организаций, органов власти и общественных объединений.
                    Задача нашего коллектива – быть профессионалами своего дела, понимать и решать заказы клиента быстро и эффективно.
                    <br>
                    <b>Наши возможности:</b>
                    - цифровая печать <br>
                    - офсетная печать<br>
                    - широкоформатная и интерьерная печать<br>
                    - полный спектр послепечатной обработки (тиснение, кашировка, вырубка, различные виды переплета и т.д.)
                </p>
                <a class="about-button" href="#about">Подробнее</a>
            </div>
            <div class="about-rightBox col-md-7">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><p>СКИДКИ <br/> НА РАЗРАБОТКУ <br/> <span>ФИРМЕННОГО<br/> СТИЛЯ</span> </p><img src="img/viz-cart.png" alt="The Last of us"></div>
                    <div class="item"><p>СКИДКИ <br/> НА РАЗРАБОТКУ <br/> <span>ФИРМЕННОГО<br/> СТИЛЯ2</span> </p><img src="img/viz-cart.png" alt="GTA V"></div>
                    <div class="item"><p>СКИДКИ <br/> НА РАЗРАБОТКУ <br/> <span>ФИРМЕННОГО<br/> СТИЛЯ3</span> </p><img src="img/viz-cart.png" alt="Mirror Edge"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <h3>Наши работы</h3>
            <main class="cd-main-content">
                <div class="cd-tab-filter-wrapper">
                    <div class="cd-tab-filter">
                        <ul class="cd-filters">
                            <li class="placeholder">
                                <a data-type="all" href="#0">Все работы</a> <!-- selected option on mobile -->
                            </li>
                            <li class="filter"><a class="selected" href="#0" data-type="all">Все работы</a></li>
                            <li class="filter" data-filter=".flyers"><a href="#0" data-type="flyers">Флаера</a></li>
                            <li class="filter" data-filter=".booklets"><a href="#0" data-type="booklets">Буклеты</a></li>
                            <li class="filter" data-filter=".cards"><a href="#0" data-type="cards">Визитки</a></li>
                        </ul> <!-- cd-filters -->
                    </div> <!-- cd-tab-filter -->
                </div> <!-- cd-tab-filter-wrapper -->
                <section class="cd-gallery">
                    <ul>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/1.jpg"><img src="img/portfolio/flaer/1.jpg" alt="Image 1"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/1.jpg"><img src="img/portfolio/booklets/1.jpg" alt="Image 2"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/2.jpg"><img src="img/portfolio/flaer/2.jpg" alt="Image 3"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/2.jpg"><img src="img/portfolio/booklets/2.jpg" alt="Image 4"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/3.jpg"><img src="img/portfolio/flaer/3.jpg" alt="Image 5"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/3.jpg"><img src="img/portfolio/booklets/3.jpg" alt="Image 6"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/4.jpg"><img src="img/portfolio/flaer/4.jpg" alt="Image 7"></li></a>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/4.jpg"><img src="img/portfolio/booklets/4.jpg" alt="Image 8"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/5.jpg"><img src="img/portfolio/flaer/5.jpg" alt="Image 9"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/5.jpg"><img src="img/portfolio/booklets/5.jpg" alt="Image 10"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/6.jpg"><img src="img/portfolio/flaer/6.jpg" alt="Image 11"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/6.jpg"><img src="img/portfolio/booklets/6.jpg" alt="Image 12"></a></li>
                        <li class="mix flyers "><a class="fancybox" href="img/portfolio/flaer/big/7.jpg"><img src="img/portfolio/flaer/7.jpg" alt="Image 13"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/7.jpg"><img src="img/portfolio/booklets/7.jpg" alt="Image 14"></a></li>
                        <li class="mix cards "><a class="fancybox" href="img/portfolio/cards/big/1.jpg"><img src="img/portfolio/cards/1.jpg" alt="Image 15"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/8.jpg"><img src="img/portfolio/booklets/8.jpg" alt="Image 16"></a></li>
                        <li class="mix cards "><a class="fancybox" href="img/portfolio/cards/big/2.jpg"><img src="img/portfolio/cards/2.jpg" alt="Image 17"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/9.jpg"><img src="img/portfolio/booklets/9.jpg" alt="Image 18"></a></li>
                        <li class="mix cards "><a class="fancybox" href="img/portfolio/cards/big/3.jpg"><img src="img/portfolio/cards/3.jpg" alt="Image 19"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/10.jpg"><img src="img/portfolio/booklets/10.jpg" alt="Image 20"></a></li>
                        <li class="mix cards "><a class="fancybox" href="img/portfolio/cards/big/4.jpg"><img src="img/portfolio/cards/4.jpg" alt="Image 21"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/11.jpg"><img src="img/portfolio/booklets/11.jpg" alt="Image 22"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/12.jpg"><img src="img/portfolio/booklets/12.jpg" alt="Image 23"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/13.jpg"><img src="img/portfolio/booklets/13.jpg" alt="Image 24"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/14.jpg"><img src="img/portfolio/booklets/14.jpg" alt="Image 25"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/15.jpg"><img src="img/portfolio/booklets/15.jpg" alt="Image 26"></a></li>
                        <li class="mix booklets "><a class="fancybox" href="img/portfolio/booklets/big/16.jpg"><img src="img/portfolio/booklets/16.jpg" alt="Image 27"></a></li>
                        <li class="gap"></li>
                        <li class="gap"></li>
                        <li class="gap"></li>
                    </ul>
                    <div class="cd-fail-message">No results found</div>
                </section> <!-- cd-gallery -->

            </main> <!-- cd-main-content -->
        </div>
    </div>
</section>
<section id="work" class="work">
    <div class="container">
        <div class="row">
            <h3>Как мы работаем</h3>
            <div class="work-item col-md-3 scrollflow -slide-top -opacity" ><img src="img/work-1.jpg" alt=""/><p>Позвоните и получите консультацию</p></div>
            <div class="work-item col-md-3 scrollflow -slide-top -opacity"><img src="img/work-2.jpg" alt=""/><p>Мы оформляем заказ</p></div>
            <div class="work-item col-md-3 scrollflow -slide-top -opacity"><img src="img/work-3.jpg" alt=""/><p>Рисуем для вас дизайн</p></div>
            <div class="work-item col-md-3 scrollflow -slide-top -opacity"><img src="img/work-4.jpg" alt=""/><p>Качественно сделанный заказ</p></div>
            <a class="scrollflow -slide-top -opacity" href="#">Оформить заказ</a>
        </div>
    </div>
</section>
<section id="contacts" class="contacts">
    <div class="container">
        <div class="row">
            <div class="text-form col-md-6">
                <h2>Контакты:</h2>
                <p><span>Адрес:</span>
                    Россия, 367030, г. <br /> Махачкала,
                    ул. Ярагского (26)<br/>
                    (1 этаж «6 континент»)<br/>
                    Отдел продаж: тел.:<br /> +7 928 123-45-67<br/>
                    email: <a href="mailto:cifra05@mail.ru">cifra05@mail.ru</a> <br/>
                    www.cifra05.ru
                </p>
            </div>
            <div class="form col-md-6">
                <form data-toggle="validator" role="form">

                    <div class="form-group">
                        <label for="inputName" class="control-label">Ваше имя и фамилия</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Магомедов Магомед" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="Адрес электронной почты недействителен" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="control-label">Номер телефона</label>
                        <input type="tel" data-minlength="11" name="number" class="form-control" id="inputPassword" placeholder="8(123)-456-78-90" required>
                        <span class="help-block">Минимум 11 символов</span>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<section id="partners" class="partners">
    <div class="container">
        <div class="row">
            <h3>Наши парнеры</h3>
            <div id="owl-demo-partners">
                <div class="item"><img src="img/partners/1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="img/partners/2.jpg" alt="Owl Image"></div>
                <div class="item"><img src="img/partners/3.jpg" alt="Owl Image"></div>
                <div class="item"><img src="img/partners/4.jpg" alt="Owl Image"></div>
                <div class="item"><img src="img/partners/5.jpg" alt="Owl Image"></div>
                <div class="item"><img src="img/partners/6.jpg" alt="Owl Image"></div>
            </div>
        </div>
    </div>
</section>
<?php include_once("block/footer.php") ?>
</body>
</html>