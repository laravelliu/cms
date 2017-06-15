<?php
namespace  app\controllers;
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
        return $this->render('list');
    }
}