<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php /*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end(); */
    ?>

        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar--bold navbar-light bg-default ">
        <div class="container navbar-container">
            <!-- Brand/Logo -->
            <?=
                Html::a(
                    Html::img('@web/images/logo/logo-1-b.png', ['class' => 'img-responsive', 'alt' => 'Geknology']),
                    ['site/index'],
                    ['class' => 'navbar-brand']
                )
            ?>
            
            <div class="d-inline-block">
                <!-- Navbar toggler  -->
                <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <div class="collapse navbar-collapse align-items-center justify-content-end" id="navbar_main">

                <!-- Navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item <?= (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') ? 'active' : '' ?>">
                        <?= Html::a('Inicio', 
                            ['site/index'], 
                            ['class' => 'nav-link']); 
                        ?>
                    </li>
                    <li class="nav-item dropdown <?= (Yii::$app->controller->id == 'services') ? 'active' : '' ?>">
                        <?= Html::a(
                            'Servicio Técnico',
                            [''],
                            [
                                'class' => 'nav-link dropdown-toggle',
                                'data-toggle' => 'dropdown',
                                'aria-haspopup' => 'true',
                                'aria-expanded' => 'false',
                            ]); 
                        ?>

                        <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden" aria-labelledby="navbar_1_dropdown_1">
                            <div class="list-group rounded">
                                <?= 
                                    Html::a(
                                        '<div class="list-group-content">
                                            <div class="list-group-heading heading heading-6 mb-1">Servicio Técnico PC</div>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                                        </div>', 
                                        ['services/pc'], 
                                        ['class' => 'list-group-item list-group-item-action d-flex align-items-center']
                                    ); 
                                ?>
                                <?= 
                                    Html::a(
                                        '<div class="list-group-content">
                                            <div class="list-group-heading heading heading-6 mb-1">Servicio Técnico MAC</div>
                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor</p>
                                        </div>', 
                                        ['services/mac'], 
                                        ['class' => 'list-group-item list-group-item-action d-flex align-items-center']
                                    ); 
                                ?>
                            </div>
                        </div>
                    </li>
        
                    <li class="nav-item <?= (Yii::$app->controller->action->id == 'web') ? 'active' : '' ?>">
                        <?= Html::a('Desarrollo Web', ['site/web'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item <?= (Yii::$app->controller->action->id == 'contact') ? 'active' : '' ?>">
                        <?= Html::a('Contacto', ['site/contact'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item <?= (Yii::$app->controller->action->id == 'about') ? 'active' : '' ?>">
                        <?= Html::a('Sobre Nosotros', ['site/about'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item <?= (Yii::$app->controller->action->id == 'rating') ? 'active' : '' ?>">
                        <?= Html::a('¡Califícanos!', ['site/index'], ['class' => 'nav-link']); ?>
                    </li>
                </ul>

            </div>

        </div>
    </nav>


    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-5">
                    <div class="col">
                        <img src="./images/logo/logo-1-c.png">
                        <span class="clearfix"></span>
                        <span class="heading heading-sm c-gray-light strong-400">One template. Infinite solutions.</span>
                        <p class="mt-3">
                            All the components included in Boomerang are built to the same level of quality as Bootstrap and highlighted with several example pages.
                        </p>

                        <div class="copyright mt-4">
                            <p>
                                Copyright &copy; 2018                                <a href="https://webpixels.io" target="_blank">
                                    <strong>Webpixels</strong>
                                </a> -
                                All rights reserved
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                           Support
                       </h4>

                       <ul class="footer-links">
                            <li><a href="#" title="Help center">Help center</a></li>
                            <li><a href="#" title="Discussions">Discussions</a></li>
                            <li><a href="#" title="Contact support">Contact</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Jobs">FAQ</a></li>
                        </ul>
                     </div>
                </div>

                <div class="col-lg-2">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            Company
                        </h4>

                        <ul class="footer-links">
                             <li>
                                 <a href="#" title="Home">
                                     Home
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="About us">
                                     About us
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Services">
                                     Services
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Blog">
                                     Blog
                                 </a>
                             </li>
                             <li>
                                 <a href="#" title="Contact">
                                     Contact
                                 </a>
                             </li>
                         </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            Get in touch
                        </h4>

                        <ul class="social-media social-media--style-1-v4">
                            <li>
                                <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Github">
                                    <i class="fa fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
