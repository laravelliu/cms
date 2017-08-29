<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:17
 */
use app\assets\lfs\IndexAsset;
use yii\helpers\Url;

$this->title = '新闻';
$this->params['breadcrumbs'][] = '新闻';
$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

?>

<!-- Page title -->
<div class="page-title parallax-style parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>News</h2>
                </div><!-- /.page-title-heading -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<?=$this->render('/layouts/breadcrumbs');?>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="content-wrap">
                <div class="main-content">
                    <div class="main-content-wrap">
                        <div class="content-inner">

                            <?php foreach ($news as $k=>$v):?>
                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="<?=Url::to(['news/detail','id' => $v->id])?>">
                                            <img src="<?=empty($v->images)?$this->theme->baseUrl.'/images/blog/2.jpg':$v->images?>" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html"><?=$v->name?></a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#"><?=$v->author?></a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Warehouse</a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#"><?=$v->read_times?> 阅读</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <div class="readmore"><a href="<?=Url::to(['news/detail','id' => $v->id])?>" class="more-link">阅读</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->
                            <?php endforeach;?>

                            <div class="navigation paging-navigation numeric">
                                <div class="flat-pagination loop-pagination">
                                    <span class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                </div><!-- /.flat-pagination -->
                            </div><!-- /.navigation .paging-navigation .numeric -->
                        </div><!-- /.content-inner -->

                    </div><!-- /.main-content-wrap -->
                </div><!-- /.main-content -->

                <div class="sidebars">
                    <div class="sidebars-wrap">
                        <div class="sidebar">
                            
                            <?=$this->render('/news/recent');?>

                            <div class="widget widget_categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Logistics</a></li>
                                    <li><a href="#">Tip &amp; Trick</a></li>
                                    <li><a href="#">Transport</a></li>
                                    <li><a href="#">Warehouse</a></li>
                                </ul>
                            </div><!-- /.widget_categories -->

                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <div class="content-text">
                                        <h4 class="title">How can we help you?</h4>
                                        <p>Our customer service standards provide information on how we will handle your enquiry. There is also compliments and complaints information to help you when you lodge feedback with us.</p>
                                        <a class="button white" href="#">Contact Us<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div><!-- /.textwidget -->
                            </div><!-- /.widget_text -->

                            <div class="widget widget_tag_cloud">
                                <h4 class="widget-title">Tag clound</h4>
                                <div class="tagcloud">
                                    <a href="#">Committee</a>
                                    <a href="#">Grow</a>
                                    <a href="#">Huge</a>
                                    <a href="#">Jobs</a>
                                    <a href="#">Logistic</a>
                                    <a href="#">Manager</a>
                                    <a href="#">Recruit</a>
                                    <a href="#">Tip</a>
                                    <a href="#">Transport</a>
                                    <a href="#">Trick</a>
                                    <a href="#">Warehouse</a>
                                </div>
                            </div><!-- /.widget_tag_cloud -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.sidebars-wrap -->
                </div><!-- /.sidebars -->
            </div><!-- /.content-wrap  -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog -->
