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

<div class="wrapper">
    <?= $content ?>
</div>
    
<?= $this->render('/layouts/footer') ?>
<?= $this->render('/layouts/public_footer_js') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
