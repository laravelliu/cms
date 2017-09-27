<?php
use app\assets\help\AppAsset;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '支持 - Testin';

$this->registerCssFile('/helpResource/css/search.css', [AppAsset::className(), 'depends' => 'app\assets\help\AppAsset']);
?>

<div class="banner-support">
    <h4>常见问题</h4>
    <div class="search">
        <?php $form = ActiveForm::begin([
                'enableClientScript' => false
        ])?>
        <?= $form->field($contentModel, 'title')->textInput(['placeholder' => '请输入您的搜索内容，如“应用上传"', 'class' =>'sh-text', 'aria-describedby'=>'basic-addon2', 'name'=>'keyword'])->label(false) ?>
        <?= Html::submitButton(' ', ['class' => 'btn-sh']) ?>
        <?php ActiveForm::end()?>
    </div>
</div>

<?php if ( !isset($resultInfo) ) :?>
<div class="container cont-support">
    <div class="row">
        <div class="col-lg-3 col-xs-12 item">
            <div class="icon">
                <i class="iconfont">&#xe702;</i>
            </div>
            <h5><?= Html::a('内测分发', Url::to(['pre']))?></h5>
            <p>
                <?php if(is_array($pre)):?>
                    <?php foreach($pre as $value):?>
                        <?=Html::a(mb_substr($value->title,0,20), Url::to(["{$value->helpInfo->platform}/{$value->id}"]))?>
                    <?php endforeach;?>
                <?php else:?>
                    <?=$pre?>
                <?php endif;?>
            </p>
        </div>

        <div class="col-lg-3 col-xs-12 item">
            <div class="icon">
                <i class="iconfont">&#xe704;</i>
            </div>
            <h5><?= Html::a('功能测试', Url::to(['fn']))?></h5>
            <p>
                <?php if(is_array($fn)):?>
                    <?php foreach($fn as $value):?>
                        <?=Html::a(mb_substr($value->title,0,20), Url::to(["{$value->helpInfo->platform}/{$value->id}"]))?>
                    <?php endforeach;?>
                <?php else:?>
                    <?=$fn?>
                <?php endif;?>
            </p>
        </div>

        <div class="col-lg-3 col-xs-12 item">
            <div class="icon">
                <i class="iconfont">&#xe701;</i>
            </div>
            <h5><?= Html::a('兼容测试', Url::to(['cts']))?></h5>
            <p>
                <?php if(is_array($cts)):?>
                    <?php foreach($cts as $value):?>
                        <?=Html::a(mb_substr($value->title,0,20), Url::to(["{$value->helpInfo->platform}/{$value->id}"]))?>
                    <?php endforeach;?>
                <?php else:?>
                    <?=$cts?>
                <?php endif;?>
            </p>
        </div>


        <div class="col-lg-3 col-xs-12 item">
            <div class="icon">
                <i class="iconfont">&#xe600;</i>
            </div>
            <h5><?= Html::a('iTestin', Url::to(['itestin']))?></h5>
            <p>
                <?php if(is_array($itestin)):?>
                    <?php foreach($itestin as $value):?>
                        <?=Html::a(mb_substr($value->title,0,20), Url::to(["{$value->helpInfo->platform}/{$value->id}"]))?>
                    <?php endforeach;?>
                <?php else:?>
                    <?=$itestin?>
                <?php endif;?>
            </p>
        </div>

        <div class="col-lg-3 col-xs-12 item">
            <div class="icon">
                <i class="iconfont">&#xe789;</i>
            </div>
            <h5><?= Html::a('A/B测试', Url::to(['abtest'])) ?></h5>
            <p>
                <?php if (is_array($ab)): ?>
                    <?php foreach ($ab as $value): ?>
                        <?= Html::a(mb_substr($value->title, 0, 20), Url::to(["{$value->helpInfo->platform}/{$value->id}"])) ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?= $ab ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
</div>

<?php else:?>

<div class="container cont-support">
    <div class="row">
        <?php if(empty($resultInfo)){   ?>
            <div class="cont-no">
                <i class="iconfont">&#xe684;</i>
                <p>没有您想要搜索的信息 ，您可以尝试搜索其他关键词</p>
            </div>
        <?php } else {   ?>
        <div class="col-lg12" style="margin-top: -90px">
            <h5 class="sh-title">
                搜索出如下符合条件文章
            </h5>
            <ul class="sh-list" style="margin-top: 0px;">
                <?php if(is_array($resultInfo)) {
                        foreach($resultInfo as $info) {
                            echo "<li>" . Html::a(mb_substr($info->title,0,200), Url::to([$info->helpInfo->platform.'/'.$info->id])) . "</li>";
                        }
                    } else {
                        echo $resultInfo;
                    }
                }?>
            </ul>
        </div>
    </div>
</div>
<?php endif;?>


