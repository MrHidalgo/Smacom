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
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="inc/infobox.js"></script>
        <script src="inc/googleMap.js"></script>
    <? } ?>

    <script type="text/javascript">
        var lang = 'ru';
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
        <li><a href="#" onclick="renderInnerPage(this, 'cat',1);">Котлеты и блюда из мясного фарша</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',2);">Вареники</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',3);">Пельмени</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',5);">Блинчики</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',6);">Выпечка</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',0);">Готовые блюда</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall2">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',10);">SmaCom</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',9);">Doy-pack</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',8);">Фирменные</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',7);">EkoSmac</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall3">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',16);">Первые блюда</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',17);">Готовые блюда</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',18);">Котлеты и блюда из мясного фарша</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',19);">Напитки</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',20);">Хлеб</a></li>
    </ul>
</div>
<div class="navSmall">
    <ul id="navSmall">
        <li><a href="#block2">О компании</a></li>
        <li><a href="#block23" onclick="renderInnerPage(this, 'cat', 23);">Замороженная продукция</a></li>
        <li><a href="#block22" onclick="renderInnerPage(this, 'cat', 22);">Готовые блюда в реторт-пакетах</a></li>
        <li><a href="#block37" onclick="renderInnerPage(this, 'cat', 37);">Су-вид</a></li>
        <li><a href="#block15" onclick="renderInnerPage(this, 'cat', 15);">Продукция для HoReCa</a></li>
        <!-- <li><a href="#block21" onclick="renderInnerPage(this, 'cat', 21);">Экспорт</a></li> -->
    </ul>
    <ul class="lang_small">
        <li class="current"><a href="/">Рус.</a></li>
        <li><a href="ua.php">Укр.</a></li>
        <li><a href="en.php">Eng.</a></li>
    </ul>
</div>


<div class="header subnavHeader">
    <a href="#" onClick="pageHistory.back(); return false;">вернуться назад</a>
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
        <span class="back__text">главная</span>
    </span>
</a>


<div class="subnav subnav--hover-js closed" id="subnav1">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                    <a href="#" id="cat_link_1" onclick="renderInnerPage(this, 'cat',1);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Котлеты и блюда из мясного фарша</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_2" onclick="renderInnerPage(this, 'cat',2);">
                        <img alt="" src="img/subnab_cat2.png">
                        <span class="title">Вареники</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_3" onclick="renderInnerPage(this, 'cat',3);">
                        <img alt="" src="img/subnab_cat1.png">
                        <span class="title">Пельмени</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_5" onclick="renderInnerPage(this, 'cat',5);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Блинчики</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_6" onclick="renderInnerPage(this, 'cat',6);">
                        <img alt="" src="img/subnab_cat6.png">
                        <span class="title">Выпечка</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_0" onclick="renderInnerPage(this, 'cat',0);">
                        <img alt="" src="img/subnab_cat7.png">
                        <span class="title">Готовые блюда</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="subnav subnav--hover-js closed" id="subnav2">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                    <a href="#" id="cat_link_10" onclick="renderInnerPage(this, 'cat',10);">
                        <img alt="" src="img/subnab_brand1.png">
                        <span class="title">SmaCom</span>
                    </a>
                </li>
<!--                <li>-->
<!--                    <a href="#" id="cat_link_9" onclick="renderInnerPage(this, 'cat',9);">-->
<!--                        <img alt="" src="img/subnab_brand4.png">-->
<!--                        <span class="title">Doy-pack</span>-->
<!--                    </a>-->
<!--                </li>-->
                <li>
                    <a href="#" id="cat_link_8" onclick="renderInnerPage(this, 'cat',8);">
                        <img alt="" src="img/subnab_brand3.png">
                        <span class="title">Фирменные</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_7" onclick="renderInnerPage(this, 'cat',7);">
                        <img alt="" src="img/subnab_brand2.png">
                        <span class="title">EkoSmac</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- HOREC PRODUCTION-->
<div class="subnav subnav--hover-js closed" id="subnav3">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li>
                    <a href="#" id="cat_link_16" onclick="renderInnerPage(this, 'cat',16);">
                        <img alt="" src="img/new_img/subnab_first.png">
                        <span class="title">Первые блюда</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_17" onclick="renderInnerPage(this, 'cat',17);">
                        <img alt="" src="img/new_img/subnab_second.png">
                        <span class="title">Готовые блюда</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_18" onclick="renderInnerPage(this, 'cat',18);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Котлеты и блюда из мясного фарша</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_19" onclick="renderInnerPage(this, 'cat',19);">
                        <img alt="" src="img/new_img/subnab_drink.png">
                        <span class="title">Напитки</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_20" onclick="renderInnerPage(this, 'cat',20);">
                        <img alt="" src="img/new_img/subnab_bread.png">
                        <span class="title">Хлеб</span>
                    </a>
                </li>
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
                            <span class="nav__text">Замороженная продукция</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Готовые блюда в реторт-пакетах</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Су-вид</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="">
                            <span class="nav__text">Продукция для HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <div onclick="renderInnerPage(this, 'cat', 21);">
                        <a href="">
                            <span class="nav__text">Экспорт</span>
                        </a>
                    </div>
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
                        <span class="title">Котлеты и блюда из мясного фарша</span>
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
                        <span class="title">Пельмени</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_39" onclick="renderInnerPage(this, 'cat', 39);">
                        <img alt="" src="img/subnab_cat20.png">
                        <span class="title">Бульмени</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_29" onclick="renderInnerPage(this, 'cat', 29);">
                        <img alt="" src="img/subnab_cat7.png">
                        <span class="title">Готовые блюда</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_28" onclick="renderInnerPage(this, 'cat', 28);">
                        <img alt="" src="img/subnab_cat-dough.png">
                        <span class="title">Тесто</span>
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
                        <span class="title">Первые и вторые блюда</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_30" onclick="renderInnerPage(this, 'cat', 30);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Котлеты</span>
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
                        <span class="title">Чизбургеры</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_33" onclick="renderInnerPage(this, 'cat', 33);">
                        <img alt="" src="img/subnab_cat_belyashi.png">
                        <span class="title">Беляши</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_34" onclick="renderInnerPage(this, 'cat', 34);">
                        <img alt="" src="img/subnab_cat_syrniki.png">
                        <span class="title">Сырники</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_35" onclick="renderInnerPage(this, 'cat', 35);">
                        <img alt="" src="img/subnab_cat_chevaupeli.png">
                        <span class="title">Чевупели</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_36" onclick="renderInnerPage(this, 'cat', 36);">
                        <img alt="" src="img/subnab_cat6.png">
                        <span class="title">Пирожки</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_38" onclick="renderInnerPage(this, 'cat', 38);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Блинчики</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_40" onclick="renderInnerPage(this, 'cat', 40);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Чевупицца</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="header" id="header">
    <div class="">
        <div class="logo">
            <a href="http://genii.sumy.ua/smacom2/">
                <img src="img/logo.png" alt="">
            </a>
        </div>

        <div class="nav">
            <ul id="nav">
                <li rel='block2' class="nav__item">
                    <a href="#block2">
                        <span class="nav__text">О компании</span>
                    </a>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 23);">
                        <a href=""  onClick="return false;">
                            <span class="nav__text">Замороженная продукция</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Готовые блюда в реторт-пакетах</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Су-вид</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Продукция для HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <div onclick="renderInnerPage(this, 'cat', 21);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Экспорт</span>
                        </a>
                    </div>
                </li> -->
                <li rel='block3' class="nav__item">
                    <a href="#block3">
                        <span class="nav__text">Партнерам</span>
                    </a>
                </li>
                <li rel='block4' class="nav__item">
                    <a href="#block4">
                        <span class="nav__text">Контакты</span>
                    </a>
                </li>
            </ul>
            <ul class="lang">
                <li class="current"><a href="#">Рус</a></li>
                <li><a href="ua.php">Укр</a></li>
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
        <div class="bannerWrap" style="display: block !important;">

            <div id="owl-demo" class="owl-carousel owl-theme">

                <a href="" onclick="renderInnerPage(this, 'cat',16); ">
                    <div class="item block-0">
                        <img src="img/new_img/banner_new_ru.png" alt=""/>
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
                    <div class="object_left">
                        <img src="img/cat_1_object_left_<? $first_left_object = getRandomNumber(1, 6, -1);
                        echo $first_left_object ?>.jpg" alt="">
                    </div>
                    <div class="object_right">
                        <img src="img/cat_1_object_right_<? $first_right_object = getRandomNumber(1, 6, -1);
                        echo $first_right_object ?>.jpg" alt="">
                    </div>
                </div>
            <? } ?>
            <h1><img src="img/h1_products.png" alt=""></h1>
            <div class="filters">
                <a href="#subcat1" class="filter active">замороженная продукция</a><a href="#subcat2" class="filter">наши торговые марки</a>
            </div>
            <div class="subcats" id="subcat1">
                <div class="animationGroup">
                    <div class="subcat">
                        <img src="img/product_thumb_4.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 24); " class="hoverBox frozen-cat">
                            <a href="" class="more" onClick="return false;">
                                <span>котлеты <br>и блюда <br>из мясного <br>фарша</span>
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
                            <a href="" class="more" onClick="return false;">пельмени</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_20.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 39);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">бульмени</a>
                        </div>
                    </div>
                    <div class="subcat subcat-more">
                        <img src="img/product_thumb_7.png" alt="">
                        <div class="hoverBox frozen-cat">
                            <a href="" class="more" onclick="return false;">
                        <span>
                            продукция<br>высокой<br>степени<br>готовности
                        </span>
                            </a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 29);" class="more__pop more__pop-0">
                            <a href="" class="more__pop-btn" onclick="return false;">первые и вторые блюда</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 30);" class="more__pop more__pop-1">
                            <a href="" class="more__pop-btn" onclick="return false;">котлеты</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 31);" class="more__pop more__pop-2">
                            <a href="" class="more__pop-btn" onclick="return false;">чебуреки</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 32);" class="more__pop more__pop-3">
                            <a href="" class="more__pop-btn" onclick="return false;">чизбургеры</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 33);" class="more__pop more__pop-4">
                            <a href="" class="more__pop-btn" onclick="return false;">беляши</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 34);" class="more__pop more__pop-5">
                            <a href="" class="more__pop-btn" onclick="return false;">сырники</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 35);" class="more__pop more__pop-6">
                            <a href="" class="more__pop-btn" onclick="return false;">чевупели</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 36);" class="more__pop more__pop-7">
                            <a href="" class="more__pop-btn" onclick="return false;">пирожки</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 38);" class="more__pop more__pop-8">
                            <a href="" class="more__pop-btn" onclick="return false;">блинчики</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 40);" class="more__pop more__pop-9">
                            <a href="" class="more__pop-btn" onclick="return false;">чевупицца</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="../../img/product_thumb_dough.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 28);" class="hoverBox">
                            <a href="" class="more" onclick="return false;">тесто</a>
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
                        <img src="img/new_img/smacom_fir_rus.png" alt="">
                        <img src="img/new_img/smacom_fir_rus_hover.png" alt="">
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
                                    <h3>Почему ТМ SmaCom?</h3>
                                    <p>Продукция ТМ SmaCom – это широкий ассортимент европейского качества, комфортность
                                        в приготовлении и неизменный вкус домашней кухни! В рецептуре полуфабрикатов ТМ
                                        SmaCom используются только натуральные ингредиенты. Ведется строгий контроль за
                                        поступающим на завод сырьём и производственно-технологическим процессом. </p>
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
                                    <h3>Абсолютное качество</h3>
                                    <p>Продукция ТМ SmaCom выпускается на ультрасовременном европейском производстве по
                                        инновационным технологиям. Тщательный ежесекундный контроль – от поступления
                                        сырья на производство до готовой продукции – позволяет гарантировать высочайшее
                                        качество продукции, а сертификаты ISO подтверждают мировое качество и
                                        экологическую безопасность продукции. Строгое соблюдение всех правил, норм и
                                        стандартов позволяют говорить о совершенстве выпускаемой продукции. </p>
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
                                    <h3>Подлинный вкус</h3>
                                    <p>Продукция ТМ SmaCom производится только из натурального свежего сырья, которое
                                        поставляется из экологически чистых регионов и тестируется
                                        высококвалифицированными профессионалами в современных лабораториях на
                                        санитарно-гигиенические и микробиологические показатели, на ГМО. Производство
                                        продукции осуществляется в Полтавской области, одной из наиболее безопасных, с
                                        точки зрения экологии, регионов Украины. В приготовлении полуфабрикатов
                                        используются выверенная рецептура с точным соблюдением пропорций. Поэтому
                                        продукция имеет по-настоящему домашний вкус. </p>
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
                                    <h3>Инновации</h3>
                                    <p>С момента выхода на рынок ТМ SmaCom активно внедряет и реализует инновационную
                                        систему во всём: в качестве, вкусе, производстве – инновации с неизменно высоким
                                        уровнем. Мы уверены, что только движение вперёд позволит достичь нам новых
                                        вершин. Марка создана для тех, кто стремится к лучшему.</p>
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
                                    <h3>Европейское качество</h3>
                                    <p> ТМ SmaCom изначально взяла курс на европейский уровень производства: начиная, от
                                        проекта завода и оборудования ведущих производителей до реализации в продукции
                                        лучших технологических трендов Европы. Европейский уровень ТМ SmaCom подтвержден
                                        международным стандартом качества ISO 9001:2001.</p>
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
                                    <h3>Безопасность</h3>
                                    <p> Безопасность продукции ТМ SmaCom подтверждена международным сертификатом
                                        безопасности питания ISO 22000:2005. На производстве внедрена НАССР –
                                        международная система управления безопасностью предприятия. Максимальная
                                        автоматизация производственного процесса, ультрасовременное оборудование,
                                        строгий контроль и сертифицированная лаборатория гарантируют безопасность
                                        продукта.</p>
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
                                    <h3>Комфортность приготовления</h3>
                                    <p>Современный динамичный ритм жизни диктует свои законы, и в нём всё сложнее найти
                                        время на приготовлении пищи. Продукция ТМ SmaCom служит идеальным решением
                                        задачи для тех, у кого нет времени на готовку, но кто любит кушать по-настоящему
                                        аппетитную, вкусную еду. Приготовить полуфабрикаты ТМ SmaCom просто, быстро и
                                        удобно, без излишних временных и энергетических затрат, а вкус при этом
                                        совершенен.</p>
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
                                    <h3>Широкий ассортимент</h3>
                                    <p> ТМ SmaCom предлагает Вам богатую ассортиментную линейку полуфабрикатов на все
                                        случаи жизни и на все вкусы. Пельмени, вареники, блинчики, котлеты и блюда из
                                        мясного фарша, голубцы, продукты из рубленого мяса – всё это создано, чтобы
                                        максимально удовлетворить запросы самых взыскательных гурманов. Каждый вид
                                        продукции производится в соответствии с традиционной рецептурой под неусыпным
                                        контролем профессионалов. Выбирая продукцию ТМ SmaCom, Вы можете быть уверены,
                                        что всегда найдёте блюдо себе по вкусу. Продукты ТМ SmaCom уместны как к
                                        повседневному, так и к праздничному столу.</p>
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
        <h1><img src="img/h1_about_company.png" alt=""></h1>
        <div class="middle ">
            <div class="desc">
                ООО «Пирятинский деликатес» в 2010 году вводит в эксплуатацию завод по производству замороженных
                полуфабрикатов ТМ SmaCom. Многомиллионный проект воплотил в себе идею обеспечить производство продуктов
                наивысшего качества.
            </div>
            <div class="hidden" id="hidden1">
                <div class="twoCols" style="padding-bottom: 0;">
                    <div class="col">
                        <div class="colInner">
                            <p> Производственные мощности Компании находятся в самом сердце Украины – живописном уголке
                                Пирятинского района. Наличие качественного сырья, первозданная экология Полтавщины и
                                выгодное географическое расположение позволяют достойно конкурировать на рынке
                                полуфабрикатов.</p>
                            <p>
                            <ul>
                                <li>Производство высококачественного продукта быстрого приготовления.</li>
                                <li>Лидерство на рынке полуфабрикатов .</li>
                                <li>Динамика развития и расширение производства.</li>
                                <li>Широкий ассортимент продукции.</li>
                                <li>Стабильность в партнерских отношениях.</li>
                                <li>Развитие сотрудничества.</li>
                            </ul>
                            </p>
                            <p>Завод включает 7 производственных цехов: 2 цеха по производству полуфабрикатов, цех
                                формовки хлебобулочных изделий, мясной, овощной, горячий цеха, цех упаковки продукции.
                                Территория завода постоянно расширяется, дабы обеспечить место для новых
                                производственных линий и цехов в соответствии с развитием ассортиментной линейки
                                продукции.</p>
                            <p>За сравнительно небольшой период работы в этой сфере предприятие зарекомендовало себя как
                                надежного партнера и успешного национального производителя высококачественных
                                экологически чистых замороженных продуктов. </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="colInner">
                            <p>С 2011 года продукция ООО «Пирятинский деликатес» представлена в ведущих торговых сетях
                                Украины.</p>
                            <p>ООО «Пирятинский деликатес» является общественно ориентированной компанией, которая не
                                допускает поставок на рынок некачественной продукции. Проведенная сертификация по ISO
                                9001:2009, ISO 22000:2005 и ISO 1402:2000 гарантирует нашим потребителям соответствие
                                качества услуг и поставляемой продукции международным стандартам. </p>
                            <p>Строгое соблюдение всех правил, норм и стандартов позволяют говорить о совершенстве
                                выпускаемой продукции, известной под торговыми марками SmaСom и EkоSmaC, а также широкой
                                ассортиментной линейкой продуктов весовой категории.</p>
                            <p>Мы коллектив профессионалов, способных взять на себя решение проблем по любым вопросам в
                                выборе нашей продукции, ее продвижения, доставке. Наши маркетинговые технологии и
                                информационные базы данных дают дистрибьюторам и потребителям полную картину по рынку
                                продукции и позволяют партнерам уверенно смотреть на перспективы своего бизнеса.</p>
                            <div class="desc" style="text-align:left"><p>Мы стремимся к тому, чтобы быть лучшими в своей
                                    сфере деятельности.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <center><a href="" class="more" onclick="showHidden(this, 'hidden1'); return false;">подробнее</a></center>
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
                        <li><img alt="" src="img/fact1.jpg"></li>
                        <li><img alt="" src="img/fact2.jpg"></li>
                        <li><img alt="" src="img/fact3.jpg"></li>
                        <li><img alt="" src="img/fact4.jpg"></li>
                        <li><img alt="" src="img/fact5.jpg"></li>
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
        <div class="desc">Основные преимущества в сотрудничестве<br/> с ООО «Пирятинский деликатес»:</div>
        <div class="middle">
            <div class="colsWrap">
                <div class="threeCols">
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                            <ul>
                                <li>качество предоставляемой продукции;</li>
                                <li>надежность и стабильность Компании;</li>
                                <li>программа лояльности для партнеров;</li>
                                <li>широкий ассортимент продукции;</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                            <ul>
                                <li>предоставление холодильного оборудования;</li>
                                <li>ответственность в выполнении заказа;</li>
                                <li>своевременная поставка продукции;</li>
                                <li>предоставление всей необходимой информации о продукте;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                            <ul>
                                <li>возможность проведения дегустаций по ассортименту, тренингов для торговой команды;
                                </li>
                                <li>помощь при входе в локальные сети;</li>
                                <li>маркетинговая и рекламная поддержка в продвижении бренда.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hidden" id="hidden2" style="padding-bottom: 20px;">
            <div class="middle narrow">
                <div class="desc">ТМ SmaCom всегда открыта к партнёрству на взаимовыгодных условиях. Для удовлетворения
                    растущего спроса потребителей мы расширяем ассортимент полуфабрикатов нашей продукцией.
                </div>
            </div>
            <div class="middle">
                <div class="colsWrap">
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                                <p>Ультрасовременный сверхмощный завод «Пирятинский деликатес», на котором производится
                                    продукция ТМ SmaCom, благодаря технологическим инновациям, высочайшему
                                    профессионализму сотрудников и уникальной рецептуре производит продукцию только
                                    высочайшего качества, которая отвечает всем мировым стандартам.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                                <p>Полная автоматизация производственного процесса, новейшее сертифицированное
                                    оборудование от ведущих производителей (Victoria, Rotofour, Planus, Pietroberto,
                                    Nadratovski), соблюдение HACCP, ISO2001, ISO2005 гарантирует высокий уровень,
                                    абсолютную безопасность и экологическую чистоту продукции.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                                <p>Продукция наивысшего качества, отвечающая мировым стандартам, произведённая из
                                    натурального сырья с соблюдением всех норм и стандартов. Инновационная система
                                    заморозки позволяет сохранить как все полезные вещества продуктов, так и отличные
                                    вкусовые свойства, подчёркнутые выверенной рецептурой.</p></div>
                        </div>
                    </div>
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_4.png" alt=""></span>
                                <p>Коллектив компании - команда единомышленников, команда профессионалов, преданных
                                    своему делу и обладающих всеми необходимыми знаниями и успешным опытом для создания
                                    бренда-лидера.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_5.png" alt=""></span>
                                <p>ТМ SmaCom – это динамично развивающийся игрок рынка полуфабрикатов. Следуя и создавая
                                    ведущие мировые тренды, внедряя инновации на каждом участке производства, компания
                                    создаёт, развивает и формирует успешный бренд натуральных полуфабрикатов, исходя из
                                    потребностей и пожеланий потребителей.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_6.png" alt=""></span>
                                <p>Эффективная логистика компании в сочетании с крайне выгодным территориальным
                                    расположением гарантируют доставку продукции в любую точку Украины.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="" class="more" onclick="showHidden(this, 'hidden2'); return false;">подробнее</a></center>
        <div class="borderDown2"></div>
        <div class="scrollBg" id="bg2" style="background-image:url(img/cat3_scrollbg2.jpg)">
            <div class="middle narrow">
                <div class="desc">Мы готовы к сотрудничеству с дистрибуторами и производству продукции под торговой
                    маркой заказчика (Private Label).
                </div>
            </div>
        </div>
    </div>
    <div class="borderUp2"></div>
    <div class="cat" id="block4">
        <h1><img src="img/h1_contacts.png" alt=""></h1>
        <div class="middle">
            <div class="threeCols contactInfo">
                <div class="col roundAnimation" id="cont1">
                    <div class="text adress">Украина, 37050, <span style="white-space:nowrap;">Полтавская обл.,</span>
                        <br/><span style="white-space:nowrap;">Пирятинский район,</span> <span
                            style="white-space:nowrap;">с. Деймановка,</span><br/> ул. Наглого Марка, 46.
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
                <div class="title">горячая линия</div>
                <div class="text">Звонки с номеров фиксированной связи не тарифицируются, звонки с
                    номеров операторов мобильной связи — согласно действующим тарифам.
                </div>
            </div>
        </div>
    </div>

    <div class="borderDown" style="z-index:430"></div>
    <div class="footer">
        <div class="middle">
            <div class="robotsText"><p>ТМ SmaCom – это натуральные замороженные полуфабрикаты высокого качества.</p>
                <p>Название марки “SmaCom” характеризует продукцию и миссию компании: во-первых, это высококачественные
                    продукты с отличными вкусовыми свойствами, во-вторых, гармоничный синтез украинских традиций вкуса и
                    европейского уровня производства.</p></div>
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
                <button class="entrance-for-partners" onclick="location.href='/order'">Вход для партнеров</button>
            </div>
            <div class="genii"><a href="http://genii.ua" target="_blank"><img src="img/genii_logo.png" alt=""></a></div>
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
