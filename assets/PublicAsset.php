<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 14:24
 */

namespace app\assets;

use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin';
    public $css = [
        'css/bootstrap.min.css',
        'font-awesome/css/font-awesome.css',
        'css/animate.css',
        'css/style.css',
    ];
    
    public $js = [
        "js/jquery-2.1.1.js",
        "js/bootstrap.min.js"
    ];
}