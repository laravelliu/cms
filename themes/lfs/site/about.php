<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/13
 * Time: 15:28
 */
use app\assets\lfs\IndexAsset;

$this->registerJsFile($this->theme->baseUrl . '/js/jquery.flexslider-min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/jquery.magnific-popup.min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

?>

<!-- Page title -->
<div class="page-title parallax parallax2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>About us</h2>
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
                    <ul class="trail-items">
                        <li class="trail-item"><a href="index-v2.html">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-breadcrumbs -->

<div class="flat-row flat-general sidebar-right pad-bottom75px">
    <div class="container">
        <div class="row">
            <div class="general">
                <div class="general-slider about-slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <a class="popup-gallery" href="<?=$this->theme->baseUrl?>/images/about/1.jpg"><img src="<?=$this->theme->baseUrl?>/images/about/1.jpg" alt="images"></a>
                            </li>
                            <li>
                                <a class="popup-gallery" href="<?=$this->theme->baseUrl?>/images/about/2.jpg"><img src="<?=$this->theme->baseUrl?>/images/about/2.jpg" alt="images"></a>
                            </li>
                            <li>
                                <a class="popup-gallery" href="<?=$this->theme->baseUrl?>/images/about/3.jpg"><img src="<?=$this->theme->baseUrl?>/images/about/3.jpg" alt="images"></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.about-slider -->

                <div class="flat-divider d30px"></div>

                <h3 class="flat-title-section style mag-top10px">Company <span>overview</span></h3>
                <p>At Canava Transport, we know time is of the essence. We have used our legacy Truckload service in the Mid-Atlantic and Midwest regions to shape what our company is today. In addition to Truckload (TL) services, we have expanded our reach on the asset based side to include expedited services, reverse logistics and volume Less-Than-Truckload (LTL) shipments; as well as a compliment of non-asset based solutions to service our customers’ needs throughout North America.</p>
                <p>Our family-run business values hard work, respect, commitment and teamwork and our workplace is characterized by the high energy, enthusiasm and effort of our employees who thrive in this positive environment. We are committed to providing our customers with first-rate service, which starts with our employees’ dedication to our enterprise of services.</p>
                <p>The commitment we have to safety and security is unmatched. We pride ourselves on posting industry leading Compliance, Safety, Accountability (CSA) scores, as well as an industry low claims ratio to give you and your customers that piece of mind when your freight is in our hands. Our primary obligation to our customers and our community starts with the hiring and training of our team members and our pledge to put the safest drivers and equipment on the road.</p>
                <p>From our experienced drivers to our knowledgeable office staff, Canava Transport has the desire and commitment to work hand-in-hand to develop transportation solution that is truly customized to your needs.</p>

                <div class="promobox">
                    <h5 class="promobox-title mag-top0px">We will take care of your cargo or your passenger and deliver them safe and on time.</h5>
                    <div class="group-btn">
                        <a class="button black" href="contact.html">contact us <i class="fa fa-chevron-right"></i></a>
                        <a class="button outline" href="services.html">view services <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!-- /.promobox -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="flat-tabs">
                            <ul class="menu-tabs">
                                <li class="active"><a href="#">Safety</a></li>
                                <li><a href="#">Security</a></li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <p>At Canava Transport, ensuring the safety of our customers, employees and our communities is our priority. We understand the importance of continuous training and are proud of our safety knowledge, experienced staff and ability to exceed industry standards year after year. We have established and continually maintain excellent motor carrier safety ratings and low accident frequencies.</p>
                                    <p>As a company, we have a solid safety performance history and will continue to be a leader in the area of safety and compliance, due to the dedication and professionalism of our fleet of drivers and vehicle maintenance personnel.</p>
                                </div><!-- /.content-inner -->

                                <div class="content-inner">
                                    <p>At Canava Transport, we offer industry-leading asset protection and security compliance programs.</p>
                                    <p>Canava Transport understands that our customers may have important and unique needs related to homeland security regulatory compliance, high-risk products, or brand protection. We offer consultation and proactive partnership to ensure that our customers’ security needs are met.</p>
                                    <p>By leveraging modern and proven technologies, we provide for the integrity of customer assets while in-transit or at one of our facilities.</p>
                                </div><!-- /.content-inner -->
                            </div><!-- /.content-tab -->
                        </div><!-- /.flat-tabs -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <img src="<?=$this->theme->baseUrl?>/images/img-single/1.jpg" alt="images">
                        <div class="flat-divider d30px"></div>
                        <img src="<?=$this->theme->baseUrl?>/images/img-single/2.jpg" alt="images">
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.general -->

            <div class="general-sidebars">
                <div class="sidebar-wrap">
                    <div class="sidebar">
                        <div class="widget widget_nav_menu">
                            <ul class="nav_menu">
                                <li class="menu-item">
                                    <a class="active" href="about.html">About us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="company-history.html">Company history</a>
                                </li>
                                <li class="menu-item">
                                    <a href="our-people.html">our people</a>
                                </li>
                                <li class="menu-item">
                                    <a href="partners.html">Partners</a>
                                </li>
                                <li class="menu-item">
                                    <a href="careers.html">Careers</a>
                                </li>
                                <li class="menu-item">
                                    <a href="faq.html">faq</a>
                                </li>
                                <li class="menu-item">
                                    <a href="testimonials.html">Testimonials</a>
                                </li>
                            </ul>
                        </div><!-- /.widget_nav_menu -->

                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title">Company news</h4>
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

                        <div class="widget widget_text">
                            <div class="textwidget">
                                <div class="content-text">
                                    <h4 class="title">How can we help you?</h4>
                                    <p>Our customer service standards provide information on how we will handle your enquiry. There is also compliments and complaints information to help you when you lodge feedback with us.</p>
                                    <a class="button white" href="#">Contact Us<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div><!-- /.textwidget -->
                        </div><!-- /.widget_text -->

                    </div><!-- /.sidebar -->
                </div><!-- /.sidebar-wrap -->
            </div><!-- /.general-sidebars -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog -->
