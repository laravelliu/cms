<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/8
 * Time: 16:38
 */
use app\assets\lfs\IndexAsset;
use app\support\widgets\JsBlock;
use yii\helpers\Html;
$this->title='主题lfs';

IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="header-sticky page-loading">
<?php $this->beginBody(['class'=>'header-sticky page-loading']) ?>

<div class="loading-overlay">
</div>

<!-- Boxed -->
<div class="boxed">
    <!-- /.site-header -->
    <?=$this->render('/layouts/nav')?>

    <?=$content?>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    
    <!-- Footer -->
    <?=$this->render('/layouts/footer');?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


