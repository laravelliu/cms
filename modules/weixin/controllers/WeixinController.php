<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/8/3
 * Time: 17:01
 */

namespace app\modules\weixin\controllers;
use yii\web\Controller;
use Yii;


class WeixinController extends Controller
{
    public function actionToken()
    {
        $get = Yii::$app->request->get();
        $signature = $get['signature'];
        $echostr = $get['echostr'];
        
        if(empty($echostr)){
            return false;
        }
        
        $sort = sort($get,SORT_STRING);
        $str = '';
        foreach ($sort as $k => $v){
            $str .=$v;
        }
        $sig =sha1($str);

        if($sig == $signature){
            return $echostr;
        }else{
            return false;
        }
    }

}