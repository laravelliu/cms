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

$this->registerCssFile('/admin/css/plugins/select2/select2.min.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerCssFile('/admin/lib/summernote/summernote.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/lib/summernote/summernote.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/select2/select2.full.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/validate/jquery-validate.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
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
                    <form method="post" class="form-horizontal" id="article" action="<?=Url::to(['/admin/article/add-article'])?>">
                        <input type="hidden" name="<?= \Yii::$app->request->csrfParam; ?>" value="<?= \Yii::$app->request->getCsrfToken();?>" />
                        <div class="form-group">
                            <label class="col-sm-1 control-label">标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" data-required  data-describedby="title-description" data-description="title">
                                <div class="error-info" id="title-description"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">作者</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="auth" data-required data-describedby="auth-description" data-description="auth">
                                <div class="error-info" id="auth-description"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">分类</label>
                            <div class="col-sm-9">
                                <select class="select-category form-control" data-placeholder="选择分类" data-allow-clear="true" name="category" data-required data-describedby="category-description" data-description="category">
                                    <?php foreach ($categoryList as $category):?>
                                    <option value="<?=$category->id?>"><?=$category->name?></option>
                                    <?php endforeach;?>
                                </select>
                                <div class="error-info" id="category-description"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">排序</label>
                            <div class="col-sm-9">
                                <select class="select-sort form-control" name="sort" data-required data-describedby="sort-description" data-description="sort">
                                    <option value="0">顺序增加</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <div class="error-info" id="sort-description"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">图片上传</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="picture" />
                                <div id="picker" class="uploader-btn"></div>
                                <div id="autoUploader" class="uploader-zone"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">内容</label>
                            <div class="col-sm-9">
                                <input name="content" type="hidden" data-required data-describedby="content-description" data-description="content">
                                <div class="summernote" id="summernote"></div>
                                <div class="error-info" id="content-description"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label"></label>
                            <div class="col-sm-9">
                                <button  class="btn btn-primary" type="submit">添加文章</button>
                            </div>
                        </div>
                    </form>
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
                    console.log('Summernote is launched');
                },
                onEnter: function() {
                    console.log('Enter/Return key pressed');
                },

                onPaste: function(e) {
                    console.log('Called event paste');
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
                        url: "/admin/uploader/uploader",
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
                   $("input[name='content']").val(summernote.summernote('code'));
                }
            }
        });

        //seslect2
        $(".select-category").select2();
        
        $('#article').validate({
            onKeyup : false,
            onBlur : true,
            sendForm : true,
            eachValidField : function() {
                $(this).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            eachInvalidField : function() {
                $(this).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            valid: function(){

            },
            conditional : {
                title : function(value) {

                    if (value.length >= 32 ) {
                        return false;
                    }

                    return true;

                },
                auth : function(value) {
                    if (value.length >= 32 ) {
                        return false;
                    }
                    return true;
                },
                category:function (value) {

                    if(value.length == 0){
                        return false;
                    }

                    return true;
                }
            },
            description : {
                title : {
                    required : '请输入文章标题',
                    conditional: '请输入少于32个汉字',
                },
                auth : {
                    required : '请输入作者'
                },
                sort : {
                    required : '请选择排序'
                },
                category : {
                    required : '请选择分类'
                },
                content : {
                    required : '请填写文章内容'
                }
            }
        });

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
                $("input[name='picture']").val(res.data[0].address);
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
