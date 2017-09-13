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
    public $baseUrl = '@web';
    public $css = [
        'help/css/iconfont.css',
        'help/css/footer.css',
        'help/css/nav.css',
        'help/css/font-awesome.min.css',
        'help/css/main.css',
    ];

    public $js = [
        'help/js/nav.js',
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
