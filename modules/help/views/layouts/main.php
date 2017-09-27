<?php
use app\assets\help\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">

<?= $this->render('/layouts/head');?>

<body>
<?php $this->beginBody() ?>

<?= $this->render('/layouts/public_nav'); ?>

<div class="wrapper" style="min-height: 600px;">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
