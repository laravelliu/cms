<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/8
 * Time: 19:54
 */
use yii\helpers\Url;

$categorys = $this->params['category'];
$mainAddress = $this->params['mainAddress'];

?>
<div class="site-header header-v2">
    <div class="flat-top">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="custom-info">
                        <span>联系我们?</span>
                        <?php if(empty($mainAddress['email'])): ?>
                        <span><i class="fa fa-reply"></i><?=$mainAddress['qq']?></span>
                        <?php else:?>
                            <span><i class="fa fa-reply"></i><?=$mainAddress['email']?></span>
                        <?php endif;?>
                        <span><i class="fa fa-map-marker"></i><?=$mainAddress['city']?><?=$mainAddress['address']?></span>
                        <span><i class="fa fa-phone"></i><?=$mainAddress['phone']?></span>
                    </div>

                    <div class="social-links">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-top -->

    <header id="header" class="header">
        <div class="header-wrap">
            <div id="logo" class="logo">
                <a href="<?=Url::to(['/'])?>">
                    <img src="<?=$this->theme->baseUrl?>/images/logo.png" alt="images">
                </a>
            </div><!-- /.logo -->
            <div class="btn-menu">
                <span></span>
            </div><!-- //mobile menu button -->

            <div class="nav-wrap">
                <nav id="mainnav" class="mainnav">
                   <!-- <div class="menu-extra">
                        <ul>
                            <li id ="s" class="search-box">
                                <a href="#search" class="flat-search"><i class="fa fa-search"></i></a>
                                <div class="submenu top-search">
                                    <div class="widget widget_search">
                                        <form class="search-form">
                                            <input type="search" class="search-field" placeholder="Search …">
                                            <input type="submit" class="search-submit">
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="shopping-cart">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="shopping-cart-items-count">2</span>
                                </a>
                                <div class="subcart">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget">
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" >x</a>
                                                <a href="#"><img src="<?/*=$this->theme->baseUrl*/?>/images/products/1.jpg" alt="images">Boskke Cube</a>
                                                <p><span class="quantity">1 × <span class="amount">$39.00</span></span></p>
                                            </li>
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" >x</a>
                                                <a href="#"><img src="<?/*=$this->theme->baseUrl*/?>/images/products/2.jpg" alt="images">Cast Iron Casserole</a>
                                                <p><span class="quantity">1 × <span class="amount">$230.00</span></span></p>
                                            </li>
                                        </ul>
                                        <p class="total">
                                            <strong>Subtotal:</strong> <span class="amount">$269.00</span>
                                        </p>
                                        <div class="group-btn">
                                            <a class="button" href="#">view cart</a>
                                            <a class="button bg-scheme3 style1" href="#">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>--><!-- /.menu-extra -->
                    <ul class="menu">
                        <li><a href="<?=Url::to(['/'])?>">首页</a></li>
                            <?php if(!empty($categorys)):?>
                                <?php foreach ($categorys as $category):?>
                                <li>
                                    <a href="<?=Url::to([empty($category['url']) ? '/' : $category['url'],'cid' => $category['id']])?>"><?=$category['name']?></a>

                                    <?php if(isset($category['son'])):?>
                                    <ul class="submenu">
                                        <?php foreach ($category['son'] as $subCategory):?>
                                        <li><a href="<?=$subCategory['url']?>"><?=$subCategory['name']?></a></li>
                                        <?php endforeach;?>
                                    </ul><!-- /.submenu -->
                                    <?php endif;?>
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>

                    </ul><!-- /.menu -->
                </nav><!-- /.mainnav -->
            </div><!-- /.nav-wrap -->
        </div><!-- /.header-wrap -->
    </header><!-- /.header -->
</div>

