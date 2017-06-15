<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:17
 */
use app\assets\lfs\IndexAsset;
use yii\widgets\Breadcrumbs;
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

<div class="page-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="breadcrumbs">
                    <h2 class="trail-browse">You are here:</h2>
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => ['class' => 'trail-items'],
                        'itemTemplate' => '<li class="trail-item">{link}</li>'
                    ]) ?>

                    <!--<ul class="trail-items">
                        <li class="trail-item"><a href="index-v2.html">Home</a></li>
                        <li>News</li>
                    </ul>-->
                </div><!-- /.breadcrumbs -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-breadcrumbs -->

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="content-wrap">
                <div class="main-content">
                    <div class="main-content-wrap">
                        <div class="content-inner">
                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/1.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#">admin</a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Warehouse</a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>It’s a well-known fact that happy and motivated workers produce better results. A recent study found that happier workers were 12% more productive than their counterparts. It underlines staff morale and wellbeing is not just an HR goal: it’s fundamen...</p>
                                        <div class="readmore"><a href="blog-single.html" class="more-link">Read more</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/2.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Seafield logistics goes into administration</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#">admin</a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Jobs</a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Seafield Logistics has gone into administration and two of its operational units have been sold. David Riley, Les Ross and Joe McLean of Grant Thornton UK LLP were appointed joint administrators of Seafield Logistics Limited on 11 June. Tthe bu...</p>
                                        <div class="readmore"><a href="blog-single.html" class="more-link">Read more</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/3.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Transport managers grow scarce</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#">admin</a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Transport</a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Welcome to the Logistics Job Shop Newsletter; your need-to-know digest and analysis of the events of the past fortnight in the road transport industry. INDUSTRY NEWS Around 34% of transport managers intend to quit within five years, a new surve...</p>
                                        <div class="readmore"><a href="blog-single.html" class="more-link">Read more</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/4.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">How do recruit specialist logistics talent?</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#">admin</a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Logistics,</a></span>
                                                <span class="entry-categories"><a href="#">Tip &amp; Trick</a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>It’s a well-known fact that happy and motivated workers produce better results. A recent study found that happier workers were 12% more productive than their counterparts. It underlines staff morale and wellbeing is not just an HR goal: it’s fundamen...</p>
                                        <div class="readmore"><a href="blog-single.html" class="more-link">Read more</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/5.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <h4 class="entry-time">
                                        <span class="entry-month">Mar</span>
                                        <span class="entry-day">25</span>
                                    </h4>

                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Transport select committee review of LT</a>
                                            </h4>
                                            <div class="entry-meta">
                                                <i class="fa fa-user"></i>
                                                <span class="entry-author"><a href="#">admin</a></span>
                                                <i class="fa fa-folder-open"></i>
                                                <span class="entry-categories"><a href="#">Transport    </a></span>
                                                <i class="fa fa-comment"></i>
                                                <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                            </div>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Many of you will be aware that the Transport Select Committee is conducting an inquiry into the skills and workforce planning of the road haulage sector.  In particular the Committee is investigating what action Government has taken to address concer...</p>
                                        <div class="readmore"><a href="blog-single.html" class="more-link">Read more</a></div>
                                    </div><!-- /.entry-content -->
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

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
                            <div class="widget widget_recent_entries">
                                <h4 class="widget-title">Recent news</h4>
                                <ul>
                                    <li>
                                        <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                        <span class="post-date">March 25, 2017</span>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">Seafield logistics goes into administration</a>
                                        <span class="post-date">March 25, 2017</span>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">Transport managers grow scarce</a>
                                        <span class="post-date">March 25, 2017</span>
                                    </li>
                                </ul>
                            </div><!-- /.widget_recent_entries -->

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
