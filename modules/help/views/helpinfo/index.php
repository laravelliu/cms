<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="container" style="margin-top: 50px;">
	<div class="page-header">
		<?= Html::a('返回', Url::to(['helpinfo/list']), ['class' => 'btn btn-primary']) ?>
	</div>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <input type="hidden" name="id" value="<?= $model->id?>">
	<?= $form->field($model, 'classify')->textInput(['placeholder' => '分类'])->label(false) ?>
	<?= $form->field($model, 'status')->dropDownList(['1'=>'显示','0'=>'不显示'])->label(false); ?>
	<?= $form->field($model, 'sort')->textInput(['placeholder' => '排序'])->label(false) ?>
<?= $form->field($model, 'platform')->dropDownList(['pre' => 'pre', 'apm' => 'APM', 'fn' => '众测', 'cts' => '云测', 'itestin' => 'itestin', 'abtest' => 'abtest'])->label(false); ?>
    <div class="form-group login0623">
        <?= Html::submitButton('确定', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
<?php ActiveForm::end(); ?>
</div>
