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

    ];

    public $js=[

    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}