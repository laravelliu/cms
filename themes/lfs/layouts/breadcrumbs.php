<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 18:50
 */
use yii\widgets\Breadcrumbs;

?>

<div class="page-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="breadcrumbs">
                    <h2 class="trail-browse">你的位置:</h2>
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => ['class' => 'trail-items'],
                        'itemTemplate' => '<li class="trail-item">{link}</li>'
                    ]) ?>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-breadcrumbs -->