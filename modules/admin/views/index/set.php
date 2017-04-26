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
$this->registerCssFile('/admin/css/plugins/switchery/switchery.css', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);

$this->registerJsFile('/admin/js/plugins/iCheck/icheck.min.js', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);

/*圆角选择*/
$this->registerJsFile('/admin/js/plugins/switchery/switchery.js', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
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
                                <?=$form->field($model,'footer')->textarea()->label('页脚');?>
                                <?=$form->field($model,'logo')->hiddenInput()->label(false);?>
                                <?php if(empty($model->open)){
                                    $model->open = 0;
                                }?>
                                <?=$form->field($model,'open')->hiddenInput()->label(false);?>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>设置</strong></button>
                                    <input type="checkbox" class="js-switch" <?php if($model->open):?>checked<?php endif;?>/> <label>是否开启</label>
                                </div>
                            <?php ActiveForm::end()?>

                        </div>
                        <div class="col-sm-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title  back-change">
                                    <h5>Image cropper <small>http://fengyuanchen.github.io/cropper/</small></h5>
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
                                    <p>
                                        A simple jQuery image cropping plugin.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="image-crop">
                                                <img src="img/p3.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Preview image</h4>
                                            <div class="img-preview img-preview-sm"></div>
                                            <h4>Comon method</h4>
                                            <p>
                                                You can upload new image to crop container and easy download new cropped image.
                                            </p>
                                            <div class="btn-group">
                                                <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                                    <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                                    Upload new image
                                                </label>
                                                <label title="Donload image" id="download" class="btn btn-primary">Download</label>
                                            </div>
                                            <h4>Other method</h4>
                                            <p>
                                                You may set cropper options with <code>$(image}).cropper(options)</code>
                                            </p>
                                            <div class="btn-group">
                                                <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                                <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                                <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                                <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                                <button class="btn btn-warning" id="setDrag" type="button">New crop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394', size: 'small'});

        $('.switchery').on('click',function () {
            if(switchery.isChecked()){
                $('#configmodel-open').val('1');
            } else {
                $('#configmodel-open').val('0');
            }
        });

    });
</script>
<?php JsBlock::end()?>

