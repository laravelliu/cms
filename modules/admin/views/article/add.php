<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/5/4
 * Time: 14:09
 */
use app\support\widgets\JsBlock;
use app\assets\admin\AdminAsset;

$this->registerCssFile('/admin/lib/summernote/summernote.css', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset']);
$this->registerJsFile('/admin/lib/summernote/summernote.min.js', [AdminAsset::className(), 'depends' => 'app\assets\admin\AdminAsset'])
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
                    <form method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">标题</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">作者</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">分类</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">内容</label>
                            <div class="col-sm-9">
                                <div class="summernote" id="summernote"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">排序</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
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


    });
</script>
<?php JsBlock::end()?>
