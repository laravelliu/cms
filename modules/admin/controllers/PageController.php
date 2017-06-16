<?php

namespace app\modules\admin\controllers;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAdd()
    {
        return $this->render('add');
    }

}
