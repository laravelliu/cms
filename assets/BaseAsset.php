<?php
namespace app\assets;
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/8
 * Time: 17:35
 */
use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = null;
    
    public $css=[
        YII_ENV_DEV ? 'lib/bootstrap/css/bootstrap.css':'lib/bootstrap/css/bootstrap.min.css',
    ];

    public $js=[
        YII_ENV_DEV ? 'lib/jquery/jquery.js':'lib/jquery/jquery.min.js',
        YII_ENV_DEV ? 'lib/bootstrap/js/bootstrap.js':'lib/bootstrap/js/bootstrap.min.js',
    ];
}