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
        var lang = 'en';
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
        <li><a href="#" onclick="renderInnerPage(this, 'cat',1);">Cutlets and dishes from minced meat</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',2);">Dumplings</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',3);">Meat dumplings</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',5);">Pancakes</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',6);">Pastry</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',0);">Frozen pre-cooked meals</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall2">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',10);">SmaCom</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',9);">Doy-pack</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',8);">Brand</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',7);">EkoSmac</a></li>
    </ul>
</div>
<div class="navSmall subNavSmall" id="subNavSmall3">
    <ul id="subNavSmall">
        <li><a href="#" onclick="renderInnerPage(this, 'cat',16);">First Course</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',17);">Frozen pre-cooked meals</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',18);">Cutlets and dishes from minced meat</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',19);">Drinks</a></li>
        <li><a href="#" onclick="renderInnerPage(this, 'cat',20);">Bread</a></li>
    </ul>
</div>


<div class="navSmall">
    <ul id="navSmall">
        <li><a href="#block2">About the company</a></li>
        <li><a href="#block23" onclick="renderInnerPage(this, 'cat', 23);">Frozen products</a></li>
        <li><a href="#block22" onclick="renderInnerPage(this, 'cat', 22);">Ready-made meals in retort-packages</a></li>
        <li><a href="#block37" onclick="renderInnerPage(this, 'cat', 37);">Sous-vide</a></li>
        <li><a href="#block15" onclick="renderInnerPage(this, 'cat', 15);">Products for HoReCa</a></li>
        <!-- <li><a href="#block21" onclick="renderInnerPage(this, 'cat', 21);">Export</a></li> -->
    </ul>
    <ul class="lang_small">
        <li><a href="/">Rus</a></li>
        <li><a href="ua.php">Ukr</a></li>
        <li class="current"><a href="en.php">Eng</a></li>
    </ul>
</div>


<div class="header subnavHeader">
    <a href="#" onClick="pageHistory.back('home'); return false;">back to home</a>
    <div class="menuSwitcherWrapper">
        <div class="menuSwitcher"></div>
    </div>
</div>
<a onClick="pageHistory.back(); return false;" class="back">
        <span class="back__wrap">
        <i class="back__icon"></i>
        <span class="back__text">back</span>
    </span>
</a>
<a onClick="pageHistory.back('home'); return false;" class="back back_main">
    <span class="back__wrap">
        <i class="back__icon"></i>
        <span class="back__text">home</span>
    </span>
</a>

<div class="subnav subnav--hover-js closed" id="subnav1">
    <div class="es-carousel-wrapper">
        <div class="es-carousel">
            <ul>
                <li><a href="#" id="cat_link_1" onclick="renderInnerPage(this, 'cat',1);"><img alt=""
                                                                                               src="img/subnab_cat3.png"><span
                                class="title">Cutlets and dishes from minced meat</span></a></li>
                <li><a href="#" id="cat_link_2" onclick="renderInnerPage(this, 'cat',2);"><img alt=""
                                                                                               src="img/subnab_cat2.png"><span
                                class="title">Dumplings</span></a></li>
                <li><a href="#" id="cat_link_3" onclick="renderInnerPage(this, 'cat',3);"><img alt=""
                                                                                               src="img/subnab_cat1.png"><span
                                class="title">Meat dumplings</span></a></li>
                <li><a href="#" id="cat_link_5" onclick="renderInnerPage(this, 'cat',5);"><img alt=""
                                                                                               src="img/subnab_cat4.png"><span
                                class="title">Pancakes</span></a></li>
                <li><a href="#" id="cat_link_6" onclick="renderInnerPage(this, 'cat',6);"><img alt=""
                                                                                               src="img/subnab_cat6.png"><span
                                class="title">Pastry</span></a></li>
                <li><a href="#" id="cat_link_0" onclick="renderInnerPage(this, 'cat',0);"><img alt=""
                                                                                               src="img/subnab_cat7.png"><span
                                class="title">Frozen pre-cooked meals</span></a></li>
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
                <li><a href="#" id="cat_link_9" onclick="renderInnerPage(this, 'cat',9);"><img alt=""
                                                                                               src="img/subnab_brand4.png"><span
                                class="title">Doy-pack</span></a></li>
                <li><a href="#" id="cat_link_8" onclick="renderInnerPage(this, 'cat',8);"><img alt=""
                                                                                               src="img/subnab_brand3.png"><span
                                class="title">Brand</span></a></li>
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
                                class="title">First Course</span></a></li>
                <li><a href="#" id="cat_link_17" onclick="renderInnerPage(this, 'cat',17);"><img alt=""
                                                                                                 src="img/new_img/subnab_second.png"><span
                                class="title">Frozen pre-cooked meals</span></a></li>
                <li><a href="#" id="cat_link_18" onclick="renderInnerPage(this, 'cat',18);"><img alt=""
                                                                                                 src="img/subnab_cat3.png"><span
                                class="title">Cutlets and dishes from minced meat</span></a></li>
                <li><a href="#" id="cat_link_19" onclick="renderInnerPage(this, 'cat',19);"><img alt=""
                                                                                                 src="img/new_img/subnab_drink.png"><span
                                class="title">Drinks</span></a></li>
                <li><a href="#" id="cat_link_20" onclick="renderInnerPage(this, 'cat',20);"><img alt=""
                                                                                                 src="img/new_img/subnab_bread.png"><span
                                class="title">Bread</span></a></li>
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
                            <span class="nav__text">Frozen products</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Ready meals in retort-packages</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Sous-vide</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="#">
                            <span class="nav__text">Products for HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <div onclick="renderInnerPage(this, 'cat', 21);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Export</span>
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
                        <span class="title">Cutlets and dishes from minced meat</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_25" onclick="renderInnerPage(this, 'cat', 25);">
                        <img alt="" src="img/subnab_cat2.png">
                        <span class="title">Dumplings</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_26" onclick="renderInnerPage(this, 'cat', 26);">
                        <img alt="" src="img/subnab_cat1.png">
                        <span class="title">Meat dumplings</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_27" onclick="renderInnerPage(this, 'cat', 27);">
                        <img alt="" src="img/subnab_cat4.png">
                        <span class="title">Pancakes</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_29" onclick="renderInnerPage(this, 'cat', 29);">
                        <img alt="" src="img/subnab_cat7.png">
                        <span class="title">Frozen pre-cooked meals</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_28" onclick="renderInnerPage(this, 'cat', 28);">
                        <img alt="" src="img/subnab_cat-dough.png">
                        <span class="title">Dough</span>
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
                        <span class="title">First and second courses</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_30" onclick="renderInnerPage(this, 'cat', 30);">
                        <img alt="" src="img/subnab_cat3.png">
                        <span class="title">Cutlets</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_31" onclick="renderInnerPage(this, 'cat', 31);">
                        <img alt="" src="img/subnab_cat_chiburekki.png">
                        <span class="title">Chebureki</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_32" onclick="renderInnerPage(this, 'cat', 32);">
                        <img alt="" src="img/subnab_cat_сheeseburger.png">
                        <span class="title">Cheeseburger</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_33" onclick="renderInnerPage(this, 'cat', 33);">
                        <img alt="" src="img/subnab_cat_belyashi.png">
                        <span class="title">Belyashi</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_34" onclick="renderInnerPage(this, 'cat', 34);">
                        <img alt="" src="img/subnab_cat_syrniki.png">
                        <span class="title">Syrniki</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_35" onclick="renderInnerPage(this, 'cat', 35);">
                        <img alt="" src="img/subnab_cat_chevaupeli.png">
                        <span class="title">Chevupeli</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="cat_link_36" onclick="renderInnerPage(this, 'cat', 36);">
                        <img alt="" src="img/subnab_cat6.png">
                        <span class="title">Patties</span>
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
                        <span class="nav__text">About the company</span>
                    </a>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 23);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Frozen products</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 22);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Ready meals in retort-packages</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 37);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Sous-vide</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div onclick="renderInnerPage(this, 'cat', 15);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Products for HoReCa</span>
                        </a>
                    </div>
                </li>
                <!-- <li>
                    <div onclick="renderInnerPage(this, 'cat', 21);">
                        <a href="" onClick="return false;">
                            <span class="nav__text">Export</span>
                        </a>
                    </div>
                </li> -->
                <li rel='block3'><a href="#block3">
                        <span class="nav__text">Partnership</span>
                    </a>
                </li>
                <li rel='block4'><a href="#block4">
                        <span class="nav__text">Contacts</span>
                    </a>
                </li>
            </ul>
            <ul class="lang">
                <li><a href="/">Rus</a></li>
                <li><a href="ua.php">Urk</a></li>
                <li class="current"><a href="#">Eng</a></li>
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
                        <img src="img/new_img/banner_new_en.png" alt=""/>
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
            <h1><img src="img/h1_products_en.png" alt=""></h1>
            <div class="filters">
                <a href="#subcat1" class="filter active">frozen products</a><a href="#subcat2" class="filter">our trademarks</a>
            </div>
            <div class="subcats" id="subcat1">
                <div class="animationGroup">
                    <div class="subcat">
                        <img src="../../img/product_thumb_4.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 24); " class="hoverBox frozen-cat">
                            <a href="" class="more" onClick="return false;">
                                <span>cutlets<br>and dishes<br>from minced<br>meat</span>
                            </a>
                        </div>
                    </div>

                    <div class="subcat">
                        <img src="img/product_thumb_2.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 25);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">dumplings</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_1.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 26);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">meat dumplings</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_3.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 27);" class="hoverBox">
                            <a href="" class="more" onClick="return false;">pancakes</a>
                        </div>
                    </div>
                    <div class="subcat subcat-more">
                        <img src="img/product_thumb_7.png" alt="">
                        <div class="hoverBox frozen-cat">
                            <a href="" class="more" onclick="return false;">
                        <span>
                            high<br>availability<br>products<br>
                        </span>
                            </a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 29);" class="more__pop more__pop-0">
                            <a href="" class="more__pop-btn" onclick="return false;">first and second courses</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 30);" class="more__pop more__pop-1">
                            <a href="" class="more__pop-btn" onclick="return false;">cutlets</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 31);" class="more__pop more__pop-2">
                            <a href="" class="more__pop-btn" onclick="return false;">chebureki</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 32);" class="more__pop more__pop-3">
                            <a href="" class="more__pop-btn" onclick="return false;">cheeseburger</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 33);" class="more__pop more__pop-4">
                            <a href="" class="more__pop-btn" onclick="return false;">belyashi</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 34);" class="more__pop more__pop-5">
                            <a href="" class="more__pop-btn" onclick="return false;">syrniki</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 35);" class="more__pop more__pop-6">
                            <a href="" class="more__pop-btn" onclick="return false;">chevupeli</a>
                        </div>
                        <div onclick="renderInnerPage(this, 'cat', 36);" class="more__pop more__pop-7">
                            <a href="" class="more__pop-btn" onclick="return false;">patties</a>
                        </div>
                    </div>
                    <div class="subcat">
                        <img src="img/product_thumb_dough.png" alt="">
                        <div onclick="renderInnerPage(this, 'cat', 28);" class="hoverBox">
                            <a href="" class="more" onclick="return false;">dough</a>
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
                        <img src="img/new_img/smacom_fir_en.png" alt="">
                        <img src="img/new_img/smacom_fir_en_hover.png" alt="">
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
                                    <h3>Why SmaCom™?</h3>
                                    <p>SmaCom™ products are a wide range of European quality, convenience of cooking and
                                        unchangeable taste of home cooking! In the SmaCom™ recipes of semis, only
                                        natural ingredients are used. Strict control is conducted over the incoming
                                        ingredients to the factory and production process.</p></div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="title">2</div>
                        <div class="middle narrow">
                            <div class="numbered_block">
                                <div class="numb">2</div>
                                <div class="text">
                                    <h3>Absolute quality</h3>
                                    <p>SmaCom™ products are produced at the ultramodern European production using
                                        innovative technologies. Careful incessant control from the supply of the
                                        ingredients to the production of ready products helps to ensure the highest
                                        quality of the products. ISO certificates confirm the world class quality and
                                        that the products are environmentally friendly. Strict control of all rules,
                                        regulations and standards allows to speak about the perfect products.</p>
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
                                    <h3>Authentic taste</h3>
                                    <p>SmaCom™ products are made only from natural fresh ingredients that are supplied
                                        from ecologically clean regions and tested by highly qualified professionals in
                                        modern laboratories for sanitation and microbiological indicators and for the
                                        GMOs. Production is carried out in Poltava region, one of the safest regions of
                                        Ukraine from the ecological point of view. Verified recipes with exact
                                        proportions are used in the preparation of semi-finished products. Therefore,
                                        products have a truly home-cooked taste. </p>
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
                                    <h3>Innovations</h3>
                                    <p>Since entering the market, SmaCom™ is actively implementing and embodying an
                                        innovative system in everything: quality, taste, production. Innovations with a
                                        consistently high level. We believe that only headway will allow us to reach the
                                        new heights. Our brand is created for those who strive for the best.</p>
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
                                    <h3>European quality</h3>
                                    <p> SmaCom™ originally headed for European level of production, starting from the
                                        design of the plant and equipment of leading manufacturers up to the
                                        implementation of the best products in the technological trends of Europe.
                                        European level of SmaCom™ is confirmed by the international quality standard ISO
                                        9001:2001.</p>
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
                                    <h3>Safety</h3>
                                    <p> Safety of the SmaCom™ products is confirmed by the international food safety
                                        certificate ISO 22000:2005. HACCP (international safety management system of the
                                        enterprise) is implemented at the manufacturing. Maximum automation of the
                                        production process, ultra-modern equipment, strict control and certified
                                        laboratories ensure the safety of the product.</p>
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
                                    <h3>Comfort of cooking</h3>
                                    <p>Modern dynamic rhythm of life dictates its own rules, and it is increasingly
                                        difficult to find time for cooking. SmaCom™ products are a perfect solution of
                                        the problem for those who do not have time for cooking, but who like to eat
                                        really appetizing, tasty food. Cooking SmaCom™ semis is easy, quick and
                                        convenient, without spending much time and effort, and the taste is perfect.</p>
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
                                    <h3>Wide range</h3>
                                    <p> SmaCom™ offers you a rich product line of semi-finished products for all
                                        occasions and tastes. Meat dumplings, dumplings, pancakes, cutlets and dishes
                                        from minced meat, stuffed cabbage, minced meat products - they are created to
                                        maximally meet the needs of the most discerning gastronomers. Each product is
                                        made according to the traditional recipes under the vigilant control of the
                                        professionals. While choosing SmaCom™ products, you can be sure that you always
                                        find a dish suitable for your taste. SmaCom™ products are pertinent both for
                                        everyday eating as well as for the festive table.</p>
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
        <h1><img src="img/h1_about_company_en.png" alt=""></h1>
        <div class="middle ">
            <div class="desc">
                LLC "Pyryatynsky delicates" has put into operation the plant for the production of "SmaCom™" frozen semis in
                2010. The multimillion project embodies the idea to ensure the highest quality production.
            </div>
            <div class="hidden" id="hidden1">
                <div class="twoCols" style="padding-bottom: 0;">
                    <div class="col">
                        <div class="colInner">
                            <p> Manufacturing facilities are located in the heart of Ukraine - a picturesque corner of
                                Pyryatyn district. Availability of quality ingredients, pristine ecology of Poltava and
                                advantageous geographical location make it a worthy competitor in the semis market.</p>
                            <p>
                            <ul>
                                <li>Production of the high quality fast food.</li>
                                <li>Semis market leadership</li>
                                <li>Dynamics of development and products expansion.</li>
                                <li>Wide range of products.</li>
                                <li>Stability in partnership.</li>
                                <li>Development of cooperation.</li>
                            </ul>
                            </p>
                            <p>The plant includes seven production departments: 2 departments are for the production of
                                semis, a department for bakery molding, meat, vegetable, hot departments and a packaging
                                department. The area of the plant is constantly expanding in order to provide space for
                                new production lines and facilities in accordance with the development of the product
                                line production.</p>
                            <p>In a relatively short period of work in this sphere, the company has established itself
                                as a reliable partner and a successful national manufacturer of high quality
                                eco-friendly frozen products.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="colInner">
                            <p>Since 2011, the products of LLC "Pyryatynsky delicates" have been represented in the leading
                                retail chains in Ukraine.</p>
                            <p>LLC "Pyryatynsky delicates" is a socially oriented company, which does not allow shipments of
                                substandard products to the market. ISO 9001:2009, ISO 22000:2005 and ISO 1402:2000
                                certification guarantee to our customers that the quality of services and supplied
                                products meets the international standards. </p>
                            <p>Strict observance of all rules, regulations and standards allows to speak about the
                                perfection of products, known under the SmaSom and EkoSmaC trademarks, as well as a wide
                                range of product lines in a weight category.</p>
                            <p>We are a team of professionals who are capable to undertake the solution of problems on
                                any issues in the selection, promotion and shipping of our products. Our marketing
                                technology and information databases show distributors and customers a complete picture
                                of the product market and allow partners to confidently look at their business
                                prospects.</p>
                            <div class="desc" style="text-align:left"><p>We strive to be the best in our business field.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <center><a href="" class="more" onclick="showHidden(this, 'hidden1'); return false;">more</a></center>
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
                        <li><img alt="" src="img/fact1_en.jpg"></li>
                        <li><img alt="" src="img/fact2_en.jpg"></li>
                        <li><img alt="" src="img/fact3_en.jpg"></li>
                        <li><img alt="" src="img/fact4_en.jpg"></li>
                        <li><img alt="" src="img/fact5_en.jpg"></li>
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
        <h1><img src="img/h1_partners_en.png" alt=""></h1>
        <div class="desc">Main advantages of cooperation <br> with LLC "Pyryatynsky delicates":</div>
        <div class="middle">
            <div class="colsWrap">
                <div class="threeCols">
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                            <ul>
                                <li>quality of the provided products;</li>
                                <li>reliability and stability of the Company;</li>
                                <li>loyalty program for partners;</li>
                                <li>wide range of products;</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                            <ul>
                                <li>provision of the refrigeration equipment;</li>
                                <li>responsibilities in orders fulfillment;</li>
                                <li>timely delivery of products;</li>
                                <li>provision of all necessary information about the product;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                            <ul>
                                <li>possibility of tasting the range, trainings for a trading team;</li>
                                <li>assistance in entering local networks;</li>
                                <li>marketing and advertising support in brand promotion.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hidden" id="hidden2" style="padding-bottom: 20px;">
            <div class="middle narrow">
                <div class="desc">SmaCom™ is always open to partnership on mutually beneficial conditions. To meet the
                    growing consumer demand, we are expanding our range of semi-finished products.
                </div>
            </div>
            <div class="middle">
                <div class="colsWrap">
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_1.png" alt=""></span>
                                <p>The ultramodern heavy duty plant "Pyryatynsky delicates", which makes SmaCom™
                                    products, produces only the highest quality products that meet all the international
                                    standards thanks to the technological innovation, high professionalism of staff and
                                    unique recipes.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_2.png" alt=""></span>
                                <p>Full automation of the production process, latest certified equipment from leading
                                    manufacturers (Victoria, Rotofour, Planus, Pietroberto, Nadratovski), compliance
                                    with HACCP, ISO2001, ISO2005 ensure the highest level, absolute safety and
                                    environmentally friendly products.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_3.png" alt=""></span>
                                <p>High quality products that meet the international standards, are produced from
                                    natural ingredients in compliance with all regulations and standards. The innovative
                                    freezing system allows to keep all the nutrients of products and excellent taste
                                    properties underlined by verified recipes.</p></div>
                        </div>
                    </div>
                    <div class="threeCols">
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_4.png" alt=""></span>
                                <p>The company's team is a like-minded group of professionals, who are dedicated and
                                    possess all the necessary knowledge and experience to create a successful brand
                                    leader.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_5.png" alt=""></span>
                                <p>SmaCom™ is a dynamic player in the semis market. Following and creating the world's
                                    leading trends, introducing innovations in each area of production, the company
                                    creates, develops and produces a successful brand of natural semis based on the
                                    needs and desires of consumers.</p></div>
                        </div>
                        <div class="col">
                            <div class="innerCol"><span class="icon"><img src="img/partners_icon_6.png" alt=""></span>
                                <p>Efficient logistics of the company in conjunction with the extremely profitable
                                    territorial location guarantee the delivery of products anywhere in Ukraine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="" class="more" onclick="showHidden(this, 'hidden2'); return false;">more</a></center>
        <div class="borderDown2"></div>
        <div class="scrollBg" id="bg2" style="background-image:url(img/cat3_scrollbg2.jpg)">
            <div class="middle narrow">
                <div class="desc">We are ready to cooperate with distributors and manufacture products under the brand
                    name of the customer (Private Label).
                </div>
            </div>
        </div>
    </div>
    <div class="borderUp2"></div>
    <div class="cat" id="block4">
        <h1><img src="img/h1_contacts_en.png" alt=""></h1>
        <div class="middle">
            <div class="threeCols contactInfo">
                <div class="col roundAnimation" id="cont1">
                    <div class="text adress">46 Nahloho Marka str., <span style="white-space:nowrap;">Deymanovka, Pyryatyn district, </span>
                        <br/> <span style="white-space:nowrap;">Poltava region, </span><br/> 37050, Ukraine.
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
                <div class="title">hot line</div>
                <div class="text">Calls from fixed lines are free of charge, calls from cell phone operators are charged
                    according to their current rates.
                </div>
            </div>
        </div>
    </div>

    <div class="borderDown" style="z-index:430"></div>
    <div class="footer">
        <div class="middle">
            <div class="robotsText">
                <p>SmaCom™ are natural frozen semi-finished products of high quality.</p>
                <p>The brand name "SmaCom" characterizes the products and the company's mission: firstly, it is
                    high-quality products with excellent taste properties, and secondly, a harmonious synthesis of
                    Ukrainian traditions and taste and European production level.</p>
            </div>
        </div>
        <div class="footerBottom">
            <div class="copyright">© 2003-2015 SmaCom</div>
            <div class="soc-icon">
                <ul>
<!--                    <li>-->
<!--                        <a href="https://vk.com/id319556365" class="social-icon-1">-->
<!--                        </a>-->
<!--                    </li>-->
                    <li>
                        <a href="https://www.facebook.com/SmaComUa/" class="social-icon-2"></a>
                    </li>
<!--                    <li>-->
<!--                        <a href="http://ok.ru/profile/571205720858" class="social-icon-3">-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </div>
            <div class="footerLogo"><img src="img/logo_footer.png" alt=""></div>
            <div class="entrance-for-partners-block">
                <button class="entrance-for-partners" onclick="location.href='/order'">Login for partners</button>
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
