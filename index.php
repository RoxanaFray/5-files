<?
include $_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/referer_init.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/functions.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/plans.php";
include $_SERVER["DOCUMENT_ROOT"] . "/php/build.php";

function sanitize_output($buffer) {
    $search = array(
        "/\>[^\S ]+/s",
        "/[^\S ]+\</s",
        "/(\s)+/s"
    );
    $replace = array(
        ">",
        "<",
        "\\1"
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

// Минификация HTML (использовать если разметка большая. Сжимает на 10%)
ob_start("sanitize_output");
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>ЖК «Виноград-2» - официальный сайт застройщика</title>
    <meta name="description" content="Квартиры от застройщика от 32 тыс.руб. за м² Монолит-кирпич. Центральные коммуникации. Срок сдачи: 2020 г.">
    <meta name="viewport" content="width=device-width">

    <meta property="og:url" content="https://жк-виноград.рф">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ЖК «Виноград-2», г. Краснодар">
    <meta property="og:description" content="Квартиры от застройщика от 32 тыс.руб. за м² Монолит-кирпич. Центральные коммуникации. Срок сдачи: 2020 г.">
    <meta property="og:image" content="https://xn----8sbfeghqn4akx6j.xn--p1ai/img/og-image.jpg">

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://жк-виноград.рф",
        "name": "ЖК «Виноград-2», г. Краснодар",
        "alternateName": "Официальный сайт «ЖК «Виноград-2»",
        "image": "http://xn----8sbfeghqn4akx6j.xn--p1ai/img/og-image.jpg",
        "description": "Квартиры от застройщика от 32 тыс.руб. за м² Монолит-кирпич. Центральные коммуникации. Срок сдачи: 2020 г.",
        "telephone": "<?=$phone_formatted?>",
        "email": "info@vinograd23.com",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Поселок Новая Адыгея",
            "streetAddress": "Бжегокайская ул., 19",
            "postalCode": "385121"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "sales",
            "name": "Отдел продаж",
            "telephone": "<?=$phone_formatted?>",
            "hoursAvailable": [{
                "@type": "OpeningHoursSpecification",
                "opens": "09:00",
                "closes": "18:00",
                "dayOfWeek": [{
                        "@type": "DayOfWeek",
                        "@id": "http://schema.org/Monday",
                        "name": "Monday"
                    },
                    {
                        "@type": "DayOfWeek",
                        "@id": "http://schema.org/Tuesday",
                        "name": "Tuesday"
                    },
                    {
                        "@type": "DayOfWeek",
                        "@id": "http://schema.org/Wednesday",
                        "name": "Wednesday"
                    },
                    {
                        "@type": "DayOfWeek",
                        "@id": "http://schema.org/Thursday",
                        "name": "Thursday"
                    },
                    {
                        "@type": "DayOfWeek",
                        "@id": "http://schema.org/Friday",
                        "name": "Friday"
                    }]
            }]
        }
    }
    </script>

    <script>
        utm_campaign = "<?= $utm_campaign ?>";
        utm_source = "<?= $utm_source ?>";
        utm_medium = "<?= $utm_medium ?>";
        utm_term = "<?= $utm_term ?>";
        referer = "<?= $referer ?>";
        phone = "<?= $phone_formatted ?>";
        <?=file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/js/base.min.js"), "\n\n";?>
        <?=file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/js/loadfonts.min.js"), "\n\n";?>
        loadFont("PTSansExo2", "/css/fonts-woff.min.css", "/css/fonts-woff2.min.css");
    </script>

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#44176b">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#44176b">

    <style>
        <?=file_get_contents(__DIR__ . "/css/normalize.min.css"), "\n\n";?>
        <?=file_get_contents(__DIR__ . "/css/jquery.arcticmodal.min.css"), "\n\n";?>
        <?=file_get_contents(__DIR__ . "/css/slick.min.css"), "\n\n";?>
        <?=file_get_contents(__DIR__ . "/css/slick-theme.min.css"), "\n\n";?>
        <?=file_get_contents(__DIR__ . "/css/intop.slider.min.css"), "\n\n";?>
    </style>
    <!--[if !IE] -->
    <style>
        <?=file_get_contents(__DIR__ . "/css/main.min.css"), "\n\n";?>
    </style>
    <!-- [endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/css/main.min.css">
    <![endif]-->
    <style media="print">
        <?=file_get_contents(__DIR__ . "/css/print.min.css"), "\n\n";?>
    </style>
    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.src.min.js"></script>
    <![endif]-->

    <?
    /* !!!!!!!!!!!!!!!!!!!!!!
        TODO: Проверить верстку в разных браузерах
     !!!!!!!!!!!!!!!!!!!!! */
    ?>
</head>
<body class="landing g-bgFirst">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6JVNJ8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<? // Блоки, которые загружаются в первую очередь ?>

<? // HEADER ?>
<header class="landing__wrap landing__wrap-menu g-bgHeader" role="banner">
    <div class="landing__line landing__line-menu">
        <div class="header">
            <div class="header__item header__item-menu">
                <nav class="menu menu-opened" role="navigation">
                    <div class="menu__btn"></div>
                    <div class="menu__closer">
                        <div class="menu__closerIcon">&times;</div>
                    </div>
                    <div class="menu__content">
                        <ul class="menu__list">
                            <li class="menu__item menu__item-1" data-link="landing__wrap-first">Главная</li>
                            <li class="menu__item menu__item-2" data-link="landing__wrap-plans">Планировки</li>
                            <li class="menu__item menu__item-3" data-link="landing__wrap-map">Карта</li>
                            <li class="menu__item menu__item-4" data-link="landing__wrap-benefits">Преимущества</li>
                            <li class="menu__item menu__item-1" data-link="landing__wrap-infra">Территория</li>
                            <li class="menu__item menu__item-2" data-link="landing__wrap-pay">Способы оплаты</li>
                            <li class="menu__item menu__item-3" data-link="landing__wrap-build">Этапы стройки</li>
                            <li class="menu__item menu__item-4" data-link="landing__wrap-developer">Документы</li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header__item header__item-logo">
                <img alt="Логотип" class="header__logo" src="/img/logo-min.png" height="58" width="225" />
            </div>
            <div class="header__item header__item-contacts">
                <div class="header__phone"><?= $PHONE ?></div>
                <button class="header__btn g-btn g-recall" data-h="Перезвонить Вам?" data-btn="Перезвоните мне" data-from="Кнопка: Перезвоните мне (шапка)">Перезвонить Вам?</button>
            </div>
        </div>
    </div>
</header>

<?
/* !!!!!!!!!!!!!!!!!!!!!!
    TODO: блокам с фоновой картинкой прописывать эту картинку в отдельном классе g-bg... чтобы работал лейзилоад фоновых картинок
 !!!!!!!!!!!!!!!!!!!!! */
?>
<main role="main">
    <? // FIRST ?>
    <div class="landing__wrap landing__wrap-first">
        <div class="landing__line landing__line-first">
            <div class="first">
                <?
                /* !!!!!!!!!!!!!!!!!!!!!!
                   TODO: проверить все блоки на отсутствие одиночных кусков текста в конце (при разных размерах экрана в мобильной версии) - не забывать &nbsp; там, где нужно (например, вместо пробела между цифрами в цене), либо оборачивать блоки в <span class="g-wsnw"></span>
                   !!!!!!!!!!!!!!!!!!!!! */
                ?>
                <div class="first__left">
                    <h1 class="first__h1 g-h1h2">Квартиры<br>в Новой Адыгее<br> от застройщика</h1>
                    <div class="first__green">
                        <div class="first__price g-exo2">от 38 000 руб./м²</div>
                        <div class="first__link g-link g-link-white">смотреть планировки</div>
                        <div class="first__icon g-icon g-icon-plans"></div>
                    </div>
                </div>
                <div class="first__right">
                    <ul class="first__ul">
                        <li class="first__li g-icon g-icon-check">вид на <strong>IKEA парк</strong></li>
                        <li class="first__li g-icon g-icon-check"><strong>рядом</strong> ТЦ «Мега-Адыгея», «АШАН», ГМ «METRO»</li>
                        <li class="first__li g-icon g-icon-check"><strong>3</strong> школы и <strong>3</strong> детских сада</li>
                    </ul>
                    <div class="first__benefit g-cGreen">Уже сданы 5 литеров<br>ЖК «Виноград-1»</div>
                    <? /*!!!!!!!!!!!!!!!!!!!!!!
                        TODO: Для все кнопок g-recall заполнить data-from
                        Указать название блока, в котором расположена кнопка
                        Также указать корректные data-h и data-btn
                     !!!!!!!!!!!!!!!!!!!!!*/ ?>
                    <button class="first__btn g-btn g-recall" data-h="Оставить заявку<br>в отдел продаж" data-btn="Оставить заявку" data-from="Кнопка: Оставить заявку (первый экран)">Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>
    <? // SALE ?>
    <div class="landing__wrap landing__wrap-sale v-pc">
        <div class="landing__line landing__line-sale">
            <div class="sale">
                <div class="sale__slider">
                    <img alt="Старт продаж - 6-ой литер!" class="sale__img" src="/img/sale/6_liter_banner.jpg" />
                    <img alt="Новые литеры. Теперь в продаже литеры 7 и 8" class="sale__img" src="/img/sale/new_liters.png" />
                    <img alt="Акция! Ипотека от Сбербанка от 5%" class="sale__img" src="/img/sale/1909_ipoteka.jpg" />
                    <img alt="Акция! Рассрочка на 2 года" class="sale__img" src="/img/sale/1907_rassrochka.jpg" />
                </div>
            </div>
        </div>
    </div>
    <? // ABOUT ?>
    <div class="landing__wrap landing__wrap-about">
        <div class="landing__line landing__line-about">
            <div class="about">
                <div class="about__item about__item-1">
                    <div class="about__icon g-icon g-icon-fz214 g-cGreen2"></div>
                    <div class="about__text">Продажа по<br>ФЗ-214</div>
                </div>
                <div class="about__item about__item-2">
                    <div class="about__icon g-icon g-icon-kirpich g-cGreen2"></div>
                    <div class="about__text">Монолит-кирпич</div>
                </div>
                <div class="about__item about__item-3">
                    <div class="about__icon g-icon g-icon-water g-cGreen2"></div>
                    <div class="about__text">Центральные<br>коммуникации</div>
                </div>
                <div class="about__item about__item-4">
                    <div class="about__icon g-icon g-icon-building g-cGreen2"></div>
                    <div class="about__text">6 этажей<br>с лифтом</div>
                </div>
                <div class="about__item about__item-5">
                    <div class="about__icon g-icon g-icon-road g-cGreen2"></div>
                    <div class="about__text">Двор<br>без машин</div>
                </div>
                <div class="about__item about__item-6">
                    <div class="about__icon g-icon g-icon-key g-cGreen2"></div>
                    <div class="about__text">
                        Литеры 15, 16 - 2 кв. 2020 <br>
                        Литеры 13, 14 - 4 кв. 2020 <br>
                        Литеры 11, 12 - 2 кв. 2021 <br>
                        Литеры 9, 10 - 2 кв. 2021 <br>
                        Литеры 7, 8 - 2 кв. 2021 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? // Блоки, которые загружаются во вторую очередь ?>
    <div class="landing__secondary landing__secondary-step1">
        <? // PLANS ?>
        <div class="landing__wrap landing__wrap-plans">
            <div class="landing__line landing__line-plans">
                <div class="plans">
                   <!-- <h2 class="plans__h2 plans__h2-video g-h1h2">ЖК Виноградъ 2 <br> <span class="plans__about">видео о жилом комплексе</span></h2>
                    <div class="plans__videos">
                        <iframe class="plans__video" src="https://www.youtube.com/embed/8MVRy-JM5WY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        <iframe class="plans__video" src="https://www.youtube.com/embed/d-hmQeZ-mEg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div> -->

                    <h2 class="plans__h2 g-h1h2">Планировки</h2>
                    <div class="plans__switchers g-switchers" data-for="plans__slider">
                        <button class="plans__btn plans__btn-switcher g-switcher g-switcher-active" data-item="all">все</button>
                        <button class="plans__btn plans__btn-switcher g-switcher" data-item="smart">студии</button>
                        <button class="plans__btn plans__btn-switcher g-switcher" data-item="1kom">1-комнатные</button>
                        <br class="v-mobile">
                        <button class="plans__btn plans__btn-switcher g-switcher" data-item="2kom">2-комнатные</button>
                        <button class="plans__btn plans__btn-switcher g-switcher" data-item="3kom">3-комнатные</button>
                    </div>

                    <div class="plans__slider plans__slider-all plans__slider-active">
                        <?
                        for ($plans_i = 0; $plans_i < count($plans_all); $plans_i++) {
                            $lazyslider = $plans_i > 3 ? true : false;
                            $plan = $plans_all[$plans_i];
                            ?>
                            <div class="plans__item">
                                <div class="plans__top g-bgGreen"><?=$plan["roomsStr"]?> - <?=beautifySquare($plan["fullSq"])?> м²</div>
                                <div class="plans__content">
                                    <img class="plans__img<?=$lazyslider ? "" : " g-lazy";?>" src="/img/loading-purple-on-white.svg" <?=$lazyslider ? ("data-lazyslider='" . $plan["image"] . "'") : ("data-lazy='" . $plan["image"] . "'");?> alt="Планировка квартиры в ЖК «Виноград-2»" data-liter="<?=$plan["liter"]?>" data-entrance="<?=$plan["entrance"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsStr="<?=$plan["roomsStr"]?>" data-fullSq="<?=$plan["fullSq"]?>" data-liveSq="<?=$plan["liveSq"]?>" data-kitchSq="<?=$plan["kitchSq"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                    <div class="plans__info"><?=$plan["liter"]?> | подъезд <?=$plan["entrance"]?></div>
                                    <div class="plans__price"><?=beautifyPrice($plan["price"])?> руб.</div>
                                    <button class="plans__btn g-btn" data-h="Оставить заявку<br>на бронирование квартиры" data-btn="Оставить заявку" data-from="Блок «Планировки» (слайдер), все планировки, квартира <?=$plan["fullSq"]?> м² в подъезде №<?=$plan["entrance"]?> литера №<?=$plan["liter"]?>">Забронировать</button>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="plans__slider plans__slider-smart">

                        <?

                        for ($plans_i = 0; $plans_i < count($plans_smart); $plans_i++) {
                            $lazyslider = $plans_i > 3 ? true : false;
                            $plan = $plans_smart[$plans_i];
                            ?>
                            <div class="plans__item">
                                <div class="plans__top g-bgGreen"><?=$plan["roomsStr"]?> - <?=beautifySquare($plan["fullSq"])?> м²</div>
                                <div class="plans__content">
                                    <img class="plans__img<?=$lazyslider ? "" : " g-lazy";?>" src="/img/loading-purple-on-white.svg" <?=$lazyslider ? ("data-lazyslider='" . $plan["image"] . "'") : ("data-lazy='" . $plan["image"] . "'");?> alt="Планировка квартиры в ЖК «Виноград-2»" data-liter="<?=$plan["liter"]?>" data-entrance="<?=$plan["entrance"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsStr="<?=$plan["roomsStr"]?>" data-fullSq="<?=$plan["fullSq"]?>" data-liveSq="<?=$plan["liveSq"]?>" data-kitchSq="<?=$plan["kitchSq"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                    <div class="plans__info"><?=$plan["liter"]?> | подъезд <?=$plan["entrance"]?></div>
                                    <div class="plans__price"><?=beautifyPrice($plan["price"])?> руб.</div>
                                    <button class="plans__btn g-btn" data-h="Оставить заявку<br>на бронирование квартиры" data-btn="Оставить заявку" data-from="Блок «Планировки» (слайдер), Студии, квартира <?=$plan["fullSq"]?> м² в подъезде №<?=$plan["entrance"]?> литера №<?=$plan["liter"]?>">Забронировать</button>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="plans__slider plans__slider-1kom">
                        <?

                        for ($plans_i = 0; $plans_i < count($plans_1kom); $plans_i++) {
                            $lazyslider = $plans_i > 3 ? true : false;
                            $plan = $plans_1kom[$plans_i];
                            ?>
                            <div class="plans__item">
                                <div class="plans__top g-bgGreen"><?=$plan["roomsStr"]?> - <?=beautifySquare($plan["fullSq"])?> м²</div>
                                <div class="plans__content">
                                    <img class="plans__img<?=$lazyslider ? "" : " g-lazy";?>" src="/img/loading-purple-on-white.svg" <?=$lazyslider ? ("data-lazyslider='" . $plan["image"] . "'") : ("data-lazy='" . $plan["image"] . "'");?> alt="Планировка квартиры в ЖК «Виноград-2»" data-liter="<?=$plan["liter"]?>" data-entrance="<?=$plan["entrance"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsStr="<?=$plan["roomsStr"]?>" data-fullSq="<?=$plan["fullSq"]?>" data-liveSq="<?=$plan["liveSq"]?>" data-kitchSq="<?=$plan["kitchSq"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                    <div class="plans__info"><?=$plan["liter"]?> | подъезд <?=$plan["entrance"]?></div>
                                    <div class="plans__price"><?=beautifyPrice($plan["price"])?> руб.</div>
                                    <button class="plans__btn g-btn" data-h="Оставить заявку<br>на бронирование квартиры" data-btn="Оставить заявку" data-from="Блок «Планировки» (слайдер), 1-комнатные, квартира <?=$plan["fullSq"]?> м² в подъезде №<?=$plan["entrance"]?> литера №<?=$plan["liter"]?>">Забронировать</button>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="plans__slider plans__slider-2kom">
                        <?
                        for ($plans_i = 0; $plans_i < count($plans_2kom); $plans_i++) {
                            $lazyslider = $plans_i > 3 ? true : false;
                            $plan = $plans_2kom[$plans_i];
                            ?>
                            <div class="
                                    ">
                                <div class="plans__top g-bgGreen"><?=$plan["roomsStr"]?> - <?=beautifySquare($plan["fullSq"])?> м²</div>
                                <div class="plans__content">
                                    <img class="plans__img<?=$lazyslider ? "" : " g-lazy";?>" src="/img/loading-purple-on-white.svg" <?=$lazyslider ? ("data-lazyslider='" . $plan["image"] . "'") : ("data-lazy='" . $plan["image"] . "'");?> alt="Планировка квартиры в ЖК «Виноград-2»" data-liter="<?=$plan["liter"]?>" data-entrance="<?=$plan["entrance"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsStr="<?=$plan["roomsStr"]?>" data-fullSq="<?=$plan["fullSq"]?>" data-liveSq="<?=$plan["liveSq"]?>" data-kitchSq="<?=$plan["kitchSq"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                    <div class="plans__info"><?=$plan["liter"]?> | подъезд <?=$plan["entrance"]?></div>
                                    <div class="plans__price"><?=beautifyPrice($plan["price"])?> руб.</div>
                                    <button class="plans__btn g-btn" data-h="Оставить заявку<br>на бронирование квартиры" data-btn="Оставить заявку" data-from="Блок «Планировки» (слайдер), 2-комнатные, квартира <?=$plan["fullSq"]?> м² в подъезде №<?=$plan["entrance"]?> литера №<?=$plan["liter"]?>">Забронировать</button>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <div class="plans__slider plans__slider-3kom">
                        <?
                        for ($plans_i = 0; $plans_i < count($plans_3kom); $plans_i++) {
                            $lazyslider = $plans_i > 3 ? true : false;
                            $plan = $plans_3kom[$plans_i];
                            ?>
                            <div class="plans__item">
                                <div class="plans__top g-bgGreen"><?=$plan["roomsStr"]?> - <?=beautifySquare($plan["fullSq"])?> м²</div>
                                <div class="plans__content">
                                    <img class="plans__img<?=$lazyslider ? "" : " g-lazy";?>" src="/img/loading-purple-on-white.svg" <?=$lazyslider ? ("data-lazyslider='" . $plan["image"] . "'") : ("data-lazy='" . $plan["image"] . "'");?> alt="Планировка квартиры в ЖК «Виноград-2»" data-liter="<?=$plan["liter"]?>" data-entrance="<?=$plan["entrance"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsStr="<?=$plan["roomsStr"]?>" data-fullSq="<?=$plan["fullSq"]?>" data-liveSq="<?=$plan["liveSq"]?>" data-kitchSq="<?=$plan["kitchSq"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                    <div class="plans__info"><?=$plan["liter"]?> | подъезд <?=$plan["entrance"]?></div>
                                    <div class="plans__price"><?=beautifyPrice($plan["price"])?> руб.</div>
                                    <button class="plans__btn g-btn" data-h="Оставить заявку<br>на бронирование квартиры" data-btn="Оставить заявку" data-from="Блок «Планировки» (слайдер), 3-комнатные, квартира <?=$plan["fullSq"]?> м² в подъезде №<?=$plan["entrance"]?> литера №<?=$plan["liter"]?>">Забронировать</button>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <? // MAP ?>
        <div class="landing__wrap landing__wrap-map">
            <div class="landing__line landing__line-map">
                <div class="map">
                    <h2 class="map__h2 g-h1h2"><span class="map__text">Инфраструктура района</span> <span class="map__icon g-icon g-icon-locations v-pc"></span></h2>
                    <img alt="Карта района" class="map__img" src="/img/map.jpg" />
                </div>
            </div>
        </div>
        <? // BENEFITS ?>
        <div class="landing__wrap landing__wrap-benefits g-lazy" data-lazy="g-bgBenefit">
            <div class="landing__line landing__line-benefits">
                <div class="benefits">
                    <h2 class="benefits__h2 g-h1h2">ЖК Виноградъ - комфортное жилье</h2>
                    <div class="benefits__content">
                        <div class="benefits__item">
                            <div class="benefits__text">Планировки<br>от 21,9 м² до 61,5 м²</div>
                            <img alt="Планировки от 21,9 м² до 61,5 м²" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/01.jpg" />
                        </div>
                        <div class="benefits__item">
                            <div class="benefits__text">Пассажирский<br>лифт</div>
                            <img alt="Пассажирский лифт" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/02.jpg" />
                        </div>
                        <div class="benefits__item">
                            <div class="benefits__text">Подъезды с пандусом,<br>домофоном</div>
                            <img alt="Подъезды с пандусом, домофоном" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/03.jpg" />
                        </div>
                        <div class="benefits__item">
                            <div class="benefits__text">Предчистовая отделка<br>комнат</div>
                            <img alt="Предчистовая отделка комнат" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/04.jpg" />
                        </div>
                        <div class="benefits__item">
                            <div class="benefits__text">Индивидуальная газовая<br>котельная</div>
                            <img alt="Индивидуальная газовая котельная" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/05.jpg" />
                        </div>
                        <div class="benefits__item">
                            <div class="benefits__text">Хорошая звуко- и<br>теплоизоляция</div>
                            <img alt="Хорошая звуко- и теплоизоляция" class="benefits__img g-lazy" src="/img/empty-min.png" data-lazy="/img/benefits/06.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? // FLOOR ?>
        <div class="landing__wrap landing__wrap-floor g-lazy" data-lazy="g-bgFloor">
            <div class="landing__line landing__line-floor">
                <div class="floor">
                    <h2 class="floor__h2 g-h1h2">Планировки квартир на&nbsp;этаже</h2>
                    <div class="floor__content">
                        <div class="floor__left g-switchers" data-for="floor__plan">
                            <button class="floor__btn floor__btn-7 g-switcher g-switcher-active" data-item="type9-floor">Литер 7, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-8 g-switcher" data-item="type10-floor">Литер 8, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-9 g-switcher" data-item="type1-floor">Литер 9, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-10 g-switcher" data-item="type2-floor">Литер 10, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-11 g-switcher" data-item="type3-floor">Литер 11, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-12 g-switcher" data-item="type4-floor">Литер 12, <div class="floor__date">Сдача: 2 квартал 2021г.</div></button>
                            <button class="floor__btn floor__btn-13 g-switcher" data-item="type5-floor">Литер 13, <div class="floor__date">Сдача: 4 квартал 2020г.</div></button>
                            <button class="floor__btn floor__btn-14 g-switcher" data-item="type6-floor">Литер 14, <div class="floor__date">Сдача: 4 квартал 2020г.</div></button>
                            <button class="floor__btn floor__btn-15 g-switcher" data-item="type7-floor">Литер 15, <div class="floor__date">Сдача: 2 квартал 2020г.</div></button>
                            <button class="floor__btn floor__btn-16 g-switcher" data-item="type8-floor">Литер 16, <div class="floor__date">Сдача: 2 квартал 2020г.</div></button>

                            <? /*
                                <button class="floor__btn g-switcher" data-item="type1-floor">Литер 1</button><br class="v-pc" />
                                <button class="floor__btn g-switcher" data-item="type2-floor">Литер 2</button><br class="v-pc" />
                                <button class="floor__btn g-switcher g-switcher-disabled" data-item="type1-base">Цоколь 1</button><br class="v-pc" />
                                <button class="floor__btn g-switcher g-switcher-disabled" data-item="type2-base">Цоколь 2</button><br class="v-pc" />
                                */ ?>
                            <img alt="Роза ветров" class="floor__rose g-lazy v-pc" src="/img/empty-min.png" data-lazy="/img/rose.jpg" height="134" width="134" />
                        </div>
                        <div class="floor__right">
                            <div class="floor__plan floor__plan-type9-floor floor__plan-active">
                                <img class="floor__img" src="/img/plans/type3-floor.jpg" alt="Планировка" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type9); $plans_i++) {
                                        $plan = $plans_type9[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type10-floor">
                                <img class="floor__img" src="/img/plans/type4-floor.jpg" alt="Планировка" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type10); $plans_i++) {
                                        $plan = $plans_type10[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type1-floor">
                                <img class="floor__img" src="/img/plans/type1-floor.jpg" alt="Планировка" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type1); $plans_i++) {
                                        $plan = $plans_type1[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="377 361,376 392,383 402,385 568,301 568,299 577,276 569,218 566,215 362"></polygon>
                                    <polygon class="floor__flat-sold" points="216 364,215 393,208 404,208 568,163 567,160 577,136 568,138 558,108 559,107 404,114 393,115 364"></polygon>
                                    <polygon class="floor__flat-sold" points="582 605,558 594,554 604,463 603,465 764,641 764,642 602"></polygon>
                                    <polygon class="floor__flat-sold" points="727 603,701 595,698 603,640 604,643 762,804 763,800 605"></polygon>
                                    <polygon class="floor__flat-sold" points="735 381,735 412,811 413,811 492,858 493,860 567,773 569,750 577,743 568,646 566,644 381"></polygon>
                                    <polygon class="floor__flat-sold" points="827 118,1003 117,1007 2,829 1,829 12,797 12,799 112,830 113"></polygon>
                                    <polygon class="floor__flat-sold" points="1037 291,1038 352,1031 380,1040 382,1039 476,1199 476,1199 293"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type2-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type2-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type2); $plans_i++) {
                                        $plan = $plans_type2[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="202 111,201 98,190 95,198 70,197 3,376 2,375 12,405 11,403 111"></polygon>
                                    <polygon class="floor__flat-sold" points="162 353,171 381,162 381,160 477,2 477,4 288,163 290"></polygon>
                                    <polygon class="floor__flat-sold" points="558 570,457 569,456 578,430 569,403 569,402 558,345 559,344 554,342 490,390 492,392 424,389 426,388 413,466 412,467 378,558 379"></polygon>
                                    <polygon class="floor__flat-sold" points="472 604,503 595,505 604,564 604,564 762,396 761,396 603"></polygon>
                                    <polygon class="floor__flat-sold" points="620 602,645 594,648 604,740 604,741 764,563 763,561 604"></polygon>
                                    <polygon class="floor__flat-sold" points="986 363,990 567,1039 566,1041 578,1065 568,1095 565,1095 402,1087 402,1088 362"></polygon>
                                    <polygon class="floor__flat-sold" points="988 569,928 568,903 578,901 569,815 567,813 393,828 392,828 363,990 364"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type3-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type3-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type3); $plans_i++) {
                                        $plan = $plans_type3[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="212 403,212 377,209 364,210 200,163 199,159 190,134 198,107 199,107 363,114 363,116 405"></polygon>
                                    <polygon class="floor__flat-sold" points="211 2,212 163,311 165,334 172,337 163,463 165,464 2 "></polygon>
                                    <polygon class="floor__flat-sold" points="465 2,465 165,555 165,557 173,582 163,641 164,641 2 "></polygon>
                                    <polygon class="floor__flat-sold" points="807 164,726 164,699 174,698 164,644 164,644 32,642 1,804 1  "></polygon>
                                    <polygon class="floor__flat-sold" points="644 407,644 196,584 197,558 187,555 198,459 199,460 408 "></polygon>
                                    <polygon class="floor__flat-sold" points="1197 286,1040 287,1040 384,1030 388,1037 410,1042 476,1199 477"></polygon>
                                    <polygon class="floor__flat-sold" points="1002 657,1004 757,797 756,797 656"></polygon>
                                    <polygon class="floor__flat-sold" points="273 198,300 187,303 197,387 198,386 374,376 374,376 405,215 403,215 198"></polygon>
                                    <polygon class="floor__flat-sold" points="743 196,747 186,771 196,812 194,813 205,860 204,860 274,811 275,812 354,735 354,735 387,644 386,643 196"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type4-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type4-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type4); $plans_i++) {
                                        $plan = $plans_type4[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="406 652,202 653,203 666,189 673,206 696,206 755,408 755"></polygon>
                                    <polygon class="floor__flat-sold" points="160 475,162 415,171 387,162 383,163 284,3 283,3 477 "></polygon>
                                    <polygon class="floor__flat-sold" points="741 199,649 198,644 187,617 198,559 197,560 405,743 406  "></polygon>
                                    <polygon class="floor__flat-sold" points="559 1,561 163,505 162,501 172,478 163,396 162,395 2"></polygon>
                                    <polygon class="floor__flat-sold" points="740 -1,739 163,648 163,643 170,618 163,565 164,563 159,563 2"></polygon>
                                    <polygon class="floor__flat-sold" points="988 1,987 162,893 163,866 169,865 162,743 162,742 2"></polygon>
                                    <polygon class="floor__flat-sold" points="1088 403,1090 373,1096 365,1097 200,1069 199,1043 188,1038 198,992 197,989 402"></polygon>
                                    <polygon class="floor__flat-sold" points="466 388,466 355,390 356,389 349,391 276,342 271,341 199,430 197,454 188,457 197,560 198,562 389"></polygon>
                                    <polygon class="floor__flat-sold" points="990 404,826 403,826 373,814 363,812 199,987 202"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type5-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type1-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type5); $plans_i++) {
                                        $plan = $plans_type5[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="377 361,376 392,383 402,385 568,301 568,299 577,276 569,218 566,215 362"></polygon>
                                    <polygon class="floor__flat-sold" points="216 364,215 393,208 404,208 568,163 567,160 577,136 568,138 558,108 559,107 404,114 393,115 364"></polygon>
                                    <polygon class="floor__flat-sold" points="214 765,215 604,308 602,335 595,338 603,460 602,462 762"></polygon>
                                    <polygon class="floor__flat-sold" points="582 605,558 594,554 604,463 603,465 764,641 764,642 602"></polygon>
                                    <polygon class="floor__flat-sold" points="727 603,701 595,698 603,640 604,643 762,804 763,800 605"></polygon>
                                    <polygon class="floor__flat-sold" points="735 381,735 412,811 413,811 492,858 493,860 567,773 569,750 577,743 568,646 566,644 381"></polygon>
                                    <polygon class="floor__flat-sold" points="636 361,637 570,584 570,558 579,556 571,466 571,465 362"></polygon>
                                    <polygon class="floor__flat-sold" points="1200 736,994 734,994 558,917 559,916 492,992 490,992 469,1004 467,1005 473,1039 472,1037 478,1200 480"></polygon>
                                    <polygon class="floor__flat-sold" points="1037 291,1038 352,1031 380,1040 382,1039 476,1199 476,1199 293"></polygon>
                                    <polygon class="floor__flat-sold" points="1038 70,1039 100,1030 117,1029 129,1039 131,1041 284,1037 286,1039 294,1169 296,1171 289,1198 288,1198 12,1170 12,1170 1,1004 1,1004 69"></polygon>
                                    <polygon class="floor__flat-sold" points="827 118,1003 117,1007 2,829 1,829 12,797 12,799 112,830 113"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type6-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type2-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type6); $plans_i++) {
                                        $plan = $plans_type6[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="558 570,457 569,456 578,430 569,403 569,402 558,345 559,344 554,342 490,390 492,392 424,389 426,388 413,466 412,467 378,558 379"></polygon>
                                    <polygon class="floor__flat-sold" points="472 604,503 595,505 604,564 604,564 762,396 761,396 603"></polygon>
                                    <polygon class="floor__flat-sold" points="620 602,645 594,648 604,740 604,741 764,563 763,561 604"></polygon>
                                    <polygon class="floor__flat-sold" points="988 569,928 568,903 578,901 569,815 567,813 393,828 392,828 363,990 364"></polygon>
                                    <polygon class="floor__flat-sold" points="986 363,990 567,1039 566,1041 578,1065 568,1095 565,1095 402,1087 402,1088 362"></polygon>
                                    <polygon class="floor__flat-sold" points="864 603,866 593,890 603,986 602,987 763,743 762,741 607"></polygon>
                                    <polygon class="floor__flat-sold" points="189 462,188 475,196 475,198 472,209 469,209 493,282 492,282 557,209 557,209 567,208 734,32 733,32 646,1 647,1 477,165 476"></polygon>
                                    <polygon class="floor__flat-sold" points="735 362,741 360,743 566,647 568,644 579,620 568,567 568,566 364,739 361"></polygon>
                                    <polygon class="floor__flat-sold" points="202 111,201 98,190 95,198 70,197 3,376 2,375 12,405 11,403 111"></polygon>
                                    <polygon class="floor__flat-sold" points="164 68,162 101,173 127,163 130,162 288,1 289,1 1,199 2,199 69"></polygon>
                                    <polygon class="floor__flat-sold" points="162 353,171 381,162 381,160 477,2 477,4 288,163 290"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type7-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type3-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type7); $plans_i++) {
                                        $plan = $plans_type7[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="273 198,300 187,303 197,387 198,386 374,376 374,376 405,215 403,215 198"></polygon>
                                    <polygon class="floor__flat-sold" points="212 403,212 377,209 364,210 200,163 199,159 190,134 198,107 199,107 363,114 363,116 405"></polygon>
                                    <polygon class="floor__flat-sold" points="211 2,212 163,311 165,334 172,337 163,463 165,464 2"></polygon>
                                    <polygon class="floor__flat-sold" points="807 164,726 164,699 174,698 164,644 164,644 32,642 1,804 1"></polygon>
                                    <polygon class="floor__flat-sold" points="979 1,979 33,998 34,998 200,917 200,919 265,862 266,862 199,811 198,801 191,791 169,806 163,807 0"></polygon>
                                    <polygon class="floor__flat-sold" points="465 2,465 165,555 165,557 173,582 163,641 164,641 2"></polygon>
                                    <polygon class="floor__flat-sold" points="1036 291,1014 302,1011 294,993 295,991 266,919 263,919 198,994 197,993 31,1170 32,1172 121,1199 120,1200 289"></polygon>
                                    <polygon class="floor__flat-sold" points="1197 286,1040 287,1040 384,1030 388,1037 410,1042 476,1199 477"></polygon>
                                    <polygon class="floor__flat-sold" points="1002 657,1004 757,797 756,797 656"></polygon>
                                    <polygon class="floor__flat-sold" points="1040 697,1039 663,1031 637,1038 633,1038 477,1200 477,1201 763,1005 764,1002 699"></polygon>
                                    <polygon class="floor__flat-sold" points="743 196,747 186,771 196,812 194,813 205,860 204,860 274,811 275,812 354,735 354,735 387,644 386,643 196"></polygon>
                                    <polygon class="floor__flat-sold" points="644 407,644 196,584 197,558 187,555 198,459 199,460 408"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type8-floor">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type4-floor.jpg" />
                                <svg class="floor__svg" viewBox="0 0 1200 765" xmlns="http://www.w3.org/2000/svg"  preserveAspectRatio="none">
                                    <?
                                    for ($plans_i = 0; $plans_i < count($plans_type8); $plans_i++) {
                                        $plan = $plans_type8[$plans_i];
                                        ?>
                                        <polygon class="floor__flat" points="<?=$plan["svg"]?>" stroke-linejoin="round" data-lazyimg="<?=$plan["image"]?>" data-rooms="<?=$plan["rooms"]?>" data-roomsstr="<?=$plan["roomsStr"]?>" data-fullsq="<?=$plan["fullSq"]?>" data-livesq="<?=$plan["liveSq"]?>" data-kitchsq="<?=$plan["kitchSq"]?>" data-liter="<?=$plan["liter"]?>" data-price="<?=$plan["price"]?>" data-dates="<?=$plan["dates"]?>"/>
                                        <?
                                    }
                                    ?>
                                    <polygon class="floor__flat-sold" points="406 652,202 653,203 666,189 673,206 696,206 755,408 755"></polygon>
                                    <polygon class="floor__flat-sold" points="160 475,162 415,171 387,162 383,163 284,3 283,3 477"></polygon>
                                    <polygon class="floor__flat-sold" points="207 291,209 267,282 268,282 206,207 205,206 32,30 33,29 118,1 119,3 294"></polygon>
                                    <polygon class="floor__flat-sold" points="226 30,226 3,397 6,395 155,410 167,401 199,340 198,341 267,285 267,284 200,208 198,207 36"></polygon>
                                    <polygon class="floor__flat-sold" points="559 1,561 163,505 162,501 172,478 163,396 162,395 2"></polygon>
                                    <polygon class="floor__flat-sold" points="740 -1,739 163,648 163,643 170,618 163,565 164,563 159,563 2"></polygon>
                                    <polygon class="floor__flat-sold" points="988 1,987 162,893 163,866 169,865 162,743 162,742 2"></polygon>
                                    <polygon class="floor__flat-sold" points="1088 403,1090 373,1096 365,1097 200,1069 199,1043 188,1038 198,992 197,989 402"></polygon>
                                    <polygon class="floor__flat-sold" points="990 404,826 403,826 373,814 363,812 199,987 202"></polygon>
                                    <polygon class="floor__flat-sold" points="198 698,165 698,164 664,173 638,164 632,164 476,2 478,1 763,199 765"></polygon>
                                    <polygon class="floor__flat-sold" points="741 199,649 198,644 187,617 198,559 197,560 405,743 406"></polygon>
                                    <polygon class="floor__flat-sold" points="466 388,466 355,390 356,389 349,391 276,342 271,341 199,430 197,454 188,457 197,560 198,562 389"></polygon>
                                </svg>
                            </div>
                            <div class="floor__plan floor__plan-type1-base">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type1-base.jpg" />
                            </div>
                            <div class="floor__plan floor__plan-type2-base">
                                <img alt="Планировка" class="floor__img" src="/img/plans/type2-base.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? // INFRA ?>
        <div class="landing__wrap landing__wrap-infra g-lazy" data-lazy="g-bgInfra">
            <div class="landing__line landing__line-infra">
                <div class="infra">
                    <h2 class="infra__h2 g-h1h2">Благоустроенная территория</h2>
                    <div class="infra__content">
                        <div class="infra__item">
                            <div class="infra__text">Двор без машин</div>
                            <div class="infra__icon g-icon g-icon-road"></div>
                        </div>
                        <div class="infra__item">
                            <div class="infra__text">Детские и спорт площадки во дворе</div>
                            <div class="infra__icon g-icon g-icon-soccer-ball"></div>
                        </div>
                        <div class="infra__item">
                            <div class="infra__text">Озеленение территории</div>
                            <div class="infra__icon g-icon g-icon-trees"></div>
                        </div>
                        <?/*
                            <div class="infra__item">
                                <div class="infra__text">Цокольный этаж для коммерции</div>
                                <div class="infra__icon g-icon g-icon-shopping"></div>
                            </div>
                            */?>
                        <div class="infra__item">
                            <div class="infra__text">Зоны отдыха для семейного досуга</div>
                            <div class="infra__icon g-icon g-icon-family"></div>
                        </div>
                        <div class="infra__item">
                            <div class="infra__text">Более 700 парковочных мест</div>
                            <div class="infra__icon g-icon g-icon-parking"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? // GENPLAN ?>
        <div class="landing__wrap landing__wrap-genplan">
            <div class="landing__line landing__line-genplan">
                <div class="genplan">
                    <h2 class="genplan__h2 g-h1h2">Генплан строительства</h2>
                    <img alt="Генеральный план" class="genplan__img g-lazy" src="/img/empty-min.png" data-lazy="/img/genplan-min.png" />
                </div>
            </div>
        </div>
        <? // PAY ?>
        <div class="landing__wrap landing__wrap-pay g-lazy" data-lazy="g-bgPay">
            <div class="landing__line landing__line-pay">
                <div class="pay">
                    <h2 class="pay__h2 g-h1h2">Способы оплаты</h2>
                    <div class="pay__main">
                        <div class="pay__banks">
                            <h3 class="pay__h pay__h-mortgage"><strong>Ипотека от 5%.</strong><?/*<br class="v-mobile"> Более 26 банков-партнеров*/?></h3>
                            <div class="pay__slider">
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-1">
                                        <div class="pay__bankName">Лицензия 1481 <br>от 11.08.2015</div>
                                    </div>
                                </div>
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-2"><div class="pay__bankName">ВТБ</div></div>
                                </div> -->
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-3"><div class="pay__bankName">Лицензия 3251 <br>от 17.12.2014</div></div>
                                </div>
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-4"><div class="pay__bankName">Уралсиб</div></div>
                                </div> -->
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-5"><div class="pay__bankName">Лицензия 2312 <br>от 19.12.2018</div></div>
                                </div>
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-6"><div class="pay__bankName">Газпромбанк</div></div>
                                </div> -->
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-7"><div class="pay__bankName">Лицензия 3349 <br>от 12.08.2015</div></div>
                                </div>
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-8"><div class="pay__bankName">Райффайзен банк</div></div>
                                </div> -->
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-9"><div class="pay__bankName">Банк Открытие</div></div>
                                </div> -->
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-10"><div class="pay__bankName">Абсолют Банк</div></div>
                                </div> -->
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-11"><div class="pay__bankName">Лицензия 2210 <br>от 02.06.2015</div></div>
                                </div>
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-12"><div class="pay__bankName">Банк Центр-Инвест</div></div>
                                </div> -->
                                <!-- div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-13"><div class="pay__bankName">Банк Кубань-Кредит</div></div>
                                </div> -->
                                <!-- <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-14"><div class="pay__bankName">UniCredit Bank</div></div>
                                </div> -->
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-15"><div class="pay__bankName">Лицензия 2209 <br>от 24.11.2014</div></div>
                                </div>
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-16"><div class="pay__bankName">Лицензия 3368 <br>от 16.12.2014</div></div>
                                </div>
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-17"><div class="pay__bankName">Лицензия 2272 <br>от 28.01.2015</div></div>
                                </div>
                                <div class="pay__bankWrap">
                                    <div class="pay__bank pay__bank-18"><div class="pay__bankName">Лицензия 2590 <br>от 02.08.2015</div></div>
                                </div>
                            </div>
                        </div>
                        <p class="payment__note">Услуги ипотечного кредитования предоставляют ПАО Сбербанк (Москва, ул. Вавилова, д. 19), а также другие банки-партнёры.</p>
                        <div class="pay__capture g-form-request">
                            <h3 class="pay__h">Рассчитать Вам <strong class="g-wsnw">ежемесячный платеж</strong> по&nbsp;ипотеке?</h3>
                            <div class="pay__form g-stretch">
                                <div class="pay__formItem g-stretch__item">
                                    <label for="g-form__field-pay" class="pay__label">Стоимость недвижимости:</label>
                                    <div class="g-form__input g-form__input-pay"><input class="g-form__field g-form__field-pay g-form__field-cost" type="text" placeholder="" id="g-form__field-pay"></div>
                                </div>
                                <div class="pay__formItem g-stretch__item">
                                    <label for="g-form__field-vznos" class="pay__label">Первоначальный взнос:</label>
                                    <div class="g-form__input g-form__input-pay"><input class="g-form__field g-form__field-pay g-form__field-vznos" type="text" placeholder="" id="g-form__field-vznos"></div>
                                </div>
                                <div class="pay__formItem g-stretch__item">
                                    <label for="g-form__field-srok" class="pay__label">Срок кредита:</label>
                                    <div class="g-form__input g-form__input-pay"><input class="g-form__field g-form__field-pay g-form__field-srok" type="text" placeholder="" id="g-form__field-srok"></div>
                                </div>
                                <div class="pay__formItem g-stretch__item">
                                    <label for="g-form__field-srok" class="pay__label">Ваше имя:</label>
                                    <div class="g-form__input g-form__input-pay"><input class="g-form__field g-form__field-name" type="text" placeholder=""></div>
                                </div>
                                <div class="pay__formItem g-stretch__item">
                                    <label for="g-form__field-srok" class="pay__label">Ваш телефон:</label>
                                    <div class="g-form__input g-form__input-pay"><input class="g-form__field g-form__field-phone" type="tel" placeholder=""></div>
                                </div>
                            </div>
                            <table class="g-form__save">
                                <tr>
                                    <td><input class="g-form__privacy" type="checkbox" title="Принять соглашение об обработке персональных данных" checked /></td>
                                    <td><span class="g-form__saveText">Даю <span class="g-form__agreement g-link">согласие на обработку персональных данных</span></span></td>
                                </tr>
                            </table>
                            <div class="pay__btn g-btn g-form__submit">Отправить запрос<br class="v-mobile"> к специалисту по ипотеке</div>
                        </div>
                    </div>
                    <div class="pay__list g-stretch">
                        <div class="pay__item g-stretch__item">
                            <h3 class="pay__h pay__h-item g-icon g-icon-matkap">Мат. капитал</h3>
                            <div class="pay_content">
                                <div class="pay__text">Вы можете использовать материнский капитал для оплаты 1 взноса.</div>
                                <div class="pay__btn g-btn g-recall" data-h="Купить квартиру за мат.капитал" data-btn="Оставить заявку" data-from="Кнопка «Купить квартиру за мат.капитал» в блоке «Способы оплаты»">Купить квартиру<br>за мат.капитал</div>
                            </div>
                        </div>
                        <div class="pay__item g-stretch__item">
                            <h3 class="pay__h pay__h-item g-icon g-icon-installment">Рассрочка</h3>
                            <div class="pay_content">
                                <div class="pay__text">1 взнос 30%</div>
                                <div class="pay__text">Срок от 18 месяцев</div>
                                <div class="pay__btn g-btn g-recall" data-h="Купить квартиру в рассрочку" data-btn="Оставить заявку" data-from="Кнопка «Купить квартиру в рассрочку» в блоке «Способы оплаты»">Купить квартиру<br>в рассрочку</div>
                            </div>
                        </div>
                        <div class="pay__item g-stretch__item">
                            <h3 class="pay__h pay__h-item g-icon g-icon-coins">Наличный расчет</h3>
                            <div class="pay_content">
                                <div class="pay__text"><?/*При 100% оплате наличными, мы сделаем Вам скидку!*/?>Приобретение квариры за наличный расчет!</div>
                                <div class="pay__btn g-btn g-recall" data-h="Купить квартиру за наличный расчет" data-btn="Оставить заявку" data-from="Кнопка «Купить квартиру за наличный расчет» в блоке «Способы оплаты»">Купить квартиру<br>за наличный расчет</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?  // Ход строительства
        $smarty->assign("build", $build)->display("templates/build-gallery.tpl");
        ?>
        <? // DEVELOPER ?>
        <div class="landing__wrap landing__wrap-developer g-lazy" data-lazy="g-bgDeveloper">
            <div class="landing__line landing__line-company">
                <div class="company">
                    <div class="company__info">
                        <div class="company__text">
                            <h2 class="company__h2 g-h1h2">Застройщик</h2>
                            <div class="company__caption">Строительная компания ООО «Регион-Строй» работает с 2012 года, ввела в эксплуатацию более 30 000 м2 жилой и коммерческой недвижимости. Обладает большим автопарком строительной техники, проверенными поставщиками и подрядчиками.</div>
                        </div>
                        <img class="company__logo" src="/img/logo_builder.jpg" alt="Застройщик ООО «Регион-Строй»">
                    </div>
                    <div class="company__service">
                        <div class="company__serviceItem company__serviceItem-1">Ипотечный брокер поможет Вам с открытием ипотеки по самым выгодным ставкам.</div>
                        <div class="company__serviceItem company__serviceItem-2">Специалисты отдела продаж помогут подобрать Вам квартиру Вашей мечты.</div>
                        <div class="company__serviceItem company__serviceItem-3">Юристы возьмут на себя всю нагрузку по оформлению квартиры.</div>
                        <div class="company__serviceItem company__serviceItem-4">Сотрудники управляющей компании помогут в решении бытовых вопросов.</div>
                    </div>
                </div>
            </div>
            <div class="landing__line landing__line-documents g-bgWhite">
                <h2 class="documents__h2 g-h1h2">Документы</h2>
                <div class="documents__list g-stretch">
                    <a class="documents__item g-stretch__item" href="/docs/decl_31.07.2019.pdf" target="_blank">
                        <span class="documents__icon g-icon__icon">&#xe905;</span>
                        <span class="documents__text g-icon__text g-link g-link-green">Проектная<br class="v-pc"> декларация</span>
                    </a>
                    <a class="documents__item g-stretch__item" href="/docs/180619_liter13-16_razreshenie.pdf">
                        <span class="documents__icon g-icon__icon">&#xe905;</span>
                        <span class="documents__text g-icon__text g-link g-link-green">Разрешение<br class="v-pc"> на строительство</span>
                    </a>
                    <span class="documents__item documents__item-all g-stretch__item">
                            <span class="documents__icon g-icon__icon">&#xe900;</span>
                            <span class="documents__text g-icon__text g-link g-link-green">Смотреть<br class="v-pc"> все документы</span>
                        </span>
                </div>
            </div>
        </div>
        <? // CONTACTS ?>
        <div class="landing__wrap landing__wrap-contacts g-bgFooter">
            <div class="landing__line landing__line-contacts">
                <div class="contacts">
                    <div class="contacts__item contacts__item-address">
                        <strong>Адрес офиса:</strong><br>
                        Республика Адыгея,<br>
                        ул. Бжегокайская, 19
                    </div>
                    <div class="contacts__item contacts__item-address">
                        <strong>Адрес ЖК:</strong><br>
                        Новая Адыгея, ул. Бжегокайская
                    </div>
                    <div class="contacts__item contacts__item-social">
                        <div class="contracts__vk">
                            <a href="https://vk.com/club169823969" target="_blank">
                                <img src="/img/social/vk.png" alt="">
                            </a>
                        </div>
                        <div class="contracts__instagram">
                            <a href="https://www.instagram.com/zk_vinograd_2/" target="_blank">
                                <img src="/img/social/instagram.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="contacts__item contacts__item-phone">
                        <?=$PHONE?><br>
                        Перезвонить вам?
                    </div>
                    <div class="contacts__item-form g-form-request">
                        <div class="g-form__input g-form__input-footer"><input class="g-form__field g-form__field-footer g-form__field-name" type="text" placeholder="Ваше имя"></div>
                        <br/>
                        <div class="g-form__input g-form__input-footer"><input class="g-form__field g-form__field-footer g-form__field-phone" type="tel" placeholder="Ваш телефон"></div>
                        <br/>
                        <table class="g-form__save g-form__save-footer">
                            <tr>
                                <td><input class="g-form__privacy" type="checkbox" title="Принять соглашение об обработке персональных данных" checked /></td>
                                <td><span class="g-form__saveText">Даю <span class="g-form__agreement g-link">согласие на обработку персональных данных</span></span></td>
                            </tr>
                        </table>
                        <button class="g-form__submit g-btn">Да</button>
                        <input class="g-form__from" type="hidden" value="Форма захвата в футере сайта">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<? // Спиннер загрузки остальных блоков ?>
<div class="landing__wrap landing__wrap-spinner g-bgPurple">
    <div class="g-spinner">
        <?
        /* !!!!!!!!!!!!!!!!!!!!!!
            TODO: для всех картинок, по возможности, необходимо указать высоту и ширину
         !!!!!!!!!!!!!!!!!!!!! */
        ?>
        <img alt="Логотип" class="g-spinner__logo" height="58" width="225" src="/img/logo-min.png"/>
        <img alt="Подождите несколько секунд" class="g-spinner__preloader" height="55" width="55" src="/img/loading-white.svg">
        Загружаем более подробную информацию...
    </div>
</div>

<? // INTOP ?>
<footer class="landing__wrap g-bgWhite">
    <div class="landing__line g-mt30 g-mb30">
        <div class="intop">
            <a href="https://intopweb.ru/" target="_blank" class="intop__link" style="color: #222; text-decoration: none;">
                Сайт разработан <img height="40" width="130" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAAoCAMAAAAFWtJHAAAC+lBMVEVHcEwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQDwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADUqyEAAAD9wzrPpjoAAAAAAAD6tzUAAAD+2zD5nhn7xyTUcBj862XZthYAAAD+10j8zj0AAAAAAAD+518AAAAAAADOvQ753R3q1C/94DX6yRn5yhnkZB/8qxz7sB3+6GD16ZP1wh7HdQ9aThb2whwAAAD4mxf95Vv31kzc0ITwoxj542n9yz/7vR76uh7940302V7qfyT/0SD75B/z1hn+7XX38p33xxr46ov25XnSyovtpR3/8GTshBvPxoX/5T/lbBv+jg7+5Vb/937+5VrwshbdjA7umRn85mjysB3mjwv9iQ/bRiLntBvnpBT9wx3bsRr2tB77uh7yuB3oexr0sTfcqjXcYB7hXSDpmRD++XT7xzHf04Ps1lv44FzjwlH64ErbUhv+40j81CbITBf43kz/9W//00P9xUXYPyPZehf80iTmgSLxx03+tB3uiSbwkiXqgCXypC35uyUAAAD/2xj7xh78yh77xB38wx7/2x38wB390x3+3zD/3Sj/3yX91B35sB/5rB/8zh7/2xb/3h//3B7sdhH+xh/6th/+qyH4pBb+4Tf6vh7+3iz/2hLjXR/gUB78yB38yx3vgxn/5Tj+3zL/4z3+4DT90Rv+1x3/5UT9jRT8lBvhVyHpchzlZxzoax//3UjzpBz+zx75sh7+2S34qhr9qSj+xBr8txf/6FH2mhvwkhz91j7reR3/5S/+4Tv9zhnZRCL91Rj8yib/2B36uB76ux76vRz4shfwjBz5tB/+0yT7ng/9zivqbBD/6Wz4mSbyjiDkXBNSJuKXAAAArXRSTlMAMv0oPBZpNW/16wJ9ayQ5cjcaYh8/HUcFd01l8QkRUXpBdAwvIoJVSqBeWJAPm5ON5NGXK4ZbJt0DRP4KtPn+pP5K/Td2E8n9/L6r/cSITCgazMtZ/YfxlHzpKRO+2tzZPxVoSv7659oc7Obplu8+TZHEYYJogESIonDI67Nnteq0uGH5/YyAlUDV7djHu0u4+NLc/albp63ehOjoecMpy93+i/ixa7vP5+DZ/HK2/pgAAAXVSURBVHhe5dVlcNv2H8fxjyNLVuqYE1myYzu2Y8d21iVp07hx0jVtV1i75v8fM69jZmZmZmb6hpnLzLiOmZnpbpLtGJZk3oNd8mCv0wnu9OB9v/sBUux17MwDL734yBMefvCEx+6feezjGGVHXbD3tI7+ut6OtuXLO/r7+la8f28lRtP/925vruvtraurW7H8041yRXPH3YdidBN6e5tj6to/XS8nrPj1RIyyU/vSEno3HIRR9r9T+gcT2pSEFZeMekFf8+a45qVL17c1bzkbo2uvjq86O2MFX7Rv2Li+re40JBWqkODVsBiUq3EgbrxGlaDxIgXrkqQiH9Ix0f8KzUjaZ3NrZ2drq3zr3PSWnLC8/UwkESHBTeOciKshE+JclCKAZOU8ipprQqoJFDNZh7h9WzfJWlvlq3XTNDmhf8vpSMoiJOQRTUBcMJngy1FQVvQhYJCNaLbFZLDMJeKRoozk3wr8U4imIObknp6eN+I+UxLq9qxGUnYWEtS0G9UgZlfSIA2VIY2ayIWoSBZZkJSfjSjnfJKgOKNnTU/CGjmhreMsjJgglZBxpIRxSKXNJzXiGCIWCePiCXBQPhSHvdGgWBO1Wp4L7esOGjmBRxkF/lECT7siQZI/hiagjCCbVd+wWtEQ9e6PGzb2vX/+yAkTwRKV/5OEycQiiUgcJiGfINt3YX2KxoalS/v3PHrkhF0AA43LnAAv5aevgvDQBEtsPt7Q1NTUGFXf2NhQ3zJtXd+R+NsE6Ghe5gQzHY4UU8j01wTBT+SD7LCmFlmToqX+uIXvfrmu48oMCQiSlDHBQdnpo6DHoNm0m0zZGGJZtzQti2ppWdY4Y9sVB7e89cmBmRJQRhEEM84FAQlaytKm5EyWTQgWIeb4ZYO+nfHO1kNm7bPwk5kZE3xE4DMkSDQRCdzQFZF08zdx782YuvUiAJcdfG7GBLhpfk2GBEc+BTLsC3HHfx2zaFnVtsuhqD40cwIsRBkSYKDBPdFK5MLICTctivluj3euqUbCCMdUcnBLiExIQ9lIZyM63BiJ8LOJQkiRTUhz1aIfFG/fU7X1aiSMeEyVYND8IQn5SAchSFHzwkiVn4U0+3e9Ket6c87iIzCsMIMEB8MigXEgDaPHEE4rx1mdSKdPL8L0LsWSPRb8dAzGSOUB3d3db3fNWXRAJcbKOYu7u5cs+Oi96zBmqrvkUZjz88IbMXaOWbxk6ms9z8zCsESVCI0aKi0YZznHcQwifDEcYZsxBBQ64SsHazQysHFcyAGZiZcYlOs4K3weSYCKBetzWDhdALmSRy3Kb1ZtiOPMgIvnvYh5fnHVls2PYHhOP7wTOHiAYhdrCxpYq5ENBcS5nKZWB8kJNycaNUIOU64r0IiQCUweB12OISxIvvICL69HLi+aJkpMbklAHfKaSgrCBr8QmYSKXVS8HzHauxZ8tPqVRzGs8Xax2JOH2mJXiRuiBajl83SlDgmAX+R5V62bDRrygnaETQDnt0FfYZO0RQagokStrsktKnBJSr8KuhAURRoU1qqNIUzSAhziqp+oev317Q8Nn+DiNfoK1BYpCSwPlPJqk4/1xBNsk9zmoEmtcUJjBXLDrKE012nXFlmBiokatQqcZPMYAbs7lqCFJYJCvyZgYXOQkoD7pg58uHLVHbtjKO0UHi47jEBxMcw5QJ7RpxbEGs7tD8HjhNsu6qy+iBdqGxSm0sK8Uq3FBQhGQzhP69FD8ADGAITSYqvdC94GQ62vsNRpK3UbJQw6seqXtft9vnLnhcNEREQIPjBa6AU4GAAGnmNZnZUvApjxEMLw6nirCNaMKBVfUQif8mE28mptmIWTAeQHzB6jQQu9GWJxhd0HBHi7iIQHfhv4+NpVK3fuuPW86YcgMyGEf9vRr8nD8NT2/XZ+vPb7D4/YvxJj4PapAwN3Xrv91R1ywwdLrsdYOOrJ3wf+WLVq5as71m77YDrGROVzt7384kknvfTCs0/vjv+WPwGxFUCbLVekbQAAAABJRU5ErkJggg==" alt="Разработка и продвижение сайта интернет-агентство InTop">
            </a>
        </div>
    </div>
</footer>

<? // Модальные окошки ?>
<div class="intopModal__wrap">
    <? // Модальное окошко для кнопок обратного звонка ?>
    <div class="intopModal intopModal-request">
        <button class="intopModal__close arcticmodal-close"></button>
        <div class="intopModal__whiteContent">
            <div class="g-form g-form-request">
                <h3 class="g-form__title">Заказать обратный звонок</h3>
                <div class="g-form__input g-icon g-icon-name"><input class="g-form__field g-form__field-name" type="text" placeholder="Ваше имя"></div>
                <br/>
                <div class="g-form__input g-icon g-icon-phone"><input class="g-form__field g-form__field-phone" type="tel" placeholder="Ваш телефон"></div>
                <br/>
                <div class="g-form__input g-icon g-icon-mail"><input class="g-form__field g-form__field-email" type="email" placeholder="Ваш email"></div>
                <br/>
                <div class="g-form__input g-icon g-icon-comment"><textarea class="g-form__field g-form__field-comment" placeholder="Комментарий" rows="4"></textarea></div>
                <br/>
                <table class="g-form__save">
                    <tr>
                        <td><input class="g-form__privacy" type="checkbox" title="Принять соглашение об обработке персональных данных" checked /></td>
                        <td><span class="g-form__saveText">Даю <span class="g-form__agreement g-link">согласие на обработку персональных данных</span></span></td>
                    </tr>
                </table>
                <button class="g-form__submit g-btn">Заказать звонок</button>
                <input class="g-form__from" type="hidden" value="">
            </div>
        </div>
    </div>
    <? // Модальное окошко для функции alert ?>
    <div class="intopModal intopModal-alert">
        <button class="intopModal__close arcticmodal-close"></button>
        <div class="intopModal__whiteContent">
            <div class="alert">
                <div class="alert__html g-mb10 g-mt10"></div>
            </div>
        </div>
    </div>
    <? // Модальное окошко для соглашения на обработку персональных данных ?>
    <div class="intopModal intopModal-privacy">
        <button class="intopModal__close arcticmodal-close"></button>
        <div class="intopModal__whiteContent">
            <div class="g-privacyAgreement">
                <h2 class="g-privacyAgreement__h"><span class="g-upper">Согласие</span><br> посетителя сайта на обработку персональных данных</h2>
                <p> Настоящим свободно, своей волей и в своем интересе даю согласие <strong>ООО «Регион-Строй»</strong>, которое находится по адресу: <strong>385100, Республика Адыгея, аул Старобжегокай, район Тахтамукайский, улица Сливовая (Кубань Тер. Снт), дом 7</strong> (далее – Компания), на автоматизированную и неавтоматизированную обработку моих персональных данных, в том числе с использованием интернет-сервисов Google analytics, Яндекс.Метрика, LiveInternet, Рейтинг Mail.ru, Google Doubleclick в соответствии со следующим перечнем:</p>
                <ul>
                    <li>фамилия, имя;</li>
                    <li>источник захода на сайт <strong>http://жк-виноградъ.рф</strong> (далее – Сайт Компании) и информация поискового или рекламного запроса;</li>
                    <li>данные о пользовательском устройстве (среди которых разрешение, версия и другие атрибуты, характеризующие пользовательское устройство);</li>
                    <li>пользовательские клики, просмотры страниц, заполнения полей, показы и просмотры баннеров и видео;</li>
                    <li>данные, характеризующие аудиторные сегменты;</li>
                    <li>параметры сессии;</li>
                    <li>данные о времени посещения;</li>
                    <li>идентификатор пользователя, хранимый в cookie,</li>
                </ul>
                <p>для целей повышения осведомленности посетителей Сайта Компании о продуктах и услугах Компании, предоставления релевантной рекламной информации и оптимизации рекламы.</p>
                <p>Компания вправе осуществлять обработку моих персональных данных следующими способами: сбор, запись, систематизация, накопление, хранение, обновление, изменение, использование, передача (распространение, предоставление, доступ).</p>
                <p>Настоящее согласие вступает в силу с момента моего перехода на Сайт Компании и действует в течение сроков, установленных действующим законодательством РФ.</p>
            </div>
        </div>
    </div>
    <?/* Модальное окошко для списка документов */?>
    <div class="intopModal intopModal-documents">
        <button class="intopModal__close arcticmodal-close"></button>
        <div class="intopModal__whiteContent">
            <div class="docs">
                <h2 class="docs__h2 g-h1h2">Документы ЖК «Виноград»</h2>
                <ul class="docs__list">
                    <li><a class="docs__link g-link" href="/docs/decl_31.07.2019.pdf" target="_blank">Проектная декларация от 31.07.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/prikaz_30.04.2019_objedinenie_literov.pdf" target="_blank">Приказ об объединении литеров от 30.04.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/prikaz_19.04.2019_ob_otmene_razresheniya_na_stroitelstvo.pdf" target="_blank">Приказ об отмене разрешения на строительство от 19.04.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/zakluchenie_o_dostroike.pdf" target="_blank">Заключение о степени готовности проекта строительства от 24.06.2019</a></li>
                    <li><a class="docs__link g-link" href="/docs/decl_10.06.2019.pdf" target="_blank">Проектная декларация от 10.06.2019</a></li>
                    <li><a class="docs__link g-link" href="/docs/prikaz-ob-obiedinenii-vseh-literov.pdf" target="_blank">Приказ об объединении литеров</a></li>
                    <li><a class="docs__link g-link" href="/docs/prikaz-ob-otmene-razresheniya-na-stroitelstvo.pdf" target="_blank">Приказ об отмене разрешения на строительство</a></li>
                    <li><a class="docs__link g-link" href="/docs/gradplan.pdf" target="_blank">Градостроительный план земельного участка</a></li>
                    <li><a class="docs__link g-link" href="/docs/161025_dogovor.pdf" target="_blank">Договор купли-продажи земельного участка</a></li>
                    <li><a class="docs__link g-link" href="/docs/tu_water.pdf" target="_blank">Технические условия на водоснабжение и водоотведение</a></li>
                    <li><a class="docs__link g-link" href="/docs/tu_electro.pdf" target="_blank">Технические условия для подключения к электросетям</a></li>
                    <li><a class="docs__link g-link" href="/docs/170626_dogovor.pdf" target="_blank">Договор об осуществлении присоединения к электросетям</a></li>
                    <li><a class="docs__link g-link" href="/docs/170713_izmenenia.pdf" target="_blank">Изменения в технические условия от 13.07.2017 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/du_dop.pdf" target="_blank">Доп.соглашение к договору о технологическом присоединении</a></li>
                    <li><a class="docs__link g-link" href="/docs/kadastr_1.pdf" target="_blank">Кадастровая выписка №1</a></li>
                    <li><a class="docs__link g-link" href="/docs/kadastr_2.pdf" target="_blank">Кадастровая выписка №2</a></li>
                    <li><a class="docs__link g-link" href="/docs/Dogovor_uchastiya_v_dolevom_stroitelstve.pdf" target="_blank">Договор участия в долевом строительстве</a></li>
                    <li><a class="docs__link g-link" href="/docs/Pravila_zemelepolzovaniya_i_zastroiki.pdf" target="_blank">Выписка из правил землепользования и застройки</a></li>
                    <li><a class="docs__link g-link" href="/docs/Zakluchenie_o_sootvetstvii.pdf" target="_blank">Заключение о соответствии застройщика и проектной декларации</a></li>
                    <li><a class="docs__link g-link" href="/docs/teh_usl_vodosnabzhenie.pdf" target="_blank">Технические условия на водоснабжение</a></li>
                    <li><a class="docs__link g-link" href="/docs/teh_usl_vodootvedenie.pdf" target="_blank">Технические условия на водоотведение</a></li>
                </ul>
                <h3 class="docs__h3 g-h3">Документы литеров 1-4</h3>
                <ul class="docs__list">
                    <li><a class="docs__link g-link" href="/docs/decl_1_22.03.2019.pdf" target="_blank">Проектная декларация литеров 1-4 от 22.03.2019 г.</a></li>
                    <?/*<li><a class="docs__link g-link" href="/docs/100119_razreshenie_liters-1-2-3-4.pdf" target="_blank">Разрешение на строительство литеров 1-4 от 10.01.2019 г.</a></li>*/?>
                    <li><a class="docs__link g-link" href="/docs/180619_liter1-4_razreshenie.pdf" target="_blank">Разрешение на строительство литеров 1-4 от 19.06.2018 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180629_prikaz_№21.pdf" target="_blank">Приказ к разрешению на строительство 1-4 от 29.06.2018 г.</a></li>
                </ul>
                <h3 class="docs__h3 g-h3">Документы литеров 5-8</h3>
                <ul class="docs__list">
                    <li><a class="docs__link g-link" href="/docs/decl_2_22.03.2019.pdf" target="_blank">Проектная декларация литеров 5-8 от 22.03.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/090119_razreshenie_liters-5-6-7-8.pdf" target="_blank">Разрешение на строительство литеров 5-8 от 10.01.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180619_liter5-8_razreshenie.pdf" target="_blank">Разрешение на строительство литеров 5-8 от 19.06.2018 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180629_prikaz_№22.pdf" target="_blank">Приказ к разрешению на строительство 5-8 от 29.06.2018 г.</a></li>
                </ul>
                <h3 class="docs__h3 g-h3">Документы литеров 9-12</h3>
                <ul class="docs__list">
                    <li><a class="docs__link g-link" href="/docs/decl_3_22.03.2019.pdf" target="_blank">Проектная декларация литеров 9-12 от 22.03.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/090119_razreshenie_liters-9-10-11-12.pdf" target="_blank">Разрешение на строительство литеров 9-12 от 10.01.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180619_liter9-12_razreshenie.pdf" target="_blank">Разрешение на строительство литеров 9-12 от 19.06.2018 г.</a></li>
                </ul>
                <h3 class="docs__h3 g-h3">Документы литеров 13-16</h3>
                <ul class="docs__list">
                    <li><a class="docs__link g-link" href="/docs/decl_4_22.03.2019.pdf" target="_blank">Проектная декларация литеров 13-16 от 22.03.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/090119_razreshenie_liters-13-14-15-16.pdf" target="_blank">Проектная декларация литеров 13-16 с изменениями от 10.01.2019 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180629_liter13-16_declaration.pdf" target="_blank">Проектная декларация литеров 13-16 с изменениями от 29.06.2018 г.</a></li>
                    <li><a class="docs__link g-link" href="/docs/180619_liter13-16_razreshenie.pdf" target="_blank">Разрешение на строительство литеров 13-16 от 19.06.2018 г.</a></li>
                </ul>
            </div>
        </div>
    </div>
    <? // Модальное окошко для планировок ?>
    <div class="intopModal intopModal-flat">
        <button class="intopModal__close arcticmodal-close"></button>
        <div class="flatModal__content g-bgPattern2">
            <div class="flat__header-flatModal">Квартира в ЖК «Виноград», <span class="flat__liters"></span> <?/*(Срок сдачи: <span class="flat__date"></span>) */?></div>
            <div class="flatModal__main">
                <div class="flatModal__item flatModal__item-img">
                    <img class="flat__img-flatModal" src="/img/empty-min.png" alt="Просторная квартира в ЖК «Виноград»">
                </div
                ><div class="flatModal__item flatModal__item-info">
                    <?//<div class="flat__liters"></div>?>
                    <div class="flat__featureContainer-flatModal g-stretch">
                        <div class="flat__feature-flatModal g-stretch__item">
                            <div class="flat__info"></div>
                            <div class="flat__label flat__label-rooms">квартира</div>
                        </div>
                        <br class="v-studio g-hidden">
                        <div class="flat__feature-flatModal g-stretch__item">
                            <div class="flat__info"></div>
                            <div class="flat__label">Общая площадь</div>
                        </div>
                        <br class="v-123kom g-hidden">
                        <div class="flat__feature-flatModal g-stretch__item">
                            <div class="flat__info"></div>
                            <div class="flat__label">Площадь комнат</div>
                        </div>
                        <div class="flat__feature-flatModal flat__feature-flatModalKitch g-stretch__item">
                            <div class="flat__info"></div>
                            <div class="flat__label">Площадь кухни</div>
                        </div>
                    </div>
                    <div class="flat__price"></div>
                    <div class="contacts__item-form g-form-request">
                        <div class="g-form__input g-form__input-modal"><input class="g-form__field g-form__field-modal g-form__field-name" type="text" placeholder="Ваше имя"></div>
                        <br class="v-mobile" />
                        <div class="g-form__input g-form__input-modal"><input class="g-form__field g-form__field-modal g-form__field-phone" type="tel" placeholder="Ваш телефон"></div>
                        <br/>
                        <table class="g-form__save g-form__save-modal">
                            <tr>
                                <td><input class="g-form__privacy" type="checkbox" title="Принять соглашение об обработке персональных данных" checked /></td>
                                <td><span class="g-form__saveText">Даю <span class="g-form__agreement g-link">согласие на обработку персональных данных</span></span></td>
                            </tr>
                        </table>
                        <button class="g-form__submit g-form__submit-modal g-btn">Оставить заявку</button>
                        <input class="g-form__from request__from-flatModal" type="hidden" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script>
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(49970785, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        trackHash: true
    });
</script>

<script>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery-3.4.1.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.placeholder.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.arcticmodal.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/slick.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.scrollTo.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.intop.menu.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.intop.slider.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/vendor/jquery.maskedinput.min.js"), "\n\n";?>
    <?=file_get_contents(__DIR__ . "/js/main.min.js"), "\n\n";?>
</script>

<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '2d478dc92d0225b7642693d891565612');

    window.onRoistatAllModulesLoaded = function() {
        window.roistat.leadHunter.onAfterSubmit = function(leadData) {
            ym(49970785, 'reachGoal', 'hunterlead');
            gtag('event', 'target', {'event_category': 'leads', 'event_action': 'Leadhunter'});
        }
    };
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137593841-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-137593841-2');
</script>

<script type="text/javascript">
    (function(w, p) {
        var a, s;
        (w[p] = w[p] || []).push(
            "uid=70152",
            "site="+encodeURIComponent(window.location.href)
        );
        a = document.createElement('script'); a.type = 'text/javascript'; a.async = true;   a.charset='utf-8';
        a.src = 'https://panel.smartpoint.pro/collectwidgets/?'+window.SMP_params.join('&');
        s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(a, s);
    })(window, 'SMP_params');
</script>
</body>
</html>