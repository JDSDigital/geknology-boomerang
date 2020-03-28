<?php

namespace frontend\controllers;

class ServicesController extends \yii\web\Controller
{
    public function actionMac()
    {
        return $this->render('mac');
    }

    public function actionPc()
    {
        return $this->render('pc');
    }

}
