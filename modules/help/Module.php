<?php

namespace app\modules\help;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\help\controllers';
    public $layoutPath = 'app\modules\help\views\layouts';
    public $layout = 'main.php';

    public function init()
    {
        parent::init();

        require_once(__DIR__ . '/config/constants.php');

        \Yii::configure($this->module, require(__DIR__ . '/config/config.php'));
    }
}
