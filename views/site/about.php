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
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Template color css -->
    <link href="/css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
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
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="/img/logo/logo.png" alt="main logo">
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
                                                <input type="text" placeholder="Search here your product...">
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

    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section plr-200 mb-80">
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">О Компании</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Главная</a></li>
                                <li>О компании</li>
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

        <!-- ABOUT SECTION START -->
        <div class="about-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left ">
                            <h2 class="uppercase">Компания ООО "Профторг"</h2>
                            <h6 class="mb-40">Компания ООО "Профторг" – дистрибьютор бытовой химии, средств гигиены, хозяйственных товаров, косметики и парфюмерии в Республике Беларусь.</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-photo p-20 bg-img-1">
                            <img src="/img/others/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="about-description mt-30">
                            <p>Компания ООО «Профторг» была основана в 2006 году. Основная специализация нашей компании — поставка высококачественных средств и инвентаря для уборки нашим Клиентам на всей территории Республики Беларусь и Российской Федерации.
                                Для наилучшего обеспечения наших Клиентов нашей компанией в настоящее время активно развивается логистический складской комплекс в г. Минске. Доставка осуществляется собственным транспортом компании. Наше кредо — оперативность.
                            </p>

                            <p>Бизнес-стратегия нашей компании очень проста: Клиент на первом месте, всегда и во всем. Именно поэтому мы пишем это слово с большой буквы. Наша бизнес-стратегия закреплена корпоративными принципами компании.</p>

                            <p>При работе с поставщиками основными постулатами нашего сотрудничества являются принципы открытого, надежного и перспективного партнерства. Сотрудникам компании мы гарантируем достойные условия труда: обеспеченное необходимым
                                оборудованием комфортное рабочее место, достойную систему мотивации, основанную на вкладе каждого сотрудника в общий результат, своевременную выплату заработной платы, социальный пакет, корпоративные мероприятия.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION END -->

        <!-- TEAM SECTION START -->
        <div class="team-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left ">
                            <h2 class="uppercase">Наша Команда</h2>
                            <h6 class="mb-40">Заберите у меня мои деньги, заводы, станки и фабрики, но оставьте мне моих людей — и вскоре мы создадим заводы лучше прежних. Оставьте мне мои заводы, фабрики и деньги, но заберите у меня моих людей — мой бизнес рухнет,
                                а заводы порастут бурьяном.

                                <br/> Генри Форд</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-team-member">
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/1.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">менеджер</p>
                                    <p class="mb-20">Работает с городом Гродно и гродненской областью.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/2.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">Менеджер</p>
                                    <p class="mb-20">Работает с городом Гомелем и Гомельской областью.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/3.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">менеджер</p>
                                    <p class="mb-20">Работает с городом Брестом и брестской областью.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/1.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">менеджер</p>
                                    <p class="mb-20">Работает с городом Могилевом и могилевской областью.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->

                    </div>
                </div>

                <div class="row">
                    <div class="active-team-member">

                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/2.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">менеджер</p>
                                    <p class="mb-20">Работает с городом Минском и минской областью.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/2.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">коммерческий агент</p>
                                    <p class="mb-20">Работает с клиентами из Российской Федерации и Казахстана.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/2.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">коммерческий агент</p>
                                    <p class="mb-20">Отдел закупок.</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                        <!-- team-member start -->
                        <div class="col-md-12">
                            <div class="team-member box-shadow bg-shape">
                                <div class="team-member-photo">
                                    <img src="/img/team/2.png" alt="">
                                </div>
                                <div class="team-member-info pt-20">
                                    <h5 class="member-name"><a href="#">Nancy holland</a></h5>
                                    <p class="member-position">директор</p>

                                </div>
                            </div>
                        </div>
                        <!-- team-member end -->
                    </div>
                </div>

            </div>
        </div>
        <!-- TEAM SECTION END -->
    </section>
    <!-- End page content -->

    <!-- START FOOTER AREA -->
    <footer id="footer" class="footer-area">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="plr-185">
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


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="/js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/js/bootstrap.min.js"></script>
<!-- jquery.nivo.slider js -->
<script src="/lib/js/jquery.nivo.slider.js"></script>
<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/js/main.js"></script>
<?php $this->endBody() ?>
</body>

</html>
    .
<?php $this->endPage() ?>