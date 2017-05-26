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
use yii\helpers\Url;

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

<style>
    .uploader-zone{
        width: 220px;
        height: 200px;
        border: 1px dotted #ccc;
        background: #fafafa;
        margin: 0px auto 20px;
        border-radius: 8px;
    }
    .uploader-btns{
        text-align: center;
    }
</style>
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
                                    <div id="uploader" class="uploader-content">
                                        <!--用来存放文件信息-->
                                        <div id="autoUploader" class="uploader-zone"></div>
                                        <div class="uploader-btns">
                                            <span>拖拽到上面区域自动上传</span>
                                            <div id="picker" class="uploader-btn"></div>
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
            disableGlobalDnd:false,
            swf: 'admin/lib/webuploader/Uploader.swf',
            dnd:'#autoUploader',
            pick: {
                id:'#picker',
                label:'选择图片',
                multiple:false
            },
            server: '<?=Url::to(['/upLogo'])?>',
            accept:{
                title: '头像',
                extensions: 'gif,jpg,jpeg,png',
                //mimeTypes: 'image/*'
            },
            thumb:{
                width: 220,
                height: 200,

                // 图片质量，只有type为`image/jpeg`的时候才有效。
                quality: 70,

                // 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
                allowMagnify: true,

                // 是否允许裁剪。
                crop: true,

                // 为空的话则保留原有图片格式。
                // 否则强制转换成指定的类型。
                type: 'image/jpeg'
            },
            auto:true,
            chunkRetry:3,
            fileSingleSizeLimit:20*1024*1024

        }).on('uploadBeforeSend',function (file, data) {
            $.extend(data, {
                _csrf:$('meta[name="csrf-token"]').attr("content")
            });
        }).on('fileQueued',function (file) {
            var $pic = $("<img>");

            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    lfs.waningTip('暂不能预览');
                    return;
                }

                $pic.attr('src', src);
                $('#autoUploader').append($pic);

            });

        }).on('uploadProgress',function () {
            
        }).on('uploadSuccess',function () {

        }).on('uploadError',function () {

        }).on('uploadComplete',function () {
            
        }).on('uploadError',function (file,reason) {
            console.log(file);
            console.log(reason);
        }).on('error',function (type) {
            if('F_EXCEED_SIZE' == type){
                lfs.waningTip('图片最大为20M','图片过大');
            } else if('Q_TYPE_DENIED' == type ) {
                lfs.waningTip('仅支持gif,jpg,jpeg,png格式的图片','文件格式错误');
            } else {
                lfs.errorTip("上传出错！请检查后重新上传！错误代码"+type);

            }
        });


    });
</script>
<?php JsBlock::end()?>

