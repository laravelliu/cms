<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/5/4
 * Time: 14:42
 */
use app\assets\admin\AdminAsset;
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;

?>
<style>
    .category-radio{padding:7px;}
    .category-radio label{width:80px; text-align: left}
</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加分类</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <?php $form = ActiveForm::begin([
                        'id' => 'category-form',
                        'options' => [
                            'class' => 'form-horizontal'
                        ],
                        'fieldConfig' => [
                            'labelOptions' => [
                                'class' => 'col-sm-2 control-label'
                            ],
                            'template' =>'{label}<div class="col-sm-10">{input}{error}</div>'
                        ]
                    ])?>

                    <?= $form->field($model,'name')->textInput()->label('名称');?>
                    <?= $form->field($model,'desc')->textarea()->label('描述');?>
                    <?= $form->field($model,'sort')->textInput()->label('排序');?>
                    <?= $form->field($model,'logo')->textInput()->label('缩略图');?>
                    <?= $form->field($model,'target')->radioList(['0'=>'当前页面', '1' => '新页面'],['class'=>'category-radio'])->label('打开方式');?>
                    <?= $form->field($model, 'pid')->dropDownList($categoryList)->label('上级分类')?>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <?= Html::submitButton('提交',['class' => 'btn btn-primary']);?>
                        </div>
                    </div>
                    <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
    </div>
</div>
