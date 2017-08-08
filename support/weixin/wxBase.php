<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/8/3
 * Time: 16:52
 */

namespace app\support\weixin;
use Yii;
use linslin\yii2\curl;
use yii\base\Component;

class wxBase extends Component
{
    public $AppID = 'wx68b0e4f75b56210d';
    public $AppSecret = '37bd18487e34a8c4e4156765f6193ab8';

    protected $access_token;
    protected $access_token_time = null;

    public function __construct(array $config)
    {
        parent::__construct($config);

        //获取token
        if(empty($this->access_token_time) || time() >= $this->access_token_time)
        {
            $this->getToken();
        }
    }

    /**
     * 获取token
     * @return mixed|null
     * @author: liuFangShuo
     */
    public function getToken()
    {
        $time = time();
        Yii::$app->session->open();
        $tokenTime = Yii::$app->session->get(WX_TOKEN_TIME);

        if (!empty($tokenTime) && $tokenTime > $time) {
            $token = Yii::$app->session->get(WX_TOKEN);
        } else  {
            $token = null;
            $tokenTime = $time;
            $model = new curl\Curl();

            //默认直接json_decode
            $resArr= $model->get(WX_URL."/cgi-bin/token?grant_type=client_credential&appid=".$this->AppID."&secret=".$this->AppSecret);

            if (!empty($resArr)) {

                if (isset($resArr['access_token'])) {
                    $token = $resArr['access_token'];
                    $tokenTime = $resArr['expires_in']+$time;

                    //存储在session
                    Yii::$app->session->set(WX_TOKEN, $resArr['access_token']);
                    Yii::$app->session->set(WX_TOKEN_TIME, $tokenTime);
                }
            }
        }

        $this->access_token = $token;
        $this->access_token_time = $tokenTime;

        return $token;
    }

    /**
     * 获取ips
     * @author: liuFangShuo
     */
    public function getWxIps()
    {
        $model = new curl\Curl();
        $resArr = $model->get(WX_URL."/cgi-bin/getcallbackip?access_token=".$this->acccess_token);

        $ips = [];
        if (!empty($resArr)) {
            $ips = $resArr['ip_list'];
        }

        return $ips;
    }
}