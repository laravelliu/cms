<?php

namespace app\modules\admin\controllers;

class KefuController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
