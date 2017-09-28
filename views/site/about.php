<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

$this->title = 'about';
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
    <!-- BREADCRUMBS SETCTION START -->
    <div class="breadcrumbs-section mb-80">
        <div class="breadcrumbs overlay-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-inner">
                            <h1 class="breadcrumbs-title">О Компании</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="<?= Url::home()?>"Главная</a></li>
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

<?php $this->endBody() ?>
</body>

</html>
    .
<?php $this->endPage() ?>