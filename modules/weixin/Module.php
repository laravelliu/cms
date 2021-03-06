<?php

namespace app\modules\weixin;

/**
 * wx module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\weixin\controllers';
    public $defaultRoute = 'weixin';
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        \Yii::configure($this, require(__DIR__.'/config.php'));
    }
}
