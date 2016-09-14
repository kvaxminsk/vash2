<?php

namespace app\controllers;
use yii\easyii\modules\carousel\models\Carousel;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
//        $documents = Carousel::find()->where(['status'=>'1', 'slider_type'=>'2'])->all();

        return $this->render('index',[
//            'documents'=>$documents,
        ]);
    }
}