<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
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
                    '@app/views' => '@app/themes/' . THEME_NAME,
                ],
            ],
        ],
        
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'mailer' => require(__DIR__.'/mail.php'),
        
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/rules.php'),
        ],
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
}

/* 是否需要redis */
if (NEED_REDIS) {
    $config['components']['redis'] = [
        'class' => 'yii\redis\Connection',
    ];
}

return $config;
