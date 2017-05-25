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

//上传
$this->registerCssFile('/admin/lib/webuploader/webuploader.css', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);
$this->registerJsFile('/admin/lib/webuploader/webuploader.js', [AdminAsset::className(), 'depends' => 'app\assets\AdminAsset']);

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
                            <p>
                                设置网站图标
                            </p>

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="uploader" class="wu-example">
                                        <!--用来存放文件信息-->
                                        <div id="thelist" class="uploader-list"></div>
                                        <div class="btns">
                                            <div id="picker">选择文件</div>
                                            <button id="ctlBtn" class="btn btn-default">开始上传</button>
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

        //上传
        var uploader = WebUploader.create({
            swf: 'admin/lib/webuploader/Uploader.swf',
            //dnd:'image-crop',
            pick: '#picker',
            server: 'http://webuploader.duapp.com/server/fileupload.php',

        });


    });
</script>
<?php JsBlock::end()?>

