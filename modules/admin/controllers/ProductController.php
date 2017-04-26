<?php

namespace app\modules\admin\controllers;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
