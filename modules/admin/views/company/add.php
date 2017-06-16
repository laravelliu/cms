<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/16
 * Time: 10:50
 */
use yii\widgets\ActiveForm;
?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加公司信息</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">公司信息</h3>

                            <?php $form = ActiveForm::begin([
                                'options' => [
                                    'role' => 'form'
                                ]
                            ])?>
                            <?=$form->field($model,'name')->textInput()->label('联系人<font style="color: red">*</font>');?>
                            <?=$form->field($model,'description')->textarea()->label('信息描述');?>
                            <?=$form->field($model,'qq')->textInput()->label('QQ／微信<font style="color: red">*</font>');?>
                            <?=$form->field($model,'phone')->textInput()->label('电话<font style="color: red">*</font>');?>
                            <?=$form->field($model,'email')->textInput()->label('邮箱');?>
                            <?=$form->field($model,'city')->textInput()->label('省市区<font style="color: red">*</font>');?>
                            <?=$form->field($model,'address')->textarea(['placeholder' =>'XXXXXX街XXXX'])->label('具体地址<font style="color: red">*</font>');?>
                            <?=$form->field($model,'localtion')->textInput(['placeholder' => '例如：118.232433,39.62163'])->label('坐标<font style="color: red">*</font>');?>
                           <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>添加</strong></button>
                            </div>
                            <?php ActiveForm::end()?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

