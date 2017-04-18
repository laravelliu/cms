<?php

namespace app\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
use Yii;

class IndexController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $user = Yii::$app->user->identity;
        return $this->render('index');
    }
}
