<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/8
 * Time: 16:38
 */
use app\assets\lfs\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);
$config = $this->params['config'];
$keywords = isset($this->params['keywords']) ? $this->params['keywords'] : '';
$description = isset($this->params['description']) ? $this->params['description'] : '';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(empty($keywords)):?>
        <meta name="keywords" http-equiv="keywords" content="<?=$config->keywords?>">
    <?php else:?>
        <meta name="keywords" http-equiv="keywords" content="<?=$config->keywords . ',' . $keywords?>">
    <?php endif;?>

    <?php if(empty($description)): ?>
        <meta name="description" http-equiv="description" content="<?=$config->description?>">
    <?php else:?>
        <meta name="description" http-equiv="description" content="<?=$description?>">
    <?php endif;?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($config->name . '-' . $this->title) ?></title>
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


