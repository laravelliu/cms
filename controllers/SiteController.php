<?php

namespace app\controllers;

use app\models\CompanyModel;
use app\models\ContactAR;
use app\models\RegisterForm;
use Yii;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use yii\helpers\Url;

class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        $actions = [];

        if (YII_ENV_PROD) {
            $actions['captcha'] = [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,    //如果测试环境总是一个验证码
                'height' => 34,
                'width' => 120,
                'minLength' => 6,
                'maxLength' => 8
            ];
        }

        return $actions;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new ContactAR();
        return $this->render('index',['model' => $model]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'public_main';

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Url::to(['/hou']));
        }

        $model = new LoginForm();

        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                $re = Yii::$app->request->get('re',null);

                if (!empty($re)) {
                    return $this->redirect($re);
                } else {
                    return $this->goBack();
                }
            }
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    

    /**
     * 错误页面
     * @author: liuFangShuo
     */
    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;

        if ($exception instanceof Exception) {
            $name = $exception->getName();
        } else {
            $name = Yii::t('yii', '出错了，出错了 :(');
        }

        $code = 0;

        if ($exception) {
            $message = Yii::t('yii', '肯定是哪个程序猿偷懒了。');
            $code = $exception->statusCode;
        } else {
            $message = Yii::t('yii','测试');
        }
        if(in_array($code,['404','500'])){
            return $this->render($code);
        }

        return $this->render('error', [
            'name' => $name,
            'message' => $message,
            'exception' => $exception,
        ]);
    }

    /**
     * 登录页面
     * @author: liuFangShuo
     */
    public function actionRegister()
    {
        $this->layout = 'public_main';

        $model = new RegisterForm();
        if (Yii::$app->request->isPost) {
            if ($model->load(Yii::$app->request->post()) && $model->register()) {
                return $this->redirect(Url::to(['/login']));
            } else {
                $model->getErrors();
            }
        }

        return $this->render('register', ['model' => $model]);
    }

    /**
     * 搜索
     * @author: liuFangShuo
     */
    public function actionSearch()
    {
        /*$keyword = Html::encode(Yii::$app->request->get('keyword',null));
        if(empty($keyword)){
            return $this->redirect(Url::to(['/']));
        }*/
        
        return $this->render('search');
    }

}
