<?php
require_once 'inc/mobile_detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

function getRandomNumber($f, $t, $n)
{
    $buf = rand($f, $t);
    return ($buf == $n ? 1 : $buf);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>SmaCom</title>
    <link rel="stylesheet" href="inc/style.css">
    <link rel="stylesheet" href="inc/jpreloader.css">
    <link rel="stylesheet" href="inc/font-awesome.min.css"/>

    <link rel="stylesheet" href="inc/owl.carousel.css"/>
    <link rel="stylesheet" href="inc/owl.theme.css"/>

    <link rel="stylesheet" href="inc/liquid-slider.css">
    <? if ($deviceType == 'computer') { ?>
        <link rel="stylesheet" href="inc/animation.css">
    <? } ?>

    <? if ($deviceType != 'computer') { ?>
        <link rel="stylesheet" href="inc/tablet.css">
    <? } ?>

    <? if ($deviceType == 'computer') { ?>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>
        <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>
        <script src="inc/googleMap.js"></script>
    <? } ?>

    <script type="text/javascript">
        var lang = 'ua';
    </script>
</head>
<body>

<span id="block15"></span>
<span id="block21"></span>
<span id="block22"></span>
<span id="block23"></span>
<span id="block37"></span>


<div class="navSmall subNavSmall" id="subNavSmall1">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',1);">Котлети і страви з м'ясного фаршу</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',2);">Вареники</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',3);">Пельмені</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',5);">Млинці</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',6);">Випічка</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',0);">Готові страви</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall2">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',10);">SmaCom</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',9);">Doy-pack</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',8);">Фірмові</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',7);">EkoSmac</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall3">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',16);">Перші страви</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',17);">Готові страви</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',18);">Котлети і страви з м'ясного фаршу</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',19);">Напої</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',20);">Хліб</a></li>
    </ul>
</div>


<div class="navSmall">
    <ul id="navSmall">
        <li><a href="#block2">Про Компанію</a></li>
        <li><a href="#block23" onclick="renderInnerPage(this, 'cat', 23);">Заморожена продукція</a></li>
        <li><a href="#block22" onclick="renderInnerPage(this, 'cat', 22);">Готові страви в реторт-пакетах</a></li>
        <li><a href="#block37" onclick="renderInnerPage(this, 'cat', 37);">Су-від</a></li>
        <li><a href="#block15" onclick="renderInnerPage(this, 'cat', 15);">Продукція для HoReCa</a></li>
        <!-- <li><a href="#block21" onclick="renderInnerPage(this, 'cat', 21);">Експорт</a></li> -->
    </ul>
    <ul class="lang_small">
        <li><a href="/">Рoc</a></li>
        <li class="current"><a href="ua.php">Укр</a></li>
        <li><a href="en.php">Eng</a></li>
    </ul>
</div>


<div class="header subnavHeader">
    <a href="#" onClick="pageHistory.back('home'); return false;">повернутися на головну</a>
    <div class="menuSwitcherWrapper">
        <div class="menuSwitcher"></div>
    </div>
</div>
<a onClick="pageHistory.back(); return false;" class="back">
    <span class="back__wrap">
        <i class="back__icon"></i>
        <span class="back__text">назад</span>
    </span>
</a>
<a onClick="pageHistory.back('home'); return false;" class="back back_main">
    <span class="back__wrap">
        <i class="back__icon"></i>
        <span class="back__text">головна</span>
    </span>
</a>

<div class="subnav closed" id="subnav1">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li><a href="#" id="cat_link_1" onclick="renderInnerPage(this, 'cat',1);"><img alt=""
                                                                                               src="img/subnab_cat3.png"><span
                                class="title">Котлети і страви з м'ясного фаршу</span></a></li>
                <li><a href="#" id="cat_link_2" onclick="renderInnerPage(this, 'cat',2);"><img alt=""
                                                                                               src="img/subnab_cat2.png"><span
                                class="title">Вареники</span></a></li>
                <li><a href="#" id="cat_link_3" onclick="renderInnerPage(this, 'cat',3);"><img alt=""
                                                                                               src="img/subnab_cat1.png"><span
                                class="title">Пельмені</span></a></li>
                <li><a href="#" id="cat_link_5" onclick="renderInnerPage(this, 'cat',5);"><img alt=""
                                                                                               src="img/subnab_cat4.png"><span
                                class="title">Млинці</span></a></li>
                <li><a href="#" id="cat_link_6" onclick="renderInnerPage(this, 'cat',6);"><img alt=""
                                                                                               src="img/subnab_cat6.png"><span
                                class="title">Випічка</span></a></li>
                <li><a href="#" id="cat_link_0" onclick="renderInnerPage(this, 'cat',0);"><img alt=""
                                                                                               src="img/subnab_cat7.png"><span
                                class="title">Готові страви</span></a></li>
            </ul>
        </div>
    </div>

</div>

<div class="subnav subnav--hover-js closed" id="subnav2">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li><a href="#" id="cat_link_10" onclick="renderInnerPage(this, 'cat',10);"><img alt=""
                                                                                                 src="img/subnab_brand1.png"><span
                                class="title">SmaCom</span></a></li>
<!--                <li><a href="#" id="cat_link_9" onclick="renderInnerPage(this, 'cat',9);"><img alt=""-->
<!--                                                                                               src="img/subnab_brand4.png"><span-->
<!--                                class="title">Doy-pack</span></a></li>-->
                <li><a href="#" id="cat_link_8" onclick="renderInnerPage(this, 'cat',8);"><img alt=""
                                                                                               src="img/subnab_brand3.png"><span
                                class="title">Фірмові</span></a></li>
                <li><a href="#" id="cat_link_7" onclick="renderInnerPage(this, 'cat',7);"><img alt=""
                                                                                               src="img/subnab_brand2.png"><span
                                class="title">EkoSmac</span></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- HOREC PRODUCTION-->
<div class="subnav subnav--hover-js closed" id="subnav3">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li><a href="#" id="cat_link_16" onclick="renderInnerPage(this, 'cat',16);"><img alt=""
                                                                                                 src="img/new_img/subnab_first.png"><span
                                class="title">Перші страви</span></a></li>
                <li><a href="#" id="cat_link_17" onclick="renderInnerPage(this, 'cat',17);"><img alt=""
                                                                                                 src="img/new_img/subnab_second.png"><span
                                class="title">Готові страви</span></a></li>
                <li><a href="#" id="cat_link_18" onclick="renderInnerPage(this, 'cat',18);"><img alt=""
                                                                                                 src="img/subnab_cat3.png"><span
                                class="title">Котлети і страви з м'ясного фаршу</span></a></li>
                <li><a href="#" id="cat_link_19" onclick="renderInnerPage(this, 'cat',19);"><img alt=""
                                                                                                 src="img/new_img/subnab_drink.png"><span
                                class="title">Напої</span></a></li>
                <li><a href="#" id="cat_link_20" onclick="renderInnerPage(this, 'cat',20);"><img alt=""
                                                                                                 src="img/new_img/subnab_bread.png"><span
                                class="title">Хліб</span></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- EXPORT-->
<div class="subnav header-subnav closed" id="subnav4">
    <div class="">
        <div class="logo"><a href="http://genii.sumy.ua/smacom2/"><img src="img/logo.png" alt=""></a></div>
        <div class="navigat">
            <ul id="navigat">
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 23);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Заморожена продукція</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Готові страви в реторт-пакетах</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Су-від</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="#">
                            <span class="nav__text">Продукція для HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <a href="" onClick="return false;">
                        <span class="nav__text">Експорт</span>
                    </a>
                </li> -->
            </ul>
        </div>
        <div class="menuSwitcherWrapper">
            <div class="menuSwitcher"></div>
        </div>
    </div>
</div>


<!-- FROZEN PRODUCTION-->
<div class="subnav subnav--hover-js closed" id="subnav5">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                    <a href="#" id="cat_link_24" onclick="renderInnerPage(this, 'cat', 24);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Котлети і страви з м'ясного фаршу</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_25" onclick="renderInnerPage(this, 'cat', 25);">
                        <img alt="" src="img/subnab_cat2.png">
                        <span class="title">Вареники</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_26" onclick="renderInnerPage(this, 'cat', 26);">
                        <img alt="" src="img/subnab_cat1.png">
                        <span class="title">Пельмені</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_39" onclick="renderInnerPage(this, 'cat', 39);">
                        <img alt="" src="img/subnab_cat20.png">
                        <span class="title">Бульмені</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_29" onclick="renderInnerPage(this, 'cat', 29);">
                        <img alt="" src="img/subnab_cat7.png">
                        <span class="title">Готові страви</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_28" onclick="renderInnerPage(this, 'cat', 28);">
                        <img alt="" src="img/subnab_cat-dough.png">
                        <span class="title">Тісто</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="subnav subnav--hover-js closed" id="subnav6">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                    <a href="#" id="cat_link_29" onclick="renderInnerPage(this, 'cat', 29);">
                        <img alt="" src="img/new_img/subnab_first.png">
                        <span class="title">Перші і другі страви</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_30" onclick="renderInnerPage(this, 'cat', 30);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Котлети</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_31" onclick="renderInnerPage(this, 'cat', 31);">
                        <img alt="" src="img/subnab_cat_chiburekki.png">
                        <span class="title">Чебуреки</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_32" onclick="renderInnerPage(this, 'cat', 32);">
                        <img alt="" src="img/subnab_cat_сheeseburger.png">
                        <span class="title">Чізбургери</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_33" onclick="renderInnerPage(this, 'cat', 33);">
                        <img alt="" src="img/subnab_cat_belyashi.png">
                        <span class="title">Біляші</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_34" onclick="renderInnerPage(this, 'cat', 34);">
                        <img alt="" src="img/subnab_cat_syrniki.png">
                        <span class="title">Сирники</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_35" onclick="renderInnerPage(this, 'cat', 35);">
                        <img alt="" src="img/subnab_cat_chevaupeli.png">
                        <span class="title">Чевупєлі</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_36" onclick="renderInnerPage(this, 'cat', 36);">
                        <img alt="" src="img/subnab_cat6.png">
                        <span class="title">Пиріжки</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_38" onclick="renderInnerPage(this, 'cat', 38);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Млинці</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_40" onclick="renderInnerPage(this, 'cat', 40);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Чевупіца</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="header" id="header">
    <div class="">
        <div class="logo"><a href="http://genii.sumy.ua/smacom2/"><img src="img/logo.png" alt=""></a></div>
        <div class="nav">
            <ul id="nav">
                <li rel='block2'><a href="#block2">
                        <span class="nav__text">Про Компанію</span>
                    </a>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 23);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Заморожена продукція</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Готові страви в реторт-пакетах</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Су-від</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Продукція для HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <div onclick="renderInnerPage(this, 'cat', 21);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Експорт</span>
                        </a>
                    </div>
                </li> -->
                <li rel='block3'><a href="#block3">
                        <span class="nav__text">Партнерам</span>
                    </a>
                </li>
                <li rel='block4'><a href="#block4">
                        <span class="nav__text">Контакти</span>
                    </a>
                </li>
            </ul>
            <ul class="lang">
                <li><a href="/">Рос</a></li>
                <li class="current"><a href="ua.php">Укр</a></li>
                <li><a href="en.php">Eng</a></li>
            </ul>
        </div>
        <div class="menuSwitcherWrapper">
            <div class="menuSwitcher"></div>
        </div>
    </div>
</div>


<div class="wrapper home">
    <div class="">
        <div class="bannerWrap">

            <div id="owl-demo" class="owl-carousel owl-theme">

                <a href="" onclick="renderInnerPage(this, 'cat',16); ">
                    <div class="item block-0">
                        <img src="img/new_img/banner_new_uk.png" alt=""/>
                    </div>
                </a>
                <a href="" onclick="renderInnerPage(this, 'cat',1);">
                    <div class="item block-1">
                        <img src="img/banner_1_desc.png" alt=""/>
                    </div>
                </a>
                <a href="" onclick="renderInnerPage(this, 'cat',6);">
                    <div class="item block-2">
                        <img src="img/banner_2_desc.png" alt=""/>
                    </div>
                </a>
                <a href="" onclick="renderInnerPage(this, 'cat',3);">
                    <div class="item block-3">
                        <img src="img/banner_3_desc.png" alt=""/>
                    </div>
                </a>

            </div>

            <? if ($deviceType == 'computer') { ?>
                <div class="scrollDown">
                    <div class="arrowDynamic"></div>
                    <div class="arrowStatic"></div>
                    <div class="arrowBottom"></div>
                </div>
            <? } ?>
        </div>

        <div class="borderDown"></div>

        <div class="cat" id="block1">
            <? if ($deviceType == 'computer') { ?>
                <div class="animationGroup">
                    <div class="object_left"><img
                                src="img/cat_1_object_left_<? $first_left_object = getRandomNumber(1, 6, -1);
                                echo $first_left_object ?>.jpg" alt=""></div>
                    <div class="object_right"><img
                                src="img/cat_1_object_right_<? $first_right_object = getRandomNumber(1, 6, -1);
                                echo $first_right_object ?>.jpg" alt=""></div>
                </div>
            <? } ?>
            <h1><img src="img/h1_products_ua.png" alt=""></h1>
            <div class="filters">
                <a href="#subcat1" class="filter active">заморожена продукція</a><a href="#subcat2" class="filter">наші торгові марки</a>
            </div>
            <div class="subcats" id="subcat1">
                <div class="animationGroup">
                    <div class="subcat">
                        <img src="img/product_thumb_4.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 24); " class="hoverBox frozen-cat">
                            <a href="" class="more" onClick="return false;">
                                <span>котлети <br>і страви<br>з м'ясного<br>фаршу</span>
                            </a>
                        </div>
                    </div>

                    <div class="subcat">
                        <img src="img/product_thumb_2.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 25);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">вареники</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_1.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 26);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">пельмені</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_20.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 39);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">бульмені</a>
                        </div>
                    </div>
                    <div class="subcat subcat-more">
                        <img src="img/product_thumb_7.png" alt="">
                        <div class="hoverBox frozen-cat">
                            <a href="" class="more" onclick="return false;">
                        <span>
                            продукція<br>високого<br>ступеня<br>готовності
                        </span>
                            </a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 29);" class="more__pop more__pop-0">
                            <a href="" class="more__pop-btn" onclick="return false;">перші і другі страви</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 30);" class="more__pop more__pop-1">
                            <a href="" class="more__pop-btn" onclick="return false;">котлети</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 31);" class="more__pop more__pop-2">
                            <a href="" class="more__pop-btn" onclick="return false;">чебуреки</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 32);" class="more__pop more__pop-3">
                            <a href="" class="more__pop-btn" onclick="return false;">чізбургери</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 33);" class="more__pop more__pop-4">
                            <a href="" class="more__pop-btn" onclick="return false;">біляші</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 34);" class="more__pop more__pop-5">
                            <a href="" class="more__pop-btn" onclick="return false;">сирники</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 35);" class="more__pop more__pop-6">
                            <a href="" class="more__pop-btn" onclick="return false;">чевупєлі</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 36);" class="more__pop more__pop-7">
                            <a href="" class="more__pop-btn" onclick="return false;">пиріжки</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 38);" class="more__pop more__pop-8">
                            <a href="" class="more__pop-btn" onclick="return false;">млинці</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 40);" class="more__pop more__pop-9">
                            <a href="" class="more__pop-btn" onclick="return false;">чевупіца</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_dough.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 28);" class="hoverBox">
                            <a href="" class="more" onclick="return false;">тісто</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subcats" id="subcat2" style="display: none;">
                <div class="animationGroup">
                    <div class="subcat" onclick="renderInnerPage(this, 'cat',10);">
                        <img src="img/brand_thumb_1.jpg" alt="">
                        <img src="img/brand_thumb_hover_1.jpg" alt="">
                    </div>
<!--                    <div class="subcat" onclick="renderInnerPage(this, 'cat',9);">-->
<!--                        <img src="img/brand_thumb_4.jpg" alt="">-->
<!--                        <img src="img/brand_thumb_hover_4.jpg" alt="">-->
<!--                    </div>-->
                    <div class="subcat" onclick="renderInnerPage(this, 'cat',8);">
                        <img src="img/new_img/smacom_fir_uk.png" alt="">
                        <img src="img/new_img/smacom_fir_uk_hover.png" alt="">
                    </div>
                    <div class="subcat" onclick="renderInnerPage(this, 'cat',7);">
                        <img src="img/brand_thumb_2.jpg" alt="">
                        <img src="img/brand_thumb_hover_2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="borderDown2" id="scrollBg1_top"></div>
            <div class="scrollBg" id="bg1" style="background-image:url(img/cat1_scrollbg.jpg)">
                <div class="liquid-slider" id="liquid-slider1">
                    <div>
                        <div class="title">1</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">1</div>
                                <div class="text">
                                    <h3>Чому ТМ SmaCom? </h3>
                                    <p>Продукція ТМ SmaCom - це широкий асортимент європейської якості, комфортність в
                                        приготуванні й незмінний смак домашньої кухні! В рецептурі напівфабрикатів ТМ
                                        SmaCom використовуються тільки натуральні інгредієнти. Ведеться суворий контроль
                                        за виробничо-технологічним процесом та сировиною, що поступає на завод.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="title">2</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">2</div>
                                <div class="text">
                                    <h3>Абсолютна якість</h3>
                                    <p>Продукція ТМ SmaCom випускається на ультрасучасному європейському виробництві за
                                        інноваційними технологіями. Ретельний щосекундний контроль - від надходження
                                        сировини на виробництво до готового продукту дозволяє гарантувати високу якість,
                                        а сертифікати ISO підтверджують світову якість та екологічну безпеку
                                        напівфабрикатів. Суворе дотримання всіх правил, норм і стандартів дозволяють
                                        говорити про досконалість продукції. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">3</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">3</div>
                                <div class="text">
                                    <h3>Справжній смак</h3>
                                    <p>Продукція ТМ SmaCom виготовляється тільки з натуральної свіжої сировини, яка
                                        поставляється з екологічночистих регіонів і тестується висококваліфікованими
                                        професіоналами в сучасних лабораторіях на санітарно-гігієнічні та
                                        мікробіологічні показники, ГМО. Виробництво продукції здійснюється в Полтавській
                                        області, однією з найбільш безпечних, з точки зору екології регіонів України. У
                                        приготуванні напівфабрикатів використовується вивірена рецептура з точним
                                        дотриманням пропорцій. Тому продукція має по-справжньому домашній смак.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">4</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">4</div>
                                <div class="text">
                                    <h3>Інновації</h3>
                                    <p>З моменту виходу на ринок ТМ SmaCom активно впроваджує та реалізує інноваційну
                                        систему в усьому: в якості, смаку, виробництві - інновації з незмінно високим
                                        рівнем. Ми впевнені, що тільки рух вперед дозволить досягти нам нових вершин.
                                        Марка створена для тих, хто прагне до кращого.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">5</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">5</div>
                                <div class="text">
                                    <h3>Європейська якість</h3>
                                    <p>ТМ SmaCom відпочатку взяла курс на європейський рівень виробництва: починаючи від
                                        проекту заводу та обладнання провідних виробників до реалізації продукції кращих
                                        технологічних трендів Європи. Європейський рівень ТМ SmaCom підтверджений
                                        міжнародним стандартом якості ISO 9001:2001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">6</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">6</div>
                                <div class="text">
                                    <h3>Безпека</h3>
                                    <p>Безпека продукції ТМ SmaCom підтверджена міжнародним сертифікатом безпеки
                                        харчування ISO 22000:2005. На виробництві впроваджено НАССР - міжнародна система
                                        управління безпекою підприємства. Максимальна автоматизація виробничого процесу,
                                        надсучасне обладнання, суворий контроль та сертифікована лабораторія гарантують
                                        безпеку продукту.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">7</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">7</div>
                                <div class="text">
                                    <h3>Комфортність приготування</h3>
                                    <p>Сучасний динамічний ритм життя диктує свої закони і в ньому все складніше знайти
                                        час на приготуванні їжі. Продукція ТМ SmaCom є ідеальним рішенням для тих, у
                                        кого немає часу на готування, але хто любить вживати по-справжньому апетитну,
                                        смачну їжу. Приготувати напівфабрикати ТМ SmaCom просто, швидко та зручно, без
                                        зайвих тимчасових та енергетичних витрат, а смак при цьому досконалий.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="title">8</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">8</div>
                                <div class="text">
                                    <h3>Широкий асортимент</h3>
                                    <p>ТМ SmaCom пропонує Вам багату асортиментну лінійку напівфабрикатів на всі випадки
                                        життя й на всі смаки. Пельмені, вареники, млинці, котлети і страви з м'ясного
                                        фаршу, голубці, страви з рубленого м'яса - все це створено, щоб максимально
                                        задовольнити найвимогливіших гурманів. Кожен вид продукції виготовляється у
                                        відповідності з традиційною рецептурою під невсипущим контролем професіоналів.
                                        Обираючи продукцію ТМ SmaCom, Ви можете бути впевнені, що завжди знайдете собі
                                        страву до смаку. Продукти ТМ SmaCom доречні як до повсякденного, так і до
                                        святкового столу.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="borderUp2"></div>
    <div class="cat" id="block2">
        <h1><img src="img/h1_about_company_ua.png" alt=""></h1>
        <div class="middle ">
            <div class="desc">
                ТОВ «Пирятинський делікатес» у 2010 році вводить в експлуатацію завод з виробництва заморожених
                напівфабрикатів ТМ SmaCom. Багатомільйонний проект втілив у собі ідею забезпечити виробництво продуктів
                найвищої якості.
            </div>
            <div class="hidden" id="hidden1">
                <div class="twoCols" style="padding-bottom: 0;">
                    <div class="col">
                        <div class="colInner">
                            <p>Виробничі потужності Компанії знаходяться в самому серці України - мальовничому куточку
                                Пирятинського району. Наявність якісної сировини, первозданна екологія Полтавщини та
                                вигідне географічне розташування дозволяють гідно конкурувати на ринку
                                напівфабрикатів.</p>
                            <p>
                            <ul>
                                <li>Виробництво високоякісного продукту швидкого приготування.</li>
                                <li>Лідерство на ринку напівфабрикатів.</li>
                                <li>Динаміка розвитку та розширення виробництва.</li>
                                <li>Широкий асортимент продукції.</li>
                                <li>Стабільність в партнерських відносинах.</li>
                                <li>Розвиток співпраці.</li>
                            </ul>
                            </p>
                            <p>За порівняно невеликий період роботи в цій сфері підприємство зарекомендувало себе як
                                надійного партнера та успішного національного виробника високоякісних екологічно чистих
                                заморожених продуктів.</p>
                            <p>З 2011 року продукція ТОВ «Пирятинський делікатес» представлена в провідних торгових
                                мережах України.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="colInner">
                            <p>ТОВ «Пирятинський делікатес» є суспільно орієнтованою компанією, яка не допускає поставок
                                на ринок неякісної продукції. Проведена сертифікація по ISO 9001:2009, ISO 22000:2005 та
                                ISO 1402:2000 гарантує нашим споживачам відповідність якості послуг і продукції
                                міжнародним стандартам.</p>
                            <p>Суворе дотримання всіх правил, норм і стандартів дозволяють говорити про досконалість
                                продукції, відомої під торговими марками SmaСom і EkоSmaC, а також широкою асортиментною
                                лінійкою продуктів у ваговій категорії.</p>
                            <p>Ми - колектив професіоналів, здатних взяти на себе вирішення проблем з будь-яких питань у
                                виборі нашої продукції, її просування, доставки. Наші маркетингові технології та
                                інформаційні бази даних дають дистриб'юторам і споживачам повну картину по ринку
                                продукції і дозволяють партнерам впевнено дивитися на перспективи свого бізнесу.</p>
                            <div class="desc" style="text-align:left"><p>Ми прагнемо до того, щоб бути кращими у своїй
                                    сфері діяльності.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <center><a href="" class="more" onclick="showHidden(this, 'hidden1'); return false;">детальніше</a></center>
        </div>
        <? if ($deviceType == 'computer') { ?>


            <div class="animationGroup">
                <video id="video" width="100%" preload="" loop>
                    <source src="video/6.mp4">
                    <source src="video/6.ogg">
                    <source src="video/6.ogv">
                </video>
            </div>
        <? } ?>
        <? if ($deviceType != 'phone') { ?>
            <div class="es-carousel-wrapper" id="factsFeed">
                <div class="border_right"></div>
                <div class="border_left"></div>
                <div class="es-carousel">
                    <ul>
                        <li><img alt="" src="img/fact1_ua.jpg"></li>
                        <li><img alt="" src="img/fact2_ua.jpg"></li>
                        <li><img alt="" src="img/fact3_ua.jpg"></li>
                        <li><img alt="" src="img/fact4_ua.jpg"></li>
                        <li><img alt="" src="img/fact5_ua.jpg"></li>
                    </ul>
                </div>
            </div>
        <? } ?>
    </div>
    <div class="borderDown"></div>
    <div class="cat" id="block3">
        <? if ($deviceType == 'computer') { ?>
            <div class="animationGroup">
                <div class="object_left" style="top:-100px;"><img
                            src="img/cat_1_object_left_<? echo getRandomNumber(1, 6, $first_left_object); ?>.jpg" alt="">
                </div>
                <div class="object_right" style="top:-150px;"><img
                            src="img/cat_1_object_right_<? echo getRandomNumber(1, 6, $first_right_object); ?>.jpg" alt="">
                </div>
            </div>
        <? } ?>
        <h1><img src="img/h1_partners.png" alt=""></h1>
        <div class="desc">Основні переваги співпраці <br> з ТОВ «Пирятинський делікатес»:</div>
        <div class="middle">
            <div class="colsWrap">
                <div class="threeCols">
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                            <ul>
                                <li>якість наданої продукції;</li>
                                <li>надійність і стабільність Компанії;</li>
                                <li>програма лояльності для партнерів;</li>
                                <li>широкий асортимент продукції;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                            <ul>
                                <li>надання холодильного обладнання;</li>
                                <li>відповідальність у виконанні замовлення;</li>
                                <li>своєчасна поставка продукції;</li>
                                <li>надання всієї необхідної інформації щодо продукту;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                            <ul>
                                <li>можливість проведення дегустацій, тренінгів для торгової команди;</li>
                                <li>допомога при входженні у локальні мережі;</li>
                                <li>маркетингова та рекламна підтримка в просуванні бренду.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hidden" id="hidden2" style="padding-bottom: 20px;">
            <div class="middle narrow">
                <div class="desc">ТМ SmaCom завжди відкрита до співпраці на взаємовигідних умовах. Для задоволення
                    зростаючого попиту споживачів ми розширюємо асортимент напівфабрикатів нашою продукцією.
                </div>
            </div>
            <div class="middle">
                <div class="colsWrap">
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                                <p>Ультрасучасний надпотужний завод «Пирятинський делікатес», на якому виробляється
                                    продукція ТМ SmaCom завдяки технологічним інноваціям, високому професіоналізму
                                    співробітників та унікальній рецептурі, виробляє продукцію тільки найвищої якості,
                                    що відповідає всім світовим стандартам.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                                <p>Повна автоматизація виробничого процесу, новітнє сертифіковане обладнання від
                                    провідних виробників (Victoria, Rotofour, Planus, Pietroberto, Nadratovski),
                                    дотримання HACCP, ISO2001, ISO2005 гарантує високий рівень, абсолютну безпеку і
                                    екологічну чистоту продукції.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                                <p>Продукція найвищої якості, що відповідає світовим стандартам, вироблена з натуральної
                                    сировини з дотриманням всіх норм і стандартів. Інноваційна система заморожування
                                    дозволяє зберегти як всі корисні речовини продуктів, так і відмінні смакові
                                    властивості, підкреслені вивіренною рецептурою.</p></div>
                        </div>
                    </div>
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_4.png" alt=""></span>
                                <p>Колектив Компанії - команда однодумців, команда професіоналів, відданих своїй справі,
                                    які володіють усіма необхідними знаннями й успішним досвідом для створення
                                    бренду-лідера.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_5.png" alt=""></span>
                                <p>ТМ SmaCom - це один з лідерів ринку напівфабрикатів, що динамічно розвивається.
                                    Дотримуючись і створюючи провідні світові тренди, впроваджуючи інновації на кожній
                                    ділянці виробництва, Компанія створює, розвиває і формує успішний бренд натуральних
                                    напівфабрикатів, виходячи з потреб і побажань споживачів.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_6.png" alt=""></span>
                                <p>Ефективна логістика Компанії в поєднанні з надзвичайно вигідним територіальним
                                    розташуванням гарантують доставку продукції в будь-яку точку України.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="" class="more" onclick="showHidden(this, 'hidden2'); return false;">детальніше</a></center>
        <div class="borderDown2"></div>
        <div class="scrollBg" id="bg2" style="background-image:url(img/cat3_scrollbg2.jpg)">
            <div class="middle narrow">
                <div class="desc">Ми готові до співпраці з дистриб'юторами та виробництва продукції під торговою маркою
                    замовника (Private Label)
                </div>
            </div>
        </div>
    </div>
    <div class="borderUp2"></div>
    <div class="cat" id="block4">
        <h1><img src="img/h1_contacts_ua.png" alt=""></h1>
        <div class="middle">
            <div class="threeCols contactInfo">
                <div class="col roundAnimation" id="cont1">
                    <div class="text adress">ТОВ «Пирятинський делікатес» 37050, <span style="white-space:nowrap;">Україна, Полтавська обл., </span>
                        <br/> <span style="white-space:nowrap;">Пирятинський район, с. Дейманівка,</span><br/> вул.
                        Наглого Марка, 46.
                    </div>
                </div>
                <div class="col roundAnimation" id="cont2">
                    <div class="text phone"> (053-58) 3-33-17 <br/>(053-58) 3-33-09<br/>0 800 500 586</div>
                </div>
                <div class="col roundAnimation" id="cont3">
                    <div class="text email">
                        <a href="mailto: office@smacom.ua">office@smacom.ua</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <? if ($deviceType == 'computer') { ?>
            <div class="map">
                <div id="map-canvas"></div>
            </div>
        <? } ?>
        <div class="contacts">
            <div class="number">0 800 500 586</div>
            <div class="hotLine">
                <div class="title">Гаряча лінія</div>
                <div class="text">Дзвінки з номерів фіксованого зв'язку не тарифікуються, дзвінки з номерів операторів
                    мобільного зв'язку - згідно з чинними тарифами.
                </div>
            </div>
        </div>
    </div>

    <div class="borderDown" style="z-index:430"></div>
    <div class="footer">
        <div class="middle">
            <div class="robotsText"><p>ТМ SmaCom - це натуральні заморожені напівфабрикати високої якості.</p>
                <p>Назва марки “SmaCom” характеризує продукцію та місію компанії: по-перше, це високоякісні продукти з
                    відмінними смаковими властивостями, по-друге, гармонійний синтез українських традицій смаку та
                    європейського рівня виробництва.</p></div>
        </div>
        <div class="footerBottom">
            <div class="copyright">© 2003-2015 SmaCom</div>
            <div class="soc-icon">
                <ul>
                    <li>
                        <a href="https://vk.com/id319556365" class="social-icon-1">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100010187617142" class="social-icon-2">
                        </a>
                    </li>
                    <li>
                        <a href="http://ok.ru/profile/571205720858" class="social-icon-3">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerLogo"><img src="img/logo_footer.png" alt=""></div>
            <div class="entrance-for-partners-block">
                <button class="entrance-for-partners" onclick="location.href='/order'">Вхід для партнерів</button>
            </div>
            <div class="genii"><a href="http://genii.ua" target="_blank"><img src="img/genii_logo.png" alt=""></a></div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="inc/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="inc/jpreloader.js"></script>
<script type="text/javascript" src="inc/jquery.animate-enhanced.js"></script>
<script type="text/javascript" src="inc/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="inc/jquery.superslides.js"></script>
<script type="text/javascript" src="inc/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="inc/jquery.elastislide.js"></script>

<script type="text/javascript" src="inc/jquery.scrolldeck.js"></script>
<script type="text/javascript" src="inc/jquery.scrollorama.js"></script>
<script type="text/javascript" src="inc/jquery.transit.min.js"></script>

<script type="text/javascript" src="inc/common.js"></script>
<script type="text/javascript" src="inc/render.js"></script>
<script type="text/javascript" src="inc/history.js"></script>

<script type="text/javascript" src="inc/jquery.inview.js"></script>
<script type="text/javascript" src="inc/jquery.parallax-1.1.3.js"></script>

<script type="text/javascript" src="inc/jquery.liquid-slider.min.js"></script>
<script type="text/javascript" src="inc/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="inc/moment-with-langs.min.js"></script>

<script src="inc/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({

            autoPlay: 15000,
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            loop: true

        });
    });
</script>


</body>
</html>
