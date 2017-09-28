<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'contact';
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





    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section mb-80">
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">Контакты</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="<?= Url::home()?>">Главная</a></li>
                                <li>Контакты</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS SETCTION END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- ADDRESS SECTION START -->
        <div class="address-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-pin"></i>
                            <h6>проспект Машерова, дом 11, офис 404,</h6>
                            <h6>город Минск, Республика Беларусь</h6>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-phone"></i>
                            <h6>(+880) 1945 082759</h6>
                            <h6>(+880) 1945 082759</h6>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="contact-address box-shadow">
                            <i class="zmdi zmdi-email"></i>
                            <h6>companyname@gmail.com</h6>
                            <h6>info@domainname.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADDRESS SECTION END -->

        <!-- GOOGLE MAP SECTION START -->
        <div class="google-map-section">
            <div class="container-fluid">
                <div class="google-map plr-185">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
        <!-- GOOGLE MAP SECTION END -->

        <!-- MESSAGE BOX SECTION START -->
        <div class="message-box-section mt--50 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="message-box box-shadow white-bg">
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="blog-section-title border-left mb-30">Сважитесь с нами</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Ваше имя">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Ваш e-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" placeholder="Цель обращения">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Ваш телефон">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="custom-textarea" name="message" placeholder="Ваше сообщение"></textarea>
                                        <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">Отправить</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MESSAGE BOX SECTION END -->
    </section>
    <!-- End page content -->

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer-area">
        <div class="footer-top">
            <div class="container-fluid">
                <div>
                    <div class="footer-top-inner gray-bg">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-sm-4">
                                <div class="single-footer footer-about">
                                    <div class="footer-logo">
                                        <img src="/img/logo/logo.png" alt="">
                                    </div>
                                    <div class="footer-brief">
                                        <p>Компания «Профторг» – дистрибьютор бытовой химии в Беларуси, средств гигиены, хозяйственных товаров, косметики и парфюмерии оптом. Мы работаем уже более 10 лет и занимаем лидирующие позиции на белорусском рынке
                                            благодаря основному принципу работы – взаимовыгодное сотрудничество, в результате которого выигрывают все стороны.</p>
                                        <p>В компании «Профторг» можно купить более 1000 наименований товаров средств гигиены, парфюмерии, косметики и бытовой химии оптом. Клиентская база включает свыше 3000 розничных торговых точек.</p>
                                    </div>
                                    <ul class="footer-social">
                                        <li>
                                            <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-footer">
                                    <h4 class="footer-title border-left">Обратная связь</h4>
                                    <div class="footer-message">
                                        <form action="#">
                                            <input type="text" name="name" placeholder="Ваше имя...">
                                            <input type="text" name="email" placeholder="Ваш е-mail...">
                                            <textarea class="height-80" name="message" placeholder="Ваше сообщение..."></textarea>
                                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- END FOOTER AREA -->
</div>
<!-- Body main wrapper end -->



<?php $this->endBody() ?>
</body>

</html>
    .
<?php $this->endPage() ?>