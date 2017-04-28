<?php

namespace app\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
use app\models\ConfigAR;
use app\models\ConfigModel;
use Yii;

class CategoryController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
}
