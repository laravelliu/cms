<?php
use app\assets\help\AppAsset;
use app\support\widgets\JsBlock;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

AppAsset::addCss($this,'/help/simditor/styles/simditor.css');
AppAsset::addCss($this,'/help/simditor/styles/simditor-html.css');
AppAsset::addCss($this,'/help/simditor/styles/help-content.css');
AppAsset::addCss($this,'/help/simditor/styles/simditor-markdown.css');

AppAsset::addJs($this,'/help/simditor/scripts/module.js');
AppAsset::addJs($this,'/help/simditor/scripts/hotkeys.js');
AppAsset::addJs($this,'/help/simditor/scripts/uploader.js');
AppAsset::addJs($this,'/help/simditor/scripts/simditor.js');
AppAsset::addJs($this,'/help/simditor/scripts/beautify-html.js');
AppAsset::addJs($this,'/help/simditor/scripts/simditor-html.js');
AppAsset::addJs($this,'/help/simditor/scripts/marked.js');
AppAsset::addJs($this,'/help/simditor/scripts/to-markdown.js');
AppAsset::addJs($this,'/help/simditor/scripts/simditor-markdown.js');
AppAsset::addJs($this,'/help/simditor/scripts/simditor-marked.js');
AppAsset::addJs($this,'/help/simditor/scripts/simditor-dropzone.js');


?>
<!--<script type="text/javascript" src="/simditor/scripts/jquery-3.0.0.js"></script>
-->
<!--<script type="text/javascript" src="/simditor/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/simditor/scripts/module.js"></script>
<script type="text/javascript" src="/simditor/scripts/hotkeys.js"></script>
<script type="text/javascript" src="/simditor/scripts/uploader.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor.js"></script>

<script type="text/javascript" src="/simditor/scripts/beautify-html.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-html.js"></script>

<script type="text/javascript" src="/simditor/scripts/marked.js"></script>
<script type="text/javascript" src="/simditor/scripts/to-markdown.js"></script>

<script type="text/javascript" src="/simditor/scripts/simditor-markdown.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-marked.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-dropzone.js"></script>-->

<div class="container content" style="margin-top: 50px;">
<?php if (isset($_SERVER["HTTP_REFERER"])): ?>
<div class="page-header">
    <?= Html::a('返回', $_SERVER["HTTP_REFERER"], ['class' => 'btn btn-primary']) ?>
</div>
<?php endif; ?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<?= $form->field($model, 'cid[]')->dropDownList(['pre' => 'pre', 'apm' => 'APM', 'fn' => '众测', 'cts' => '云测', 'itestin' => 'itestin', 'abtest' => 'abtest'],
    [
        'prompt'=>'选择平台',
        'onchange'=>'
            $("#sel_2").css("display","block");$.get("selplat?id='.'"+$(this).val(),function(data){
                $("#sel_2").html(data);
            });',
    ])->label(false); ?>
    <div class="form-group field-helpcontent-cid required has-success">
        <select class="form-control" name="HelpContent[cid][]" id="sel_2" style="display:none">
    </select>
    </div>
<?= $form->field($model, 'title')->textInput(['placeholder' => '标题'])->label(false) ?>

<?= $form->field($model, 'status')->dropDownList(['1'=>'显示','0'=>'不显示'])->label(false); ?>

<?= $form->field($model, 'sort')->textInput(['placeholder' => '排序'])->label(false) ?>


<?php echo $form->field($model, 'content')->textarea(['id' => 'addInfo'])->label(false); ?>


    <div class="form-group login0623">
        <?= Html::submitButton('添加', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php JsBlock::begin();?>
<script type="text/javascript">
    var editor = new Simditor({
        textarea: $('#addInfo'),
        placeholder: '这里输入文字...',
        toolbar: ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', '|', 'blockquote', 'code', 'table', 'link', 'image', '|', 'hr', 'indent', 'outdent', 'alignment', '|',  'markdown', 'html' ],
        upload : {
            url : '/help/helpinfo/upload', //文件上传的接口地址
            params: null, //键值对,指定文件上传接口的额外参数,上传的时候随文件一起提交
            fileKey: 'fileData', //服务器端获取文件数据的参数名
            connectionCount: 3,
            leaveConfirm: '正在上传文件'
        },
        defaultImage: '/simditor/images/image.png'

    });

    $('.simditor-toolbar').css('top','50px');

    $('.simditor-body').addClass('help-content');
</script>
<?php JsBlock::end();?>

</div>