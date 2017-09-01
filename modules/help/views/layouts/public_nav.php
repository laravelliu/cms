<?php
use yii\helpers\Url;
?>
<!--导航 begin-->
<div class="nav">
    <div class="nav-in">
        <div class="phone-nav">
            <div class="nav-btn">
                <span class="bt-l"></span>
                <span class="bt-r"></span>
            </div>
            <img class='phone-logo' src="/help/images/logo.svg" alt="">
        </div>
        <h1 class='logo'>
            <a href="<?= Url::to(['/'])?>">testin</a>
        </h1>
        <ul class="nav-l">
            <li class="nav-it" id="btn-1"><a href="javascript:void(0);">产品服务</a><i class="dost" id="dost-1"></i></li>
            <li class="nav-it" id="btn-2"><a href="javascript:void(0);">解决方案</a><i class="dost" id="dost-2"></i></li>
            <li><a href="<?= Url::to(['/help'])?>">支持</a></li>
        </ul>

        <ul class="nav-r fr">
           
            <li><a class="btn-nav" href="<?= Url::to(['/appinfo/select-service'])?>">开始测试</a></li>
            <?php if(isset($_COOKIE['authuid'])) { ?>
                <li><a href="<?= Url::to(['/app-manage'])?>">我的测试</a></li>
                <li class="dropdown last-child">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?=str_replace('"','',$_COOKIE['authuid'])?>
                        <span class="arrow_up_down"></span>
                    </a>
                    <ul class="dropdown-menu" id="drop-menu">
                        <li><a href="<?= Url::to(['/user-info/index'])?>">个人中心</a></li>
                        <li><a href="<?= Url::to(['/site/logout'])?>">退出</a></li>
                    </ul>
                </li>
            <?php }else{ ?>
                <li><a href="<?= Url::to(['/site/login'])?>">登录</a></li>
                <li><a href="<?= Yii::$app->request->getHostInfo()?>/site/person-register">注册</a></li>
            <?php }?>
        </ul>

    </div>
    <!--二级导航 begin-->
    <div class="nav-next" id="nav-1" style="display:none">
        <div class="nav-in">
            <div class="back"><i class="iconfont text-center">&#xe6a1;</i></div>
            <ul class=" clearfix next-list">
                <li><a href="<?=Url::to(['/product/bugout'])?>"><i class="iconfont">&#xe702;</i>缺陷管理</a></li>
                <li><a href="<?=Url::to(['/product/compatible'])?>"><i class="iconfont">&#xe701;</i>兼容测试</a></li>
                <li><a href="http://gn.testin.cn/activity/info/bug"><i class="iconfont">&#xe6fb;</i>功能测试</a></li>
                <li><a href="http://bugout.testin.cn?v1=saas_intro"><i class="iconfont">&#xe6f6;</i>崩溃收集</a></li>
                <li><a href="<?=Url::to(['/product/machine'])?>"><i class="iconfont">&#xe725;</i>远程真机调试</a></li>
                <li><a href="http://gn.testin.cn/activity/info/issue"><i class="iconfont">&#xe783;</i>发版测试</a></li>
            </ul>
        </div>
    </div>
    <!--二级导航end-->

    <!--二级导航第二个 begin-->
    <div class="nav-next" id="nav-2" style="display:none">
        <div class="nav-in">
            <div class="back"><i class="iconfont text-center">&#xe6a1;</i></div>
            <ul class=" clearfix next-list">
                <li><a href="http://game.testin.cn"><i class="iconfont">&#xe67b;</i>手游行业解决方案</a></li>
                <li><a href="http://f.testin.cn"><i class="iconfont">&#xe713;</i>金融行业解决方案</a></li>
                <li><a href="<?=Url::to(['/solution/oversea'])?>"><i class="iconfont" style="font-size: 22px;">&#xe7bf;</i>App出海解决方案</a></li>
            </ul>
        </div>
    </div>
</div>
<!--二级导航第二个 end-->





