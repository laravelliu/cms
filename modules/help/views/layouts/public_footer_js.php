<?php
/**
 * Created by PhpStorm.
 * User: sangweifang
 * Date: 16/1/20
 * Time: 上午11:59
 */

?>
<?php if(is_array($this->jsFiles) && in_array('fine-uploader', $this->jsFiles)) { ?>
    <script type="text/javascript" src="/lib/uploader/fine-uploader.js"></script>
<?php } ?>
<?php if(is_array($this->js) && array_key_exists('appinfo_publish', $this->js)) { ?>
<?= $this->js['appinfo_publish'] ?>
<?php } ?>

