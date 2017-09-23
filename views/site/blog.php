<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

$this->beginPage() ?>

<!doctype html>
<html class="no-js" lang="en" lang="<?= Yii::$app->language ?>">

<head>


        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Template color css -->
    <link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Proftorg</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- START HEADER AREA -->
    <header class="header-area header-wrapper">
        <!-- header-top-bar -->

        <!-- header-middle-area -->
        <div class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo/logo.png" alt="main logo">
                                </a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li><a href="index.html">Главная</a></li>
                                    <li class="mega-parent"><a href="shop.html">Каталог</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Бытовая химия</li>
                                                    <li>
                                                        <a href="#">Средства для стирки</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Средства для посудомоечных машин</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Средства для мытья посуды</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Средства для обуви</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Освежители воздуха</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Средства от насекомых</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Уход за домом</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Гигиена</li>

                                                    <li>
                                                        <a href="">Ватная и бумажная продукция</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Мыло</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Подгузники</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Средства для бритья</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход за волосами</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход за телом для детей</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход за полостью рта</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Косметика и парфюмерия</li>

                                                    <li>
                                                        <a href="">Парфюмерия для женщин</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Парфюмерия для мужчин</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход для детей</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход для женщин</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход для мужчин</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Уход за ногтями</a>
                                                    </li>

                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Хозяйственные товары</li>

                                                    <li>
                                                        <a href="">Инвентарь для уборки дома</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Пакеты для заморозки</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Пакеты для мусора</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Пакеты для фасовки</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Перчатки</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Салфетки/губки</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Другие хозяйственные товары</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="mega-parent"><a href="blog-2.html">Наши партнеры</a>

                                    </li>
                                    <li><a href="blog.html">Новости</a>
                                    </li>
                                    <li>
                                        <a href="about.html">О компании</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search f-left">
                                    <div class="header-search-inner">
                                        <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <form action="#">
                                            <div class="top-search-box">
                                                <input type="text" placeholder="Поиск...">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Главная</a></li>
                                <li>
                                    <a href="shop.html">Каталог</a>
                                </li>
                                <li><a href="#">Наши партнеры</a></li>
                                <li><a href="blog.html">Новости</a></li>
                                <li>
                                    <a href="about.html">О компании</a>
                                </li>
                                <li>
                                    <a href="contact.html">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->

    <!-- START SLIDER AREA -->
    <div class="slider-area youtube-bg bg-opacity-black-60 ptb-160 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-desc-3 slider-desc-4  text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider2-title-2">Какой-то тест</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <h2 class="slider2-title-3">Какой-то текст</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER AREA -->

    <!-- START PAGE CONTENT -->
    <section id="page-content" class="page-wrapper">

        <!-- FEATURED PRODUCT SECTION START -->
        <div class="featured-product-section section-bg-tb pt-80 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-20">
                            <h2 class="uppercase">Новые акции</h2>
                            <h6>Скидки на товары предоставляются в течении месяца.</h6>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product-2/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h6 class="brand-name">Sumsung</h6>
                                    <h3 class="pro-price">-35%</h3>
                                </div>

                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product-2/2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h6 class="brand-name">Sumsung</h6>
                                    <h3 class="pro-price">-50%</h3>
                                </div>

                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product-2/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h6 class="brand-name">Sumsung</h6>
                                    <h3 class="pro-price">-15%</h3>
                                </div>

                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product-2/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h6 class="brand-name">Sumsung</h6>
                                    <h3 class="pro-price">-25%</h3>
                                </div>

                            </div>
                        </div>
                        <!-- product-item end -->
                        <!-- product-item start -->
                        <div class="col-xs-12">
                            <div class="product-item product-item-2">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product-2/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title">
                                        <a href="single-product.html">Product Name</a>
                                    </h6>
                                    <h6 class="brand-name">Sumsung</h6>
                                    <h3 class="pro-price">-28%</h3>
                                </div>

                            </div>
                        </div>
                        <!-- product-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCT SECTION END -->

        <!-- UP COMMING PRODUCT SECTION START -->


        <!-- PRODUCT TAB SECTION START -->
        <div class="product-tab-section section-bg-tb pt-80 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Товары</h2>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="pro-tab-menu pro-tab-menu-2 text-right">
                            <!-- Nav tabs -->
                            <ul class="">
                                <li class="active"><a href="#popular-product" data-toggle="tab">Популярные товары</a></li>
                                <li><a href="#new-arrival" data-toggle="tab">Новые товары</a></li>
                                <li><a href="#best-seller" data-toggle="tab">Лучшее предложение</a></li>
                                <li><a href="#special-offer" data-toggle="tab">Специальное предложение</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- popular-product start -->
                        <div class="tab-pane active" id="popular-product">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- popular-product end -->
                        <!-- new-arrival start -->
                        <div class="tab-pane" id="new-arrival">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- new-arrival end -->
                        <!-- best-seller start -->
                        <div class="tab-pane" id="best-seller">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- best-seller end -->
                        <!-- special-offer start -->
                        <div class="tab-pane" id="special-offer">
                            <div class="row">
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-md-3 hidden-sm col-xs-12">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product-2/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <h6 class="brand-name">Sumsung</h6>

                                        </div>

                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                        <!-- special-offer end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT TAB SECTION END -->

        <!-- BLOG SECTION START -->
        <div class="blog-section-2 pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Последние новости</h2>

                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="row">
                        <!-- blog-item start -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG SECTION END -->

        <!-- NEWSLETTER SECTION START -->
        <div class="newsletter-section section-bg-tb pt-60 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="newsletter">
                            <div class="newsletter-info text-center">
                                <h2 class="newsletter-title">Следить за новостями</h2>
                                <p>Удостоверьтесь, что вы никогда не пропустите наши интересные новости
                                    <br class="hidden-xs">присоединившись к нашей программе рассылки новостей..</p>
                            </div>
                            <div class="subcribe clearfix">
                                <form action="#">
                                    <input type="text" name="email" placeholder="Введите свой е-mail..." />
                                    <button class="submit-btn-2 btn-hover-2" type="submit">подписаться</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWSLETTER SECTION END -->
    </section>
    <!-- END PAGE CONTENT -->

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer-area footer-2">
        <div class="footer-top footer-top-2 text-center ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-logo">
                            <img src="img/logo/logo.png" alt="">
                        </div>
                        <ul class="footer-menu-2">
                            <li><a href="index.html">Главная</a></li>
                            <li><a href="shop.html">Каталог</a></li>
                            <li><a href="blog-2.html">Наши партнеры</a></li>
                            <li><a href="blog.html">Новости</a></li>
                            <li><a href="about.html">О компании</a></li>
                            <li><a href="contact.html">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- END FOOTER AREA -->

    <!-- START QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product clearfix">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="" src="img/product/quickview.jpg">
                                </div>
                            </div>
                            <!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">£160.00</span>
                                        <span class="old-price">£190.00</span>
                                    </div>
                                </div>
                                <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons clearfix">
                                            <li>
                                                <a class="facebook" href="#" target="_blank" title="Facebook">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank" title="Google +">
                                                    <i class="zmdi zmdi-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank" title="Twitter">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="rss" href="#" target="_blank" title="RSS">
                                                    <i class="zmdi zmdi-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .modal-product -->
                    </div>
                    <!-- .modal-body -->
                </div>
                <!-- .modal-content -->
            </div>
            <!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery.nivo.slider js -->
<script src="lib/js/jquery.nivo.slider.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
<?php $this->endBody() ?>
</body>

</html>
    .
<?php $this->endPage() ?>