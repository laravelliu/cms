<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/9/1
 * Time: 09:59
 */


$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=121.41.17.172;dbname=testin_help',
    'username' => 'testin_mysql',
    'password' => 'X9kgVen1gb',
    'charset' => 'utf8',
];


return [
    'components' => [
        'help_db' => $db,
    ]
];