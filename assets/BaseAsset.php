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
        '//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css',
    ];

    public $js=[
        '//code.jquery.com/jquery-2.2.4.min.js',
        '//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js',
    ];
}