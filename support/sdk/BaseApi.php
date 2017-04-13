<?php

/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/13
 * Time: 09:58
 */
namespace  app\support\sdk;

abstract class BaseApi
{
    public $api_key = '';
    public $secret_key = '';
    public $host = '';

    protected $rep = [
        'code' => 0,
        'message' => '',
        'data' => ''
    ];

    abstract protected function _getSign();

    /**
     * curl获取数据
     * @param $url
     * @param $params
     * @return bool|mixed
     * @author: liuFangShuo
     */
    protected function _getHttpRequestApi($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_VERBOSE, '1');

        $user_agent = "Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)";

        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);//抓取跳转后的页面
        curl_setopt($ch, CURLOPT_TIMEOUT, 25);    // Timeout

        $return = curl_exec($ch);
        \Yii::trace('Url: ' . $url . ';Req:'.json_encode($params).'; Rep:' . json_encode($return),'Sdk_Api');

        $return_array['STATUS'] = curl_getinfo($ch);
        $return_array['ERROR'] = curl_error($ch);
        $return_array['ERRNO'] = curl_errno($ch);
        curl_close($ch);
        if ($return_array['ERRNO'] > 0 || $return_array['ERROR']) {

            return FALSE;
        }
        return $return;
    }
}