<?php

namespace app\controllers;
use yii;
use linslin\yii2\curl;

class LfsController extends \yii\web\Controller
{
    public $key = 'CGSISIJM';
    public $url = 'http://weixin.test.cebbank.com/pwap/MPGetOpenId.do?code=';

    public function actionIndex()
    {
        $data = Yii::$app->request->get();
        //Yii::info(json_encode($data));

        $code = $data['code'];

        $this->redirect(['/lfs/curl', 'code'=>$code]);
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
        $sign = str_replace('+','%2B',$sign);

        $curl = new curl\Curl();
        $response = $curl->get($this->url . $code . "&sign=" . $sign);

        $xml = simplexml_load_string($response);
        var_dump($xml);exit;
    }
}
