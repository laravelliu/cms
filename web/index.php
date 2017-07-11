<?php
$host = $_SERVER['HTTP_HOST'];
$hostArr = explode('.', $host);

if(count($hostArr) == 2){
    $domain = $host;
} else {
    $domain = $hostArr['1'].'.'. $hostArr['2'];
}

ini_set('session.cookie_path', '/');    //子域名共享session
ini_set('session.cookie_domain', '.' . $domain);

//设置domain
define('DOMAIN',$domain);

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') ?  getenv('YII_DEBUG') : true);
defined('YII_ENV') or define('YII_ENV',  getenv('YII_ENV') ?  getenv('YII_ENV') : 'dev');

require(__DIR__ . '/../config/constants.php');
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
