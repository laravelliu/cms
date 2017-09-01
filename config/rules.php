<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/6
 * Time: 14:17
 */
return [
    'contact' => 'company/contact',
    'about' => 'company/about',
    'hou' => 'admin/index/index',
    'upLogo' => 'admin/uploader/web-logo',
    'uploader' => 'admin/uploader/upload',
    'login' => 'site/login',
    'logout' => 'site/logout',
    'register' => 'site/register',
    'wx' => 'weixin/weixin/token',

    //帮助
    'docs' => 'help/helpinfo/helpall',
    'docs/<show:\w+>'=>'help/helpinfo/show',    //<show:\w+>(\/?)变量将变成help/show
    'docs/<show:\w+>/<id:\d+>'=>'help/helpinfo/show',
];