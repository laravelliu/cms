<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/5/4
 * Time: 14:09
 */
use app\support\widgets\JsBlock;
use app\assets\admin\AdminAsset;

$this->registerCssFile('/admin/css/plugins/select2/select2.min.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerCssFile('/admin/lib/summernote/summernote.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/lib/summernote/summernote.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/select2/select2.full.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/js/plugins/validate/jquery-validate.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
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
                    <form method="post" class="form-horizontal" id="article">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">作者</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="auth" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">分类</label>
                            <div class="col-sm-9">
                                <select class="select-category form-control" data-placeholder="选择分类" data-allow-clear="true" name="category" required>
                                    <?php foreach ($categoryList as $category):?>
                                    <option value="<?=$category->id?>"><?=$category->name?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">排序</label>
                            <div class="col-sm-9">
                                <select class="select-sort form-control" name="sort" required>
                                    <option value="0">顺序增加</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">图片上传</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="pic" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">内容</label>
                            <div class="col-sm-9">
                                <div class="summernote" id="summernote"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label"></label>
                            <div class="col-sm-9">
                                <button class="btn" type="button">添加文章</button>
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

                    $.ajax({
                        data: data,
                        dataType: 'json',
                        type: "post",
                        url: "/admin/uploader/article-pic",
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
                   console.log(summernote.val(summernote.summernote('code')));
                }
            }
        });

        //seslect2
        $(".select-category").select2();
        
        $('#article').validate({
            onKeyup : false,
            onBlur : true,
            sendForm : false,
            eachValidField : function() {

            },
            eachInvalidField : function() {

            },
            valid: function(){

            },
            conditional : {
                title : function(value) {
                    //当邮箱地址为空时
                    if (!value.length){
                        return false;
                    }

                    return validateField({
                        user_email: value
                    });
                },
                auth : function(value) {
                    //当手机号码为空时
                    if (!value.length){
                        return false;
                    }

                    var $result = validateField({
                        staff_phone: value
                    });

                    if (!$result) {
                        T_Countdown.stop(T_Countdown.i);
                    }

                    return $result;
                },
                sort : function () {

                },
                category : function () {

                },
                pic : function () {

                }
            },
            description : {
                title : {
                    required : '请输入您的姓名'
                },
                auth : {
                    required : '请输入您的qq'
                },
                sort : {
                    required : '请输入您的手机号',
                    pattern : '请输入正确的手机号',
                    conditional : '该手机号已经绑定其他账号，请重新输入或者去反馈',
                },
                category : {
                    required : '请输入语音验证码',
                    pattern : '请输入收到的语音验证码',
                    conditional : '请输入正确的验证码',
                },
                pic : {

                }
            }
        })
    });
</script>
<?php JsBlock::end()?>
