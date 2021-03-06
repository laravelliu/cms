<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/8/3
 * Time: 17:01
 */

namespace app\modules\weixin\controllers;
use yii\web\Controller;
use app\support\weixin\wxBase;
use Yii;


class WeixinController extends Controller
{
    public function actionToken()
    {
        return false;
        $get = Yii::$app->request->get();
        $signature = $get['signature'];

        $token = 'lfszuoceshi';
        $timestamp = $get['timestamp'];
        $notice = $get['nonce'];

        $echostr = $get['echostr'];

        if(empty($echostr)){
            return false;
        }
        $arr = [$token,$timestamp,$notice];

        sort($arr,SORT_STRING);
        $str = '';
        foreach ($arr as $k => $v){
            $str .=$v;
        }

        $sig =sha1($str);

        if($sig == $signature){
            return $echostr;
        }else{
            return false;
        }
    }
    
    public function actionTest()
    {
        $model = new wxBase();
        $token = $model->getToken();
        
        var_dump($token);
    }

}