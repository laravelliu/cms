<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:12
 */

namespace app\controllers;


class ProductController extends BaseController
{
    public function actionList()
    {
        return $this->render('list');
    }

}