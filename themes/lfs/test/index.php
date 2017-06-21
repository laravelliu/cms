<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/21
 * Time: 17:20
 */
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/admin/lib/webuploader/webuploader.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/admin/lib/webuploader/webuploader.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            var uploader = WebUploader.create({

                // swf文件路径
                swf: '/admin/lib/webuploader/Uploader.swf',

                // 文件接收服务端。
                server: '/test/fileupload',

                // 选择文件的按钮。可选。
                // 内部根据当前运行是创建，可能是input元素，也可能是flash.
                pick: {
                    'id':'#picker',
                    'multiple': false
                },

                accept:{
                    'extensions':'gif,jpg,jpeg,bmp,png,zip'
                },

                // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                resize: false,

                chunked: true,

                disableGlobalDnd:true,
                auto:true,
                prepareNextFile:true,
                chunkSize:2097152,
                chunkRetry:3,
                threads:3,
                duplicate:true

            });

            uploader.on( 'fileQueued', function( file ) {

            }).on('beforeFileQueued',function () {

            }).on('filesQueued',function () {

            }).on('startUpload',function () {

            }).on('uploadFinished',function () {

            }).on('uploadStart',function () {

            }).on('uploadBeforeSend',function () {

            }).on('uploadProgress',function () {

            }).on('uploadComplete',function () {

            });

        });
        

    </script>
</head>
<body>
<div id="uploader" class="wu-example">
    <!--用来存放文件信息-->
    <div id="thelist" class="uploader-list"></div>
    <div class="btns">
        <div id="picker">选择文件</div>
        <button id="ctlBtn" class="btn btn-default">开始上传</button>
    </div>
</div>

</body>
</html>
