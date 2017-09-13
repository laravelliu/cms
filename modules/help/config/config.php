<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/9/1
 * Time: 09:59
 */


$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=help',
    'username' => 'root',
    'password' => '1',
    'charset' => 'utf8',
];


return [
    'components' => [
        'help_db' => $db,
    ]
];