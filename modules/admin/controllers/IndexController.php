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
        return $this->render('index');
    }

    /**
     * 网站设置
     * @author: liuFangShuo
     */
    public function actionSetting()
    {
        return $this->render('set');

    }
}
