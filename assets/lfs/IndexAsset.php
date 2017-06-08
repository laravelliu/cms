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
        'css/style.css',
        'css/responsive.css',
        'css/colors/color1.css',
        'css/animate.css',
    ];

    public $js = [
        'js/owl.carousel.js',
        'js/jquery-waypoints.js',
        'js/jquery-countTo.js',
        'js/jquery.cookie.js',
        'js/jquery-validate.js',
        'js/main.js',
        'js/jquery.themepunch.tools.min.js',
        'js/jquery.themepunch.revolution.min.js',
        'js/slider.js',
    ];
    
    public $depends = [
        'app\assets\BaseAsset'
    ];
}