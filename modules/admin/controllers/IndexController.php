<?php

namespace app\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
use app\models\ConfigAR;
use app\models\ConfigModel;
use app\models\SliderAR;
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

                $model->saveConfig();
            } else {
                $model->getErrors();
            }
        }

        $this->_data['model'] = $model;
        return $this->render('set',$this->_data);
    }

    /**
     * 轮播图列表
     * @author: liuFangShuo
     */
    public function actionHomeSlider()
    {

        $model = new SliderAR();
        $slider = $model::find()->where(['is_deleted' => STATUS_FALSE])->orderBy(['update_time' => SORT_DESC, 'is_show' => SORT_DESC])->asArray()->all();

        $this->_data['sliderList'] = $slider;
        return $this->render('images', $this->_data);
    }

    /**
     * 添加轮播图
     * @author: liuFangShuo
     */
    public function actionAddSlider()
    {
        $model = new SliderAR();
        $this->_data['model'] = $model;
        return $this->render('add-slider',$this->_data);
    }
}
