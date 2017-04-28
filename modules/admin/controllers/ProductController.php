<?php

namespace app\modules\admin\controllers;

class ProductController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
