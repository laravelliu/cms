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
            <img class='phone-logo' src="/helpResource/images/logo.svg">
        </div>
        <h1 class='logo'>
            <a href="<?= Url::to(['/'])?>">testin</a>
        </h1>
        <ul class="nav-l">
            <li><a href="<?= Url::to(['/help'])?>">支持</a></li>
        </ul>

        <ul class="nav-r fr">
           
            <?php if(!Yii::$app->user->isGuest) { ?>
                <li class="dropdown last-child">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?=Yii::$app->user->identity->username?>
                        <span class="arrow_up_down"></span>
                    </a>
                    <ul class="dropdown-menu" id="drop-menu">
                        <li><a href="<?= Url::to(['/hou'])?>">个人中心</a></li>
                        <li><a href="<?= Url::to(['/logout'])?>">退出</a></li>
                    </ul>
                </li>
            <?php }else{ ?>
                <li><a href="<?= Url::to(['/login'])?>">登录</a></li>
                <li><a href="<?= Url::to(['/register'])?>">注册</a></li>
            <?php }?>
        </ul>
    </div>
</div>
<!--二级导航第二个 end-->





