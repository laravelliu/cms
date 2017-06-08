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
                        <img alt="image" class="img-circle" src="<?= !empty(Yii::$app->user->identity->photo)?Yii::$app->user->identity->photo:DEFAULT_PHOTO?>" />
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
                </ul>
            </li>
            <li <?php if($action == '/admin/index/setting'):?>class="active" <?php endif;?>>
                <a href="<?=Url::to(['/admin/index/setting'])?>"><i class="fa fa-diamond"></i> <span class="nav-label">网站设置</span></a>
            </li>

            <li <?php if($action == '/admin/category/index'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">分类管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/category/index'])?>">分类列表</a></li>
                    <li><a href="<?=Url::to(['/admin/category/add-category'])?>">添加分类</a></li>
                </ul>
            </li>

            <li <?php if($action == '/admin/kefu/index'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">客服管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/kefu/index'])?>">客服列表</a></li>
                    <li><a href="dashboard_2.html">添加客服</a></li>
                </ul>
            </li>

            <li <?php if($action == '/admin/product/index'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">产品管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/product/index'])?>">产品列表</a></li>
                    <li><a href="dashboard_2.html">添加产品<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            <li <?php if($action == '/admin/link/index'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">友链管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?=Url::to(['/admin/link/index'])?>">友链列表</a></li>
                    <li><a href="dashboard_5.html">添加友链<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            <li <?php if($action == '/admin/article/index'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">文章管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/article/index'])?>">文章管理</a></li>
                    <li><a href="<?=Url::to(['/admin/article/add-article'])?>">添加文章<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
