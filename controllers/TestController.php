<?php
namespace app\controllers;
use yii\web\Controller;

/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/21
 * Time: 17:04
 */
class TestController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionFileupload()
    {
        var_dump($_SERVER);
        var_dump($_REQUEST);
        var_dump($_POST);
    }
}