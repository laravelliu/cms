<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/6
 * Time: 16:42
 */
use yii\helpers\Url;
$action = Yii::$app->request->getUrl();
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle" src="<?=Yii::$app->user->identity->photo?>" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold"><?=Yii::$app->params['role'][Yii::$app->user->identity->role]?></strong>
                            </span> 
                            <span class="text-muted text-xs block"><?=Yii::$app->user->identity->name?><b class="caret"></b></span>
                        </span> 
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?=Url::to(['/hou'])?>">控制台</a></li>
                        <li><a href="<?=Url::to(['/'])?>">Contacts</a></li>
                        <li><a href="<?=Url::to(['/'])?>">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=Url::to(['/logout'])?>">退出</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <?=Yii::$app->params['role'][Yii::$app->user->identity->role]?>
                </div>
            </li>
            <li <?php if($action == '/hou'):?>class="active" <?php endif;?>>
                <a href="<?=Url::to(['/hou'])?>"><i class="fa fa-th-large"></i> <span class="nav-label">控制台</span></a>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-file-text-o"></i> <span class="nav-label">单页</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="index.html">Dashboard v.1</a></li>
                    <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                    <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                    <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                    <li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>
            <li <?php if($action == '/admin/index/setting'):?>class="active" <?php endif;?>>
                <a href="<?=Url::to(['/admin/index/setting'])?>"><i class="fa fa-diamond"></i> <span class="nav-label">网站设置</span></a>
            </li>
        </ul>

    </div>
</nav>
