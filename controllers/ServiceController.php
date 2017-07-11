<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:20
 */

namespace app\controllers;


class ServiceController extends BaseController
{

    /**
     * 服务列表
     * @author: liuFangShuo
     */
    public function actionList()
    {
        return $this->render('list');
    }
    
    public function actionDetail()
    {
        return $this->render('detail');
    }
}