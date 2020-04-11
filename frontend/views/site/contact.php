<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
?>

<section class="slice--offset-top parallax-section parallax-section-lg" style="background-image: url(./images/backgrounds/slider/img-44.jpg); background-position: bottom center;">
    <span class="mask mask-dark--style-1"></span>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="py-5 text-center">
                    <h1 class="heading heading-1 c-white strong-400 text-normal">
                        Let's talk about your project
                    </h1>

                    <span class="clearfix"></span>

                    <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center c-white mt-3">
                        Start building fast, beautiful and modern looking websites in no time using our theme.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-2">
            <h3 class="section-title-inner text-normal">
                Contáctanos
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>

        <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center">
            Start building fast, beautiful and modern looking websites in no time using our theme.
        </div>

        <span class="space-xs-xl"></span>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Contact form -->
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'form-default']); ?>
                
                    <?= $form->field($model, 'name')
                        ->textInput(['class' => 'form-control form-control-xl', 'placeholder' => 'Nombre'])
                        ->label(false) ?>

                    <?= $form->field($model, 'email')
                        ->textInput(['class' => 'form-control form-control-xl', 'placeholder' => 'Correo'])
                        ->label(false) ?>

                    <?= $form->field($model, 'subject')
                        ->textInput(['class' => 'form-control form-control-xl', 'placeholder' => 'Asunto'])
                        ->label(false) ?>

                    <?= $form->field($model, 'body')
                        ->textarea([
                            'rows' => 6,
                            'class' => 'form-control form-control-xl', 
                            'placeholder' => 'Mensaje'
                        ])->label(false) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-sm-3">{image}</div><div class="col-sm-9">{input}</div></div>',
                        'options' => [
                            'class' => 'form-control form-control-xl',
                            'placeholder' => 'Código de verificación'
                        ]
                    ])->label(false) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar mensaje', [
                            'class' => 'btn btn-block btn-styled btn-lg btn-base-1 btn-shadow strong-600 mt-4', 
                            'name' => 'contact-button'
                        ]) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
