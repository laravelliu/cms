<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/13
 * Time: 09:34
 */

namespace app\controllers;
use app\models\CategoryAR;
use app\models\ConfigModel;
use yii\base\Exception;

class BaseController extends BasicController
{
    
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        //获取配置
        $configModel = new ConfigModel();
        $config = $configModel->getConfig(['id' => 1]);

        if(empty($config) || $config->open == STATUS_FALSE){
            throw new Exception('网站已关闭！！！');
        }
        $this->view->params['config'] = $config;


        //获取分类
        $categoryModel = new CategoryAR();
        $categoryList = $categoryModel->getCategoryList(0, ['sort' => SORT_ASC]);
        $this->view->params['category'] = $categoryList;
        
        
    }

    /**
     * 追加行为
     * @return array
     * @author: liuFangShuo
     */
    public function appendBehaviors()
    {
        return [];
    }
    
}