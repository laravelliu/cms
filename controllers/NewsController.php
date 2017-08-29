<?php
namespace  app\controllers;
use app\models\NewsAR;

/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:11
 */
class NewsController extends BaseController
{
    public function actionList()
    {
        $model = new NewsAR();
        $list = $model->getNewsList(['category_id' => 4]);

        $this->_data['news'] = $list;
        
        return $this->render('list',$this->_data);
    }
    
    public function actionDetail()
    {
        return $this->render('detail');
    }
}