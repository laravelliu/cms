<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 14:34
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;

PublicAsset::register($this);
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
<body class="gray-bg">
<?php $this->beginBody() ?>

<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
