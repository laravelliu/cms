<?php
namespace app\assets\help;
use yii\web\AssetBundle;

/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/9/27
 * Time: 10:13
 */

class EditorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/helpResource';

    public $js = [
        'simditor/scripts/module.js',
        'simditor/scripts/hotkeys.js',
        'simditor/scripts/uploader.js',
        'simditor/scripts/simditor.js',
        'simditor/scripts/beautify-html.js',
        'simditor/scripts/simditor-html.js',
        'simditor/scripts/marked.js',
        'simditor/scripts/to-markdown.js',
        'simditor/scripts/simditor-markdown.js',
        'simditor/scripts/simditor-marked.js',
        'simditor/scripts/simditor-dropzone.js'
    ];
    public $css = [
        'simditor/styles/simditor.css',
        'simditor/styles/simditor-html.css',
        'simditor/styles/help-content.css',
        'simditor/styles/simditor-markdown.css'
    ];

    public $depends = [
        'app\assets\help\AppAsset'
    ];
}