<?php

namespace app\modules\help\controllers;

use Yii;
use app\support\helpers\UnitHelper;
use app\controllers\BasicController;

/**
 * 基础控制器类
 *
 */
class BaseController extends BasicController
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;


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
     * 获取多个指定的参数
     * @param array $keys
     * @return array
     */
    public function only(array $keys)
    {
        $post = $this->request->post();
        return UnitHelper::onlyValue($post, $keys);
    }

}
