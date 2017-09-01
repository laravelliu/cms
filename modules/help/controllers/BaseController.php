<?php

namespace app\modules\help\controllers;

use frontend\models\AppInfo;
use frontend\models\Enterprise;
use common\models\User;
use Yii;
use app\support\helpers\UnitHelper;
use yii\helpers\Url;
use common\models\ApiModel;
use common\models\api\ServiceApiModel;

/**
 * 基础控制器类
 *
 */
class BaseController extends \yii\web\Controller
{

    protected $user_info; // 用户信息数组

    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;

    /**
     * 请求对象
     * @var \yii\web\Request
     */
    public $request = null;

    /**
     * 响应对象
     * @var \yii\web\Response
     */
    public $response = null;

    /**
     * 视图变量
     * @var array
     */
    protected $_data = [];

    /**
     * 当前登录的用户对象
     * @var yii\web\User
     */
    protected $_user = null;

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'minLength' => 4,
                'maxLength' => 4
            ],
        ];
    }

    /**
     * 构造函数
     * @param type $id
     * @param type $module
     * @param array $config
     */
    function __construct($id, $module, $config = [])
    {
        parent::__construct($id, $module, $config = []);
        $this->_init();
    }

    /**
     * 初始化
     */
    private function _init()
    {
        $this->request = Yii::$app->request;
        $this->response = Yii::$app->response;
        Yii::$app->session->open();
        $this->_user = Yii::$app->user;

    }


    /**
     * 当前请求的 url
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        return Yii::$app->request->getUrl();
    }


    /**
     * 获取当前用户信息
     * @return
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * 获取一个指定的参数
     * @param string $key 参数名称
     * @param string $default 如果参数不存在的默认值
     * @return mixd
     */
    public function post($key = null, $default = null)
    {
        return $this->request->post($key, $default);
    }

    /**
     * 获取多个指定的参数
     * @param array $keys
     * @return array
     */
    public function only(array $keys)
    {
        $post = $this->request->post();
        return UnitHelper::onlyValue($post, $keys);
    }

    /**
     * 成功信息
     * @param array $data 成功后返回的数据
     * @return array
     */
    public function success($data = array())
    {
        return $data;
    }

    /**
     * 失败信息
     * @param string $msg 错误信息
     * @param int $code 错误代码
     * @return array
     */
    public function failure($msg, $code = 99, $status = 400)
    {
        //$this->response->setStatusCode($status);
//		throw new \yii\base\UserException($msg, $code);
        $data = array(
            'code' => $code,
            'msg' => $msg
        );
        return $data;
    }


    /**
     * 显示一个提示页面，然后重定向浏览器到新地址
     *
     * @param string $message 信息
     * @param string $caption 标题
     * @param string $url 链接地址
     *
     * @return string
     */
    public function redirectMessage($message, $caption = '提示', $url = '', $viewname = '/site/message')
    {
        $url = $this->getUserHomeUrl();
        $data = array(
            'caption' => $caption,
            'message' => $message,
            'url' => empty($url) ? '/' : $url,
        );
        $response = $this->render($viewname, $data);
        return $response;
    }

    /**
     * 校验是否登陆
     * @param bool $isRedirect
     * @param string $re
     * @return bool
     */
    protected function _checkLogin($isRedirect = true, $re = '')
    {
        $authToken = isset($_COOKIE['authtoken']) ? $_COOKIE['authtoken'] : '';

        // token不存在,则未登录
        if (!empty($authToken)) {

            $m_api = new ApiModel();
            $valid_sid = $m_api->checkValidForSid($authToken);

            // token是否失效
            if ($valid_sid) {
                $apiUserInfo = $m_api->getUserInfo($valid_sid['sid']);

                //做一下登录
                if (!isset(Yii::$app->user->identity) || empty(Yii::$app->user->identity)) {
                    $user_M = new User();
                    $apiUserInfo['sid'] = $authToken;
                    $user = $user_M->getUserObj($apiUserInfo);

                    Yii::$app->getUser()->login($user, 0);

                    //第三方过来的客户
                    setcookie('authuid', Yii::$app->user->identity->user['email'], time() + AUTHTOKEN, '/', COOKIE_DOMAIN);
                }

                Yii::$app->user->identity->user = $apiUserInfo;

                Yii::$app->user->identity->user['sid'] = $valid_sid['sid'];
                Yii::$app->user->identity->user['email'] = isset(Yii::$app->user->identity->user['email']) ? Yii::$app->user->identity->user['email'] : str_replace('"', '', $valid_sid['authUid']);
                Yii::$app->user->identity->user['userId'] = isset(Yii::$app->user->identity->user['uid']) ? Yii::$app->user->identity->user['uid'] : $valid_sid['userId'];


                return true;
            }

            //清除cookie
            $user = new User();
            $user->unsetLoginCookie();
        }

        if ($isRedirect) {

            $re = Yii::$app->request->getUrl();
            Yii::$app->getResponse()->redirect(Url::to(['/site/login', 're' => $re], 302))->send();
            exit;

        } else {
            return false;
        }

    }

}
