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
                    <li class="nav-item">
                        <?= Html::a('Inicio', ['site/index'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item dropdown">
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
        
                    <li class="nav-item">
                        <?= Html::a('Desarrollo Web', ['site/index'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Contacto', ['site/contact'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Sobre Nosotros', ['site/about'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item">
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

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
