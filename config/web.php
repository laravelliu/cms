<?php
use yii\helpers\ArrayHelper;

$params = require (__DIR__ . '/params.php');
$email = require (__DIR__.'/mail.php');
$vhost = require (__DIR__.'/vhost.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','admin','weixin'],
    'timeZone' => 'Asia/Chongqing', //时区
    'language' => 'zh-CN',//'zh-CN', //目标语言语言包
    //'sourceLanguage' => 'zh-CN',//源语言语言包(默认是英语)
    /*'defaultRoute' => '',*/
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ShhBKWzQwRFUTB9UwRkUP9vFxaDXI85O',
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/' . THEME_NAME,
                'baseUrl' => '@web/themes/' . THEME_NAME,
                'pathMap' => [
                    '@app/views' => '@app/themes/' . THEME_NAME
                ],
            ],
        ],
        
        'user' => [
            'identityClass' => 'app\models\UserAR',
            'enableAutoLogin' => true,
            'enableSession' => true,
            'identityCookie' => [
                'name' => 'lfs',
                'httpOnly' => false,
            ]
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'mailer' => require(__DIR__.'/mail.php'),
        
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                //错误日志
                'error' => [
                    'class' => 'yii\log\EmailTarget',
                    'levels' => ['error', 'warning'],
                    'message' => [
                        'from' => ['565325162@qq.com'],
                        'to' => $params['errorEmail'],
                        'subject' => THEME_NAME . '错误邮件'
                    ],
                    'except' => [
                        'yii\web\HttpException:404',
                        'yii\web\HttpException:400',
                        'yii\base\ErrorException:32'
                    ]
                ],
                //记录日志
                'info' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['trace'],
                    'logFile' => '@app/runtime/logs/info/'.date('Ymd',time()).'.log',
                    'logVars' => [],
                ]
            ],
        ],
        
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/rules.php')
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => ['//code.jquery.com/jquery-2.2.4.min.js']
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => ['//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css'],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => ['//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js']
                ]
            ],
        ],

    ],

    'modules' => [
        //后台管理
        'admin' => [
            'class' => 'app\modules\admin\Module'
        ],
        //活动模块
        'activity' => [
            'class' => 'app\modules\activity\Module'
        ],
        //统计模块
        'total' => [
            'class' => 'app\modules\total\Module'
        ],
        'weixin' => [
            'class' => 'app\modules\weixin\Module'
        ]
    ],

    'params' => $params,
];

/* 测试环境 */
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    //test模块
    $config['bootstrap'][] = 'test';
    $config['modules']['test'] = [
        'class' => 'app\modules\test\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        /*'allowedIPs' => ['127.0.0.1', '::1'],*/
    ];
    
    //如果是测试环境日志保存在本地
    $config['components']['log']['targets']['error'] = [
        'class' => 'yii\log\FileTarget',
        'levels' => ['error', 'warning'],
    ];
    
}


/* 是否需要redis */
if (NEED_REDIS) {
    $config['components']['redis'] = [
        'class' => 'yii\redis\Connection',
    ];
}

//邮件
if (!empty($email)) {
    $config['components']['mailer'] = $email;
}

$config = ArrayHelper::merge($config,$vhost);


return $config;
