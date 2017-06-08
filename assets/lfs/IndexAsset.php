<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/26
 * Time: 18:30
 */
namespace app\assets\lfs;
use yii\web\AssetBundle;

class IndexAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/'.THEME_NAME;

    public $css = [
        
    ];

    public $js = [
        
    ];
    
    public $depends = [
        'app\assets\BaseAsset'
    ];
}