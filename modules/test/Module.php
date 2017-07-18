<?php

namespace app\modules\test;

/**
 * test module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\test\controllers';
    public $layoutPath = '@app\modules\test\views\layouts';
    public $layout = 'main.php';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
