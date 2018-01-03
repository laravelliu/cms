<?php

namespace app\controllers;
use yii;
class LfsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = Yii::$app->request->get();
        var_dump($data);exit;
    }

}
