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

    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:600,300,100|Open+Sans+Condensed:300);
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);


        @sidebar-width: 250px;
        @window-margin: 60px;

        body {
            background: #FFF linear-gradient(to bottom, #3F567C, #B5CCC6) no-repeat;
            font-family: Open Sans, sans-serif;
        }

        a {
            text-decoration: none;
            transition-duration: .3s;

        &:hover {
             transition-duration: .05s;
         }
        }

        .window-margin {
            max-width: 1200px;
            padding: @window-margin;
            margin: auto;
        }
        .window {
            margin: auto;
            border-radius: 5px;
            background: #FFF;
            overflow: hidden;
            position: relative;
            box-shadow: 0 0 5px rgba(0, 0, 0, .1);

        .sidebar .top-bar, .main .top-bar {
            height: 65px;
            color: #FFF;
        }

        .sidebar {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: @sidebar-width;
            background: #24282C;
            transition-duration: .3s;

            color: #DDD;

        .top-bar {
            background: #3AB0FF;
            overflow: hidden;

        .logo {
            float: left;
            font-family: Open Sans Condensed, sans-serif;
            font-size: 40px;
            line-height: 65px;
            margin-left: 20px;
        }
        }

        .search-box {
            background: #373D41;
            padding: 20px;
            position: relative;

        input {
            width: 170px;
            border: 0;
            padding: 10px 20px;
            border-radius: 50px;
            outline: none;
            color: #999;
            transition-duration: .3s;

        &:focus {
             color: #333;

        & ~ .fa {
                color: #999;
            }
        }
        }

        .fa {
            position: absolute;
            top: 31px;
            right: 35px;
            color: #CCC;
            transition-duration: .3s;
            cursor: pointer;
        }
        }

        .menu {
            padding-top: 20px;

        .separator {
            border-top: 1px solid #111111;
            border-bottom: 1px solid #353535;
            margin: 20px;
        }

        a {
            color: #DDD;
            text-decoration: none;

        &:hover {
             color: #FFF;
         }
        }

        .menu-name {
            text-transform: uppercase;
            padding: 0 20px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        & > ul.no-bullets > li a {
        &:before {
             content: none !important;
         }
        }

        & > ul > li {
                list-style: none;

        & > a {
                position: relative;
                top: -3px;
                font-size: 14px;
                padding: 8px 25px;
                display: block;
                font-weight: bold;

        &:before {
             content: '';
             height: 9px;
             width: 9px;
             border-radius: 50px;
             display: inline-block;
             margin-right: 10px;
             box-shadow: inset 0 0 0 1px #EEE;
         }
        }

        &.active {
             list-style-type: disc;
             color: #FF3A3A;
             padding-bottom: 10px;

        & > a {
                padding-bottom: 0;

        &:before {
             background: #FF3A3A;
             box-shadow: none;
         }
        }

        ul {
            display: block;
            margin-left: 50px;
            margin-top: 5px;

        li.active a {
            color: #FFF;
            font-weight: bold;
        }

        li a {
            padding: 5px;
            display: block;
            font-size: 13px;
            color: #888;

        &:hover {
             color: #FFF;
         }
        }
        }
        }

        ul {
            display: none;
        }
        }

        }
        }



        .main {
            margin-left: @sidebar-width;
            transition-duration: .3s;
            position: relative;

        .top-bar {
            background: #279CEB;

        .top-menu {
            height: 65px;
            overflow: hidden;

        .menu-icon {
            padding: 27px 20px 20px 18px;
            display: none;
            cursor: pointer;
            transition-duration: .3s;

        &:hover {
             background: lighten(#3AB0FF, 5%);
             transition-duration: .05s;
         }

        .line {
            height: 2px;
            width: 20px;
            background: #FFF;
            margin-bottom: 4px;
        }
        }

        li {
            float: left;
            font-size: 14px;

        &.active a, &.active a:hover {
                         background: #3AB0FF;
                         color: #FFF;
                         font-weight: bold;
                     }
        }

        a {
            padding: 0 25px;
            color: #EEE;
            line-height: 65px;
            display: block;

        &:hover {
             color: #FFF;
             background: fade(#3AB0FF, 35%);
         }
        }
        }

        .profile-box {
            float: right;
            background: #3AB0FF;
            height: 65px;
            line-height: 65px;
            padding: 0 20px;
            cursor: pointer;

        .circle {
            background: #FFF;
            height: 30px;
            width: 30px;
            border-radius: 50px;
            display: block;
            float: left;
            margin-top: 15px;
        }

        .arrow {
            float: left;
            margin-left: 10px;
            line-height: 65px;
        }
        }
        }


        .featured-movie {
            position: relative;

        .cover {
            width: 100%;
            display: block;
        }

        .corner-title {
            position: absolute;
            top: 20px;
            left: 20px;
            text-transform: uppercase;
            color: #FFF;
            background: rgba(25,25,25,.3);
            padding: 10px;
            font-size: 13px;
        }

        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px 30px;
            background: rgba(10,10,10,.8);
            color: #FFF;
            overflow: hidden;

        .title-container {
            float: left;
            font-weight: 100;
            font-size: 40px;

        .fa {
            margin-right: 10px;
            color: #FF3A3A;
        }

        b {
            font-weight: 600;
        }
        }

        .right {
            float: right;
            font-size: 14px;
            margin-top: 14px;

        .stars {
            float: left;
            color: #F0C236;
            margin-right: 20px;
        }

        .share {
            float: left;
            cursor: pointer;

        .fa {
            margin-right: 5px;
        }
        }
        }
        }
        }

        .movie-list {
        .title-bar {
            padding: 20px;
            border-bottom: 1px solid #DDD;
            overflow: hidden;

        .left {
            float: left;
            font-size: 15px;
            text-transform: uppercase;

        .grey {
            color: #999;
        }

        .bold {
            font-weight: bold;
        }

        p {
            display: inline-block;
            margin-right: 10px;
        }
        }

        .right {
            float: right;

        a {
            color: #999;
            margin-left: 10px;

        &.blue {
             color: #279CEB;
         }
        }
        }
        }

        .list {
            margin: 20px;
            margin-right: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

        li {
            flex: 0 0 130px;
            padding-bottom: 30px;
            margin-right: 20px;
            position: relative;

        &:hover:after {
             opacity: 1;
         }

        &:after {
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             height: 195px;
             content: '\f144';
             background: rgba(0,0,0,.3);
             border-radius: 5px;
             opacity: 0;
             color: #FFF;
             font-size: 40px;
             display: block;
             cursor: pointer;
             line-height: 195px;
             text-align: center;
             font-family: FontAwesome;
             font-style: normal;
             font-weight: normal;
             -webkit-font-smoothing: antialiased;
         }

        img {
            width: 130px;
            height: 195px;
            display: block;
            margin: 0 auto 5px auto;
            cursor: pointer;
        }

        .title, .genre {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
        }

        .title {
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .genre {
            color: #999;
            font-size: 12px;
        }
        }
        }

        .load-more {
            background: #EEE;
            padding: 15px;
            margin: 20px;
            border-radius: 5px;
            text-align: center;
            color: #666;
            display: block;

        &:hover {
             background: #DDD;
         }

        .fa {
            margin-left: 10px;
        }
        }
        }

        }
        }



        @tablet-bk: (1100px + (@window-margin*2));
        @media only screen and (max-width: @tablet-bk) {

            .window > .sidebar {
                transform: translateX(-@sidebar-width);
            }

            .window > .main {
                margin-left: 0;
            }



            .window > .main .top-bar .top-menu .menu-icon {
                display: block;
            }



            .sidebar-is-open {
            .window > .sidebar {
                transform: translateX(0);
            }
            .window > .main {
                transform: translateX(@sidebar-width);
            }
        }

        }

        @media only screen and(max-width: 960px) {

            .window .main .featured-movie .bottom-bar {
                position: static;

            .title-container {
                font-size: 25px;
            }
        }

        }
    </style>
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
<div class="window-margin">
    <div class="window">

        <aside class="sidebar">
            <div class="top-bar">
                <p class="logo">REPLEX</p>
            </div>

            <div class="search-box">
                <input type="text" placeholder="Search..."/>
                <p class="fa fa-search"></p>
            </div>

            <menu class="menu">
                <p class="menu-name">Movie trailers</p>
                <ul>
                    <li class="active">
                        <a href="#">Action / Adventure</a>
                        <ul>
                            <li><a href="#">Latest</a></li>
                            <li class="active"><a href="#">Popular</a></li>
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">Staff picks</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Documentaries</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Horror</a></li>
                    <li><a href="#">Sci-Fi  / Fantasy</a></li>
                    <li><a href="#">List A-Z</a></li>
                </ul>

                <div class="separator"></div>

                <ul class="no-bullets">
                    <li><a href="#">Latest news</a></li>
                    <li><a href="#">Critic reviews</a></li>
                    <li><a href="#">Box office</a></li>
                    <li><a href="#">Top 250</a></li>
                </ul>

                <div class="separator"></div>
            </menu>
        </aside>


        <div class="main" role="main">

            <div class="top-bar">

                <div class="profile-box">
                    <div class="circle"></div>
                    <span class="arrow fa fa-angle-down"></span>
                </div>

                <ul class="top-menu">
                    <li class="menu-icon trigger-sidebar-toggle">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </li>
                    <li><a href="#">Headlines</a></li>
                    <li><a href="#">Articles</a></li>
                    <li class="active"><a href="#">Movies & Films</a></li>
                    <li><a href="#">Television</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Celebrities</a></li>
                </ul>

            </div> <!-- top bar -->


            <div class="featured-movie">
                <img class="cover" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/backdrop_ggwxvq_1.jpg" alt="" class="cover" />
                <p class="corner-title">Staff pick</p>

                <div class="bottom-bar">
                    <div class="title-container">
                        <span class="fa fa-play-circle"></span>
                        <b>Non-stop</b> Trailer #1
                    </div>

                    <div class="right">
                        <div class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                        <div class="share">
                            <icon class="fa fa-share-square"></icon> Share
                        </div>
                    </div> <!-- right -->
                </div> <!-- bottom bar -->
            </div> <!-- featured -->


            <div class="movie-list">
                <div class="title-bar">
                    <div class="left">
                        <p class="bold">Popular Trailers</p>
                        <p class="grey">Action / Adventure</p>
                    </div> <!-- left -->
                    <div class="right">
                        <a class="blue" href="#">Rating <i class="fa fa-angle-down"></i></a>
                        <a href="#">Newest</a>
                        <a href="#">Oldest</a>
                    </div> <!-- right -->
                </div> <!-- title-bar -->

                <ul class="list">
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140412_oavbye_1.png" alt="" class="cover" />
                        <p class="title">Sin City: A Dame To Kill For</p>
                        <p class="genre">Action, Crime</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140329_aawn02_1.png" alt="" class="cover" />
                        <p class="title">Transcendence</p>
                        <p class="genre">Action, Drama</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140239_kyg9i7_1.png" alt="" class="cover" />
                        <p class="title">Need For Speed</p>
                        <p class="genre">Action, Crime</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140052_dq4dyx_1.png" alt="" class="cover" />
                        <p class="title">The Amazing Spiderman</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140104_tdgzka_1.png" alt="" class="cover" />
                        <p class="title">Pompeii</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140248_fmufrz_1.png" alt="" class="cover" />
                        <p class="title">Divergent</p>
                        <p class="genre">Action, Sci-Fi</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140401_aewzsy_1.png" alt="" class="cover" />
                        <p class="title">Guardians of the Galaxy</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140339_wck2gw_1.png" alt="" class="cover" />
                        <p class="title">X-Men: Days of Fury</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140311_rj1det_1.png" alt="" class="cover" />
                        <p class="title">Captain America: The Winter Soilder</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140248_fmufrz_1.png" alt="" class="cover" />
                        <p class="title">Divergent</p>
                        <p class="genre">Action, Sci-Fi</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140132_bcnfqk_1.png" alt="" class="cover" />
                        <p class="title">RoboCop (2014)</p>
                        <p class="genre">Action, Crime</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140329_aawn02_1.png" alt="" class="cover" />
                        <p class="title">Transcendence</p>
                        <p class="genre">Action, Drama</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140239_kyg9i7_1.png" alt="" class="cover" />
                        <p class="title">Need For Speed</p>
                        <p class="genre">Action, Crime</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140104_tdgzka_1.png" alt="" class="cover" />
                        <p class="title">Pompeii</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140412_oavbye_1.png" alt="" class="cover" />
                        <p class="title">Sin City: A Dame To Kill For</p>
                        <p class="genre">Action, Crime</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140339_wck2gw_1.png" alt="" class="cover" />
                        <p class="title">X-Men: Days of Fury</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140052_dq4dyx_1.png" alt="" class="cover" />
                        <p class="title">The Amazing Spiderman</p>
                        <p class="genre">Action, Adventure</p>
                    </li>
                    <li>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/2014-03-08_140248_fmufrz_1.png" alt="" class="cover" />
                        <p class="title">Divergent</p>
                        <p class="genre">Action, Sci-Fi</p>
                    </li>
                </ul>

                <a href="#" class="load-more">Show more movies <span class="fa fa-plus"></span></a>

            </div> <!-- movie list -->


        </div> <!-- main -->

    </div> <!-- window -->
</div> <!-- window margin -->


<?php include_once("block/footer.php") ?>
</body>
</html>