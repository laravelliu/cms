<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/7/17
 * Time: 15:18
 */

namespace app\assets\test;
use yii\web\AssetBundle;


class TestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'test/js/vue.min.js'
    ];
    /*public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];*/
}