<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/8/8
 * Time: 18:04
 */
$config = [];
if (isset($_SERVER['HTTP_HOST'])) {

    //金融
    if(strpos($_SERVER['HTTP_HOST'], 'a.lfs.cc') !== false){
        $config['defaultRoute'] = 'site';
    }

    if(strpos($_SERVER['HTTP_HOST'], 'b.lfs.cc') !== false){
        $config['defaultRoute'] = 'admin/index/index';
    }

}

return $config;

?>