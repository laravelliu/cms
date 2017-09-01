<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \yii\helpers\ArrayHelper;
use app\modules\help\models\HelpInfo;
?>
<script type="text/javascript" src="/simditor/scripts/jquery-3.0.0.js"></script>
<link rel="stylesheet" type="text/css" href="/simditor/styles/simditor.css" />

<script type="text/javascript" src="/simditor/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/simditor/scripts/module.js"></script>
<script type="text/javascript" src="/simditor/scripts/hotkeys.js"></script>
<script type="text/javascript" src="/simditor/scripts/uploader.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor.js"></script>

<script type="text/javascript" src="/simditor/scripts/beautify-html.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-html.js"></script>
<link rel="stylesheet" href="/simditor/styles/simditor-html.css" media="screen" charset="utf-8" />

<script type="text/javascript" src="/simditor/scripts/marked.js"></script>
<script type="text/javascript" src="/simditor/scripts/to-markdown.js"></script>

<link rel="stylesheet" href="/simditor/styles/simditor-markdown.css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="/simditor/styles/help-content.css" />

<script type="text/javascript" src="/simditor/scripts/simditor-markdown.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-marked.js"></script>
<script type="text/javascript" src="/simditor/scripts/simditor-dropzone.js"></script>


    <div class="page-header">
        <?= Html::a('返回', $_SERVER["HTTP_REFERER"], ['class' => 'btn btn-primary btn-lg']) ?>
    </div>
<?php 
    $form = ActiveForm::begin(['id' => 'login-form',
                               'options' => [
                                    'enctype' => 'multipart/form-data'
                                ],
                        ]); 
?>
    <input type="hidden" name="id" value="<?= $model->id?>">

    <div class="form-group field-helpcontent-cid required has-success">
        <select class="form-control" name="HelpContent[cidname]" onchange="changeCate(this.value)">
            <option value="pre" <?php if($platformname == 'pre'):?>selected="selected"<?php endif; ?>>pre</option>
            <option value="apm" <?php if($platformname == 'apm'):?>selected="selected"<?php endif; ?>>APM</option>
            <option value="fn" <?php if($platformname == 'fn'):?>selected="selected"<?php endif; ?>>众测</option>
            <option value="cts" <?php if($platformname == 'cts'):?>selected="selected"<?php endif; ?>>云测</option>
            <option value="itestin" <?php if($platformname == 'itestin'):?>selected="selected"<?php endif; ?>>itestin</option>
        </select>
    </div>
 
    <div class="form-group field-helpcontent-cid required has-success">
        <select class="form-control" name="HelpContent[cid]" id="sel_2">
            <?php foreach ($platform as $key => $value): ?>
                <option value="<?= $value['id']?>" <?php if($value['id']==$model->cid):?>selected="selected"<?php endif; ?>><?= $value['classify']?></option>
            <?php endforeach; ?>
        </select>
    </div>
<?= $form->field($model, 'title')->textInput(['placeholder' => '标题'])->label(false) ?>

<?= $form->field($model, 'status')->dropDownList(['1'=>'显示','0'=>'不显示'])->label(false); ?>

<?= $form->field($model, 'sort')->textInput(['placeholder' => '排序'])->label(false) ?>


<?php echo $form->field($model, 'content')->textarea(['id' => 'editor'])->label(false); ?>


    <div class="form-group login0623">
        <?= Html::submitButton('添加', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
    </div>
<script type="text/javascript">
    var editor = new Simditor({
      textarea: $('#editor'),
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

<?php ActiveForm::end(); ?>
