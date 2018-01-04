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
var_dump($code);exit;
        //$this->redirect(['/lfs/curl', 'code'=>$code]);
    }

    /**
     * $this->getBytes(strtoupper(md5("[CGSISIJM, abcdef]")))
     * @author: liuFangShuo
     */
    public function actionCurl()
    {
        $arr = [];
        $code = Yii::$app->request->get('code',null);
        //$code='abcdef';
        $arr[] = $code;
        $arr[] = $this->key;

        sort($arr);
        $str = implode(', ',$arr);
        $str = '['.$str.']';

        //转码utf-8
        $encode = mb_detect_encoding($str, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
        $str_encode = mb_convert_encoding($str, 'UTF-8', $encode);

        var_dump(md5($str_encode));
        $sign = base64_encode(strtoupper(md5($str_encode)));
        $sign = str_replace('+','%2B',$sign);

        $curl = new curl\Curl();
        $response = $curl->get($this->url . $code . "&sign=" . $sign);

        //$xml = simplexml_load_string($response);
        var_dump($response);exit;
    }

    public  function getBytes($string) {
        $bytes = array();
        for($i = 0; $i < strlen($string); $i++){
            $bytes[] = ord($string[$i]);
        }
        return $bytes;
    }

    public  function toStr($bytes) {
        $str = '';
        foreach($bytes as $ch) {
            $str .= chr($ch);
        }

        return $str;
    }

    /**
     * 转换一个int为byte数组
     * @param $byt 目标byte数组
     * @param $val 需要转换的字符串
     *
     */

    public function integerToBytes($val) {
        $byt = array();
        $byt[0] = ($val & 0xff);
        $byt[1] = ($val >> 8 & 0xff);
        $byt[2] = ($val >> 16 & 0xff);
        $byt[3] = ($val >> 24 & 0xff);
        return $byt;
    }
}
