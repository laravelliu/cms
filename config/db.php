<?php

//数据库根据主题来配置
if (YII_ENV_PROD) {
    $dbs = [
        'basic' =>
            [
                'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=yii2basic',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ]
    ];

    $db = $dbs[THEME_NAME];

} else {
    $dbs = [
        'basic' =>[
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]
    ];

    $db = $dbs[THEME_NAME];
}

return $db;

