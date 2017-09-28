<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.png">
</head>
<body>
<?php $this->beginBody() ?>

    <div class="container-fluid">
        <header class="header-area header-wrapper">
                      <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="<?= Url::home()?>">
                                        <img src="/img/logo/logo.png" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="<?= Url::home()?>">Главная</a></li>
                                        <li class="mega-parent"><a href="<?= Url::to('site/shop')?>">Каталог</a>
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
                                        <li class="mega-parent"><a href="<?= Url::to('site/blog2')?>">Наши партнеры</a>

                                        </li>
                                        <li><a href="<?= Url::to('site/blog')?>">Новости</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to('site/about')?>">О компании</a>
                                        </li>
                                        <li>
                                            <a href="<?= Url::to('site/contact')?>">Контакты</a>
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

                                    <li><a href="<?= Url::home()?>">Главная</a></li>
                                    <li>
                                        <a href="<?= Url::to('site/shop')?>">Каталог</a>
                                    </li>
                                    <li><a href="<?= Url::to('site/blog2')?>">Наши партнеры</a></li>
                                    <li><a href="<?= Url::to('site/blog')?>">Новости</a></li>
                                    <li>
                                        <a href="<?= Url::to('site/about')?>">О компании</a>
                                    </li>
                                    <li>
                                        <a href="<?= Url::to('site/contact')?>">Контакты</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MOBILE MENU AREA -->
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
