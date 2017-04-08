<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layoutPath = '@app\modules\admin\views\layouts';
    public $layout = 'main.php';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        //模块配置，覆盖config
        \Yii::configure($this, require(__DIR__.'/config.php'));
        // custom initialization code goes here
    }
}
