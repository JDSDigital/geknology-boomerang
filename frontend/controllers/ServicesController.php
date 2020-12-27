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
        $dir = './images/brands/';
        $brands = glob($dir . "*");
        
        return $this->render('pc', [
            "brands" => $brands
        ]);
    }

}
