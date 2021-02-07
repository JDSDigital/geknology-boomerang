<?php

namespace frontend\controllers;

use frontend\models\ContactForm;
use Yii;

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

    public function actionContact($id)
    {
        $model = new ContactForm();
        $subject = '';

        switch ($id) {
            case '1':
                $subject = 'Mantención Lógica PC';
                break;
            case '2':
                $subject = 'Formateo de Notebook PC';
                break;
            case '3':
                $subject = 'Mantención Térmica PC';
                break;
            case '4':
                $subject = 'Reparacion de Bisagras Notebook';
                break;
            case '5':
                $subject = 'Cambio de Disco Duro PC';
                break;
            case '6':
                $subject = 'Formateo MacBook - IMAC';
                break;
            case '7':
                $subject = 'Mantención Térmica Mac';
                break;
            case '8':
                $subject = 'Cambio de Disco Duro MacBook - IMAC';
                break;
            
            default:
                $subject = 'soporte técnico';
                break;
        }

        $model->subject = 'Estoy interesado en '.$subject;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('../site/contact', [
                'model' => $model,
            ]);
        }
    }

}
