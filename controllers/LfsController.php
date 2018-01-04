<?php

namespace app\controllers;
use yii;
class LfsController extends \yii\web\Controller
{
    public $key = 'CGSISIJM';

    public function actionIndex()
    {
        $data = Yii::$app->request->get();
        Yii::info(json_encode($data));
    }

    public function actionCurl()
    {
        $arr = [];
        $code = Yii::$app->request->get('code',null);
        $arr[] = $code;
        $arr[] = $this->key;
        sort($arr);
        $str = implode(',',$arr);
        //转码utf-8
        $encode = mb_detect_encoding($str, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
        $str_encode = mb_convert_encoding($str, 'UTF-8', $encode);

        $sign = base64_encode(md5($str_encode));
        var_dump($str);
        var_dump($str_encode);exit;
    }
}
