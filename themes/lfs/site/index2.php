<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div style="height: 100px;"></div>

<div class="container">
    <div class="row">
        <form action="<?=\yii\helpers\Url::to(['/site/index'])?>" method="post">
            <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
            图片： <input type="file" name="img" id="">
            <button type="submit" class="btn btn-success">上传</button>
        </form>

    </div>
</div>

</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</html>