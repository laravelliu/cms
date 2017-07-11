<?php

//数据库根据主题来配置
if (YII_ENV_PROD) {
    $db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=lfscms',
        'username' => 'lfs',
        'password' => 'lfs@laoliu',
        'charset' => 'utf8',
    ];
    
} else {
    $db = [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=lfscms',
        'username' => 'root',
        'password' => '1',
        'charset' => 'utf8',
        'tablePrefix' => 'lfs_'
    ];
}

return $db;

