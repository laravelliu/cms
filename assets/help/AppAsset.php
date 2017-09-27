<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets\help;

use yii\web\AssetBundle;
/**
 * @author lfs
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/helpResource';
    public $css = [
        'css/iconfont.css',
        'css/footer.css',
        'css/nav.css',
        'css/font-awesome.min.css',
        'css/main.css',
    ];

    public $js = [
        'js/nav.js',
    ];

    public $depends = [
        'app\assets\BaseAsset'
    ];

    //加载js
    public static function addJs($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'app\assets\help\AppAsset']);
    }

    //加载css
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'app\assets\help\AppAsset']);
    }
}
