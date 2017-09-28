<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;


$this->title = 'home';
$this->params['breadcrumbs'][] = $this->title;

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


</head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">


    <div class="slider-area youtube-bg ptb-160 mb-80">
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
                                        <img src="/img/product-2/1.jpg" alt="" />
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
                                        <img src="/img/product-2/2.jpg" alt="" />
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
                                        <img src="/img/product-2/3.jpg" alt="" />
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
                                        <img src="/img/product-2/4.jpg" alt="" />
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
                                        <img src="/img/product-2/3.jpg" alt="" />
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
                                                <img src="/img/product-2/5.jpg" alt="" />
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
                                                <img src="/img/product-2/2.jpg" alt="" />
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
                                                <img src="/img/product-2/6.jpg" alt="" />
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
                                                <img src="/img/product-2/3.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/1.jpg" alt="" />
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
                                                <img src="/img/product-2/7.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/7.jpg" alt="" />
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
                                                <img src="/img/product-2/6.jpg" alt="" />
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
                                                <img src="/img/product-2/5.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/3.jpg" alt="" />
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
                                                <img src="/img/product-2/2.jpg" alt="" />
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
                                                <img src="/img/product-2/1.jpg" alt="" />
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
                                                <img src="/img/product-2/7.jpg" alt="" />
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
                                                <img src="/img/product-2/1.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/7.jpg" alt="" />
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
                                                <img src="/img/product-2/5.jpg" alt="" />
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
                                                <img src="/img/product-2/6.jpg" alt="" />
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
                                                <img src="/img/product-2/2.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/3.jpg" alt="" />
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
                                                <img src="/img/product-2/1.jpg" alt="" />
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
                                                <img src="/img/product-2/2.jpg" alt="" />
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
                                                <img src="/img/product-2/4.jpg" alt="" />
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
                                                <img src="/img/product-2/5.jpg" alt="" />
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
                                                <img src="/img/product-2/6.jpg" alt="" />
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
                                                <img src="/img/product-2/7.jpg" alt="" />
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
                                                <img src="/img/product-2/3.jpg" alt="" />
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
                                <img src="/img/blog/1.jpg" alt="">
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
                                <img src="/img/blog/1.jpg" alt="">
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
                                <img src="/img/blog/1.jpg" alt="">
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
                            <li><a href="<?= Url::home()?>">Главная</a></li>
                            <li><a href="<?= Url::to('site/shop')?>">Каталог</a></li>
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


</div>

<?php $this->endBody() ?>
</body>

</html>
    .
<?php $this->endPage() ?>