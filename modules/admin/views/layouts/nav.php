<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/6
 * Time: 16:42
 */
use yii\helpers\Url;
$action = Yii::$app->request->getUrl();
$c = Yii::$app->controller->id;

?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle" src="<?=empty(Yii::$app->user->identity->photo) ? DEFAULT_PHOTO : Yii::$app->user->identity->photo?>" />
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
                        <li><a href="<?=Url::to(['/'])?>">查看留言</a></li>
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
            <li <?php if($c == 'page'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">单页</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li <?php if($action == '/admin/page/index'):?>class="active"<?php endif;?>><a href="<?=Url::to(['/admin/page/index'])?>">单页列表</a></li>
                    <li <?php if($action == '/admin/page/add'):?>class="active"<?php endif;?>><a href="<?=Url::to(['/admin/page/add'])?>">添加单页</a></li>
                </ul>
            </li>
            <li <?php if(($action == '/admin/index/setting')||($action == '/admin/index/home-slider')):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">网站设置</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li <?php if($action == '/admin/index/setting'):?>class="active"<?php endif;?>><a href="<?=Url::to(['/admin/index/setting'])?>">基础信息</a></li>
                    <li <?php if($action == '/admin/index/home-slider'):?>class="active"<?php endif;?>><a href="<?=Url::to(['/admin/index/home-slider'])?>">轮播图</a></li>
                </ul>
            </li>

            <li <?php if($c == 'category'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">分类管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/category/index'])?>">分类列表</a></li>
                    <li><a href="<?=Url::to(['/admin/category/add-category'])?>">添加分类</a></li>
                </ul>
            </li>

            <li  <?php if($c == 'kefu'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">客服管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/kefu/index'])?>">客服列表</a></li>
                    <li><a href="dashboard_2.html">添加客服</a></li>
                </ul>
            </li>

            <li <?php if($c == 'product'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">产品管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/product/index'])?>">产品列表</a></li>
                    <li><a href="dashboard_2.html">添加产品<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            <li <?php if($c == 'link'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">友链管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?=Url::to(['/admin/link/index'])?>">友链列表</a></li>
                    <li><a href="dashboard_5.html">添加友链<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            <li <?php if($c == 'article'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">文章管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/article/index'])?>">文章管理</a></li>
                    <li><a href="<?=Url::to(['/admin/article/add-article'])?>">添加文章<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>

            <li <?php if($c == 'company'):?>class="active" <?php endif;?>>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">公司信息</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="<?=Url::to(['/admin/company/list'])?>">公司信息列表</a></li>
                    <li><a href="<?=Url::to(['/admin/company/add'])?>">添加公司信息<span class="label label-primary pull-right">NEW</span></a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
