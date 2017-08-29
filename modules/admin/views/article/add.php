<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/5/4
 * Time: 14:09
 */
use app\support\widgets\JsBlock;
use app\assets\admin\AdminAsset;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->registerCssFile('/admin/css/plugins/select2/select2.min.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerCssFile('/admin/lib/summernote/summernote.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/lib/summernote/summernote.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/select2/select2.full.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerCssFile('/admin/lib/webuploader/webuploader.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/lib/webuploader/webuploader.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);

?>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加文章</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'id'=>'article',
                            'class' => 'form-horizontal'
                        ],
                        'fieldConfig' => [
                            'labelOptions' => [
                                'class' => "col-sm-1 control-label"
                            ],
                            'template' => "{label}<div class='col-sm-9'>{input}{error}</div>",
                        ]

                    ])?>
                    <?=$form->field($model,'name')->textInput()->label('标题');?>
                    <?=$form->field($model,'author')->textInput()->label('作者');?>
                    <?=$form->field($model,'category_id')->dropDownList($categoryList,['class' => 'select-category form-control','data-placeholder'=>"选择分类",'data-allow-clear'=>"true"])->label('分类');?>
                    <?=$form->field($model,'sort')->dropDownList($sort,['class' => 'form-control'])->label('排序');?>
                    <?=$form->field($model,'is_index')->radioList([0 => '否', 1 => '是'],['item'=>function($index, $label, $name, $checked, $value){
                        $options = array_merge(['label' => $label, 'value' => $value]);
                        if(0 == $value){
                            return '<div class="radio" style="float: left;margin-right: 10px;">' . Html::radio($name, true, $options) . '</div>';
                        }else{
                            return '<div class="radio" style="float: left;margin-right: 10px;">' . Html::radio($name, $checked, $options) . '</div>';
                        }
                    }])->label('是否首页')?>

                    <?=$form->field($model,'is_hot')->radioList([0 => '否', 1 => '是'],['item'=>function($index, $label, $name, $checked, $value){
                        $options = array_merge(['label' => $label, 'value' => $value]);
                        if(0 == $value){
                            return '<div class="radio" style="float: left;margin-right: 10px;">' . Html::radio($name, true, $options) . '</div>';
                        }else{
                            return '<div class="radio" style="float: left;margin-right: 10px;">' . Html::radio($name, $checked, $options) . '</div>';
                        }
                    }])->label('是否热门')?>

                    <?=$form->field($model,'images',['template'=>"{label}<div class=\"col-sm-9\">{input}<div id=\"picker\" class=\"uploader-btn\"></div><div id=\"autoUploader\" class=\"uploader-zone\"></div>{error}</div>"])->hiddenInput()->label('上传缩略图');?>
                    <?=$form->field($model,'content',['template'=>"{label}<div class=\"col-sm-9\">{input} <div class=\"summernote\" id=\"summernote\"></div><div class=\"error-info\" id=\"content-description\"></div>{error}</div>"])->hiddenInput()->label('内容');?>

                    <div class="form-group">
                        <label class="col-sm-1 control-label"></label>
                        <div class="col-sm-9">
                            <?=Html::button('添加文章',['class' => 'btn btn-primary','type' => 'submit'])?>
                        </div>
                    </div>

                    <?php ActiveForm::end()?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php JsBlock::begin()?>
<script type="text/javascript">
    $(document).ready(function () {
        var summernote = $('#summernote');
        summernote.summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
           // focus: true,
            placeholder: '请编写文章内容',
            lang: 'zh-CN',
            toolbar: [
                // [groupName, [list of button]]
                ['insert', ['picture', 'link', 'video','hr','table']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['misc', ['codeview', 'help']]
            ],
            dialogsFade: true,
            disableDragAndDrop:true,
            callbacks:{
                onInit: function() {
                    //初始化
                    //console.log('Summernote is launched');
                },
                onEnter: function() {
                    //console.log('Enter/Return key pressed');
                },

                onPaste: function(e) {
                    //console.log('Called event paste');
                },
                onImageUpload: function(files) {
                    var data = new FormData();
                    data.append('count',files.length);

                    if (files.length == 1) {
                        data.append("file", files[0]);
                    } else {
                        $.each(files, function(i){
                            data.append("file[]", files[i]);
                        });
                    }

                    data.append('_csrf',$('meta[name="csrf-token"]').attr("content"));
                    data.append('type','ac');

                    $.ajax({
                        data: data,
                        dataType: 'json',
                        type: "post",
                        url: "<?=Url::to(['/uploader'])?>",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            if(data.code == 0){
                                var info = data.data;
                                $.each(info, function(i, rs){
                                    summernote.summernote('insertImage', rs.address, function ($image) {
                                        $image.css('width', '100%');
                                        $image.attr('data-filename', 'retriever');
                                    });
                                });
                            }
                        }
                    });
                },
                onChange: function(contents, $editable) {
                   $("input[name='NewsAR[content]']").val(summernote.summernote('code'));
                }
            }
        });

        //seslect2
        $(".select-category").select2();

        /**
         * 上传
         */
        var uploader = WebUploader.create({
            disableGlobalDnd:false,
            swf: 'admin/lib/webuploader/Uploader.swf',
            dnd:'#autoUploader',
            pick: {
                id:'#picker',
                label:'选择图片',
                multiple:false
            },
            server: '<?=Url::to(['/uploader'])?>',
            accept:{
                title: '头像',
                extensions: 'gif,jpg,jpeg,png',
                //mimeTypes: 'image/!*'
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
                _csrf:$('meta[name="csrf-token"]').attr("content"),
                type:'article',
                complete:true
            });
        }).on('fileQueued',function (file) {
            var $pic = $("<img>");

            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    lfs.waningTip('暂不能预览');
                    return;
                }

                $pic.attr('src', src);
                $('#autoUploader').empty();
                $('#autoUploader').append($pic);

            });

        }).on('uploadProgress',function () {

        }).on('uploadSuccess',function (data,res) {
            if( res.code == 0 ){
                $("input[name='NewsAR[images]']").val(res.data[0].address);
                lfs.successTip('上传成功');
            } else {
                lfs.errorTip(res.message);
            }
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
