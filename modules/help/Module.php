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

        $this->layoutPath = '@app/modules/help/views/layouts/';

        $this->layout = "main.php";

        \Yii::configure($this->module, require(__DIR__ . '/config/config.php'));
    }
}
