<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/6
 * Time: 16:24
 */

namespace app\assets\admin;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin';
    public $css = [
        'font-awesome/css/font-awesome.css',
        'css/animate.css',

        //提示框css
        'css/plugins/toastr/toastr.min.css',
        
        'css/style.css',

    ];
    
    public $js = [
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        
         //Custom and plugin javascript
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',

        //提示框
        'js/plugins/toastr/toastr.min.js',
        
        '/js/main.js'
    ];
    
    public $depends = [
        'app\assets\BaseAsset'
    ];
}