<?php

namespace app\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
use app\models\ConfigAR;
use app\models\ConfigModel;
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
        $model = new ConfigModel();
        $model->selfLoad();
        if(Yii::$app->request->isPost){
            if($model->load($post = Yii::$app->request->post()) && $model->validate()){

                var_dump($post);exit;
                $model->saveConfig();
            } else {
                $model->getErrors();
            }
        }

        $this->_data['model'] = $model;
        return $this->render('set',$this->_data);
    }

    /**
     * 上传logo
     * @author: liuFangShuo
     */
    public function actionUpload()
    {

    }
}
