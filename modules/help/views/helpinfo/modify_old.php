<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/2
 * Time: 17:41
 */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<script src="/kindeditor/kindeditor-min.js"></script>
<script src="/kindeditor/lang/zh_CN.js"></script>
<link href="/kindeditor/themes/default/default.css?v=<?=CSS_VERSION?>">
<script>
    var editor;
    KindEditor.ready(function(K)
    {
        editor = K.create("#helpcontent-content",{
            height : "350px",
            allowFileManager:true
        })
    })
</script>
<div class="page-header">
     <?= Html::a('返回', $_SERVER["HTTP_REFERER"], ['class' => 'btn btn-primary btn-lg']) ?>
</div>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<input type="hidden" name="id" value="<?= $model->id?>">
<?= $form->field($model2, 'platform')->dropDownList(['pre' => 'pre', 'apm' => 'APM', 'fn' => '众测', 'cts' => '云测', 'itestin' => 'itestin', 'abtest' => 'abtest'],
    [
        'onchange'=>'
            $.get("selplat?id='.'"+$(this).val(),function(data){
                $("#sel_2").html(data);
            });',
    ])->label(false); ?>
    <div class="form-group field-helpcontent-cid required has-success">
        <select class="form-control" name="HelpContent[cid][]" id="sel_2" >
            <?php foreach($classifies as $v){ ?>
            <option <?php if($v->classify == $model2->classify) {?> selected="selected" <?php }?>><?= $v->classify?></option>
            <?php }?>
        </select>
    </div>

<?= $form->field($model, 'title')->textInput(['placeholder' => '标题'])->label(false) ?>

<?= $form->field($model, 'status')->dropDownList(['1'=>'显示','0'=>'不显示'])->label(false); ?>

<?= $form->field($model, 'sort')->textInput(['placeholder' => '排序'])->label(false) ?>


<?php echo $form->field($model, 'content')->textarea()->label(false); ?>


    <div class="form-group login0623">
        <?= Html::submitButton('修改', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
    </div>

<?php ActiveForm::end(); ?>