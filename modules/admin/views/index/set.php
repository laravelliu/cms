<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/24
 * Time: 12:58
 */
use app\support\widgets\JsBlock;
use app\assets\AdminAsset;
use yii\widgets\ActiveForm;

$this->registerCssFile('/admin/css/plugins/iCheck/custom.css', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
$this->registerCssFile('/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);

$this->registerJsFile('/admin/js/plugins/iCheck/icheck.min.js', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站设置</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">基础设置</h3>

                            <?php $form = ActiveForm::begin([
                                'options' => [
                                    'role' => 'form'
                                ]
                            ])?>
                                <?=$form->field($model,'name')->textInput()->label('名称');?>
                                <?=$form->field($model,'keywords')->textInput()->label('网站关键词');?>
                                <?=$form->field($model,'description')->textInput()->label('网站描述');?>
                                <?=$form->field($model,'email')->textInput()->label('网站联系Email');?>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>设置</strong></button>
                                    <label> <input type="checkbox" class="i-checks">是否开启</label>
                                </div>
                            <?php ActiveForm::end()?>

                        </div>
                        <div class="col-sm-6">
                            <h4>网站图片</h4>
                            <p class="text-center">
                                <a href=""><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php JsBlock::begin()?>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<?php JsBlock::end()?>

