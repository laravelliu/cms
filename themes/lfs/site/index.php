<?php
use app\assets\lfs\IndexAsset;
use app\support\widgets\JsBlock;
use yii\widgets\ActiveForm;

$this->registerJsFile($this->theme->baseUrl . '/js/owl.carousel.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/jquery-validate.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/jquery.themepunch.tools.min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/jquery.themepunch.revolution.min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/slider.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile('//api.map.baidu.com/api?v=2.0&ak=eVjvzAbpMnEFSq2L8fYbNiz1',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

$mainAddress = $this->params['mainAddress'];
$location = explode(',',$mainAddress['localtion']);

?>

<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
            <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="<?=$this->theme->baseUrl?>/images/slides/1.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Standard sea freight<br>services
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    If low costs matter for your shipment, try our sea freight<br>services.
                </div>
                <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>

            <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="<?=$this->theme->baseUrl?>/images/slides/2.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    International road<br>transport
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    The road transport industry is the backbone of strong<br>economies and dynamic societies.
                </div>
                <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>

            <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="<?=$this->theme->baseUrl?>/images/slides/3.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide center" data-x="40" data-y="100" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                    Warehousing and<br>storage
                </div>
                <div class="tp-caption sfr desc-slide center" data-x="40" data-y="240" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    Warehouse services can be offered as a single service or<br>combined with transportation.
                </div>
                <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="40" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Read more</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>

                <div class="tp-caption sfr flat-button-slider" data-x="225" data-y="370" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut"><a href="#">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
            </li>
        </ul>
    </div>
</div>

<!-- Promobox -->
<div class="flat-row bg-scheme pad-top0px pad-bottom0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promobox style1 style2 clearfix">
                    <h5 class="promobox-title">We are honored to be a leading and reliable partner in the field of multimodal transport in US</h5>
                    <a class="button black sm" href="contact.html">contact us<i class="fa fa-chevron-right"></i></a>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!-- Flat imagebox -->
<div class="flat-row parallax-style parallax1">
    <div class="overlay bg-scheme1"></div>
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-imagebox clearfix">
                    <div class="flat-item item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="<?=$this->theme->baseUrl?>/images/imagebox/1.jpg" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="services-detail.html">Why choose canava transport ?</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">At Canava Transport, we know time is of the essence. We have used our legacy Truckload service in the Mid-Atlantic and Midwest regions to shape what our company is today.</div>
                                    <div class="box-button">
                                        <a class="button bg-scheme3" href="about.html">read more <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.imagebox -->
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="<?=$this->theme->baseUrl?>/images/imagebox/2.jpg" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="services-detail-v1.html">Are you optimising your warehouse space ?</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">Warehousing, Storage and 3PL services offered by the Canava group have become an integral part of our client’s requirements. As our clients continued to demand increased savings and efficiencies in their businesses.</div>
                                    <div class="box-button">
                                        <a class="button bg-scheme3" href="about.html">read more <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.imagebox -->
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="imagebox">
                            <div class="box-wrapper">
                                <div class="box-image">
                                    <img src="<?=$this->theme->baseUrl?>/images/imagebox/3.jpg" alt="images">
                                </div>
                                <div class="box-header">
                                    <h5 class="box-title">
                                        <a href="services-detail-v2.html">The gallery of canava transport</a>
                                    </h5>
                                </div>
                                <div class="box-content">
                                    <div class="box-desc">Some images highlighting our warehouse, transport, Cargo and logistics expertise.</div>
                                    <div class="box-button">
                                        <a class="button bg-scheme3" href="about.html">read more <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.imagebox -->
                    </div><!-- /.item-three-column -->
                </div><!-- /.flat-imagebox -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!-- Flat iconbox style -->
<div class="flat-row pad-top60px pad-bottom10px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="flat-title-section style">What we <span class="scheme">offer.</span></h2>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="flat-divider d40px"></div>
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-iconbox-style clearfix">
                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-dropbox"></i></div>
                                <h5 class="box-title">Packaged goods transport</h5>
                            </div>
                            <div class="box-content">
                                Focuses on the packaging requirements of goods in transit, in particular for items traveling overland by road or rail.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-truck"></i></div>
                                <h5 class="box-title">Multimodal transport</h5>
                            </div>
                            <div class="box-content">
                                Combined rail road transport is particularly well suited to the shipping of hazardous goods since it reduces risk.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-cube"></i></div>
                                <h5 class="box-title">Warehousing and storage</h5>
                            </div>
                            <div class="box-content">
                                Canava is able to offer heated or unheated warehouse solutions both for short-term and for long-term storage.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-iconbox-style clearfix">

                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-mail-forward"></i></div>
                                <h5 class="box-title">Forwarding services</h5>
                            </div>
                            <div class="box-content">
                                With our extensive network, we will find a competitive and efficient solution to your next assignment.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-plane"></i></div>
                                <h5 class="box-title">Sea and air freight</h5>
                            </div>
                            <div class="box-content">
                                By using a combination of sea and air freight, you bring added flexibility to your supply chain.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->

                    <div class="flat-item item-three-column">
                        <div class="iconbox style1">
                            <div class="box-header">
                                <div class="box-icon"><i class="fa fa-globe"></i></div>
                                <h5 class="box-title">Logistics solutions</h5>
                            </div>
                            <div class="box-content">
                                Smart and sustainable business requires the skills of logistics experts who are able to think ahead.
                            </div>
                        </div>
                    </div><!-- /.item-three-column -->
                </div><!-- /.flat-iconbox-style -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row parallax parallax4 pad-top120px pad-bottom120px">
    <div class="overlay bg-scheme1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="make-quote">
                    <h1 class="title">From around the corner to<br>around the globe.</h1>
                    <h5 class="desc">We will take care of your cargo or your passenger and deliver them safe and on time.</h5>
                    <div class="group-btn">
                        <a class="button lg" href="#">make a quote <i class="fa fa-chevron-right"></i></a>
                        <a class="button lg outline style1" href="contact.html">contact us <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div><!-- /.make-quote -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!-- Promobox -->
<div class="flat-row bg-scheme1 pad-top0px pad-bottom0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promobox style1 style2 clearfix">
                    <h5 class="promobox-title">Contact us now to get quote for all your global shipping and cargo need.</h5>
                    <a class="button black sm" href="contact.html">contact us<i class="fa fa-chevron-right"></i></a>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row blog-shortcode blog-home pad-top60px pad-bottom0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="flat-title-section style mag-bottom0px">Latest <span class="scheme">news.</span></h2>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="content-wrap">
                <div class="main-content">
                    <div class="main-content-wrap">
                        <div class="content-inner clearfix">
                            <article class="flat-item item-three-column blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/b1.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-time">
                                                <span class="entry-day">25</span>
                                                <span class="entry-month">Mar</span>
                                            </h4>
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                            </h4>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>It’s a well-known fact that happy and motivated workers produce better results. A recent study found that happier workers were 12% ...</p>
                                    </div><!-- /.entry-content -->
                                    <div class="entry-footer">
                                        <div class="entry-meta">
                                            <i class="fa fa-user"></i>
                                            <span class="entry-author"><a href="#">admin</a></span>
                                            <i class="fa fa-folder-open"></i>
                                            <span class="entry-categories"><a href="#">Warehouse</a></span>
                                            <i class="fa fa-comment"></i>
                                            <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                        </div>
                                    </div>
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="flat-item item-three-column blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/b2.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-time">
                                                <span class="entry-day">25</span>
                                                <span class="entry-month">Mar</span>
                                            </h4>
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Seafield logistics goes into administration</a>
                                            </h4>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Seafield Logistics has gone into administration and two of its operational units have been sold. David Riley, Les Ross and Joe ...</p>
                                    </div><!-- /.entry-content -->
                                    <div class="entry-footer">
                                        <div class="entry-meta">
                                            <i class="fa fa-user"></i>
                                            <span class="entry-author"><a href="#">admin</a></span>
                                            <i class="fa fa-folder-open"></i>
                                            <span class="entry-categories"><a href="#">Jobs</a></span>
                                            <i class="fa fa-comment"></i>
                                            <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                        </div>
                                    </div>
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->

                            <article class="flat-item item-three-column blog-post">
                                <div class="entry-wrapper">
                                    <div class="entry-cover">
                                        <a href="blog-single.html">
                                            <img src="<?=$this->theme->baseUrl?>/images/blog/b3.jpg" alt="images">
                                        </a>
                                    </div><!-- /.entry-cover -->
                                    <div class="entry-header">
                                        <div class="entry-header-content">
                                            <h4 class="entry-time">
                                                <span class="entry-day">25</span>
                                                <span class="entry-month">Mar</span>
                                            </h4>
                                            <h4 class="entry-title">
                                                <a href="blog-single.html">Transport managers grow scarce</a>
                                            </h4>
                                        </div><!-- /.entry-header-content -->
                                    </div><!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Welcome to the Logistics Job Shop Newsletter; your need-to-know digest and analysis of the events of the past fortnight in the roa...</p>
                                    </div><!-- /.entry-content -->
                                    <div class="entry-footer">
                                        <div class="entry-meta">
                                            <i class="fa fa-user"></i>
                                            <span class="entry-author"><a href="#">admin</a></span>
                                            <i class="fa fa-folder-open"></i>
                                            <span class="entry-categories"><a href="#">Transport</a></span>
                                            <i class="fa fa-comment"></i>
                                            <span class="entry-comments-link"><a href="#">0 Comment</a></span>
                                        </div>
                                    </div>
                                </div><!-- /.entry-wrapper -->
                            </article><!-- /.blog-post -->
                        </div><!-- /.content-inner -->
                    </div><!-- /.main-content-wrap -->
                </div><!-- /.main-content -->
            </div><!-- /.content-wrap  -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row pad-bottom70px bg-f2f4f8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="flat-title-section style w90 mag-bottom0px">What clients <span class="scheme">say.</span></h2>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <div class="flat-divider d48px"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="flat-testimonial-owl">
                    <div class="flat-testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-image">
                                <img src="<?=$this->theme->baseUrl?>/images/testimonials/star.png" alt="images">
                            </div>
                            <div class="testimonial-author">
                                <strong class="author-name">SaNora Anderson</strong>
                                <div class="author-info"></div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                Canava is great to work with. They have many locations, competitive rates, and their staff is excellent will go above and beyond for their partners. I look forward to working with them in the future. <br>Thank you!
                            </blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="flat-testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-image">
                                <img src="<?=$this->theme->baseUrl?>/images/testimonials/star.png" alt="images">
                            </div>
                            <div class="testimonial-author">
                                <strong class="author-name">MATTIAS NUFFER JANSEN</strong>
                                <div class="author-info"></div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                Thank you for delivering the chairs to us so quickly. Your delivery guys were most helpful and courteous. You have been a pleasure to deal with and we will not hesitate to use your services again or recommend you.
                            </blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="flat-testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-image">
                                <img src="<?=$this->theme->baseUrl?>/images/testimonials/star.png" alt="images">
                            </div>
                            <div class="testimonial-author">
                                <strong class="author-name">L M GARRINGTON (MRS)</strong>
                                <div class="author-info"></div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                We have always found them to be highly professional and reliable, and have assisted us in delivering a high standard service to our customers. Canava have been a valuable supplier to Truflo and continue to be so.
                            </blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="flat-testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-image">
                                <img src="<?=$this->theme->baseUrl?>/images/testimonials/star.png" alt="images">
                            </div>
                            <div class="testimonial-author">
                                <strong class="author-name">Kenvil Miland</strong>
                                <div class="author-info"></div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                We are very happy with service. The dispatchers are professional and responsive. There are no obstacles, and Lance has been a good problem solver for us, like when we had a tough time finding containers for overseas deliveries.
                            </blockquote>
                        </div>
                    </div><!-- /.testimonial -->

                    <div class="flat-testimonial">
                        <div class="testimonial-meta">
                            <div class="testimonial-image">
                                <img src="<?=$this->theme->baseUrl?>/images/testimonials/star.png" alt="images">
                            </div>
                            <div class="testimonial-author">
                                <strong class="author-name">Mikel Henson</strong>
                                <div class="author-info"></div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <blockquote>
                                In a commodity business like trucking, GW really stands out because of its customer service. They come out to discuss our needs, give us fast and accurate quotes, and get me a truck when they say they will. That makes it a relationship.
                            </blockquote>
                        </div>
                    </div><!-- /.testimonial -->
                </div><!-- /.flat-testimonial -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!-- Promobox -->
<div class="flat-row bg-scheme pad-top20px pad-bottom20px">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c1.png" alt="images">
                    </div>
                    <p class="tooltip">Laurentides</p>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c2.png" alt="images">
                    </div>
                    <p class="tooltip">Veolia</p>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c3.png" alt="images">
                    </div>
                    <p class="tooltip">Plane Business</p>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c4.png" alt="images">
                    </div>
                    <p class="tooltip">Arrow GLS</p>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c5.png" alt="images">
                    </div>
                    <p class="tooltip">MWR Transport</p>
                </div>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2">
                <div class="clients-image style">
                    <div class="item-img">
                        <img src="<?=$this->theme->baseUrl?>/images/client/c6.png" alt="images">
                    </div>
                    <p class="tooltip">Bradbell</p>
                </div>
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<!-- Map -->
<div class="flat-row pad-top0px pad-bottom0px">
    <div id="flat-map"></div>
</div><!-- /.flat-row -->

<div class="flat-row pad-top65px pad-bottom80px">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="flat-title-section title-center">Request a quick quote.</h2>
                <p class="text-center">Fill out the form to get your quote within the hour. We guaranty safe and timley<br>product delivery either for your personal travel or your products.</p>
                <div class="flat-divider d20px"></div>
                <?php $form = ActiveForm::begin([
                        'id' => 'contactform',
                        'method' => 'post',
                        'action' => ['/company/save-contact'],
                        'fieldConfig' => [
                            'template' => "<p>{input}</p>{error}"
                        ]
                ])?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model,'name')->textInput(['placeholder' => '留下您的大名'])->label(false)?>
                            <?= $form->field($model,'email')->textInput(['placeholder' => '有邮箱可以留一下'])->label(false)?>
                            <?= $form->field($model,'type')->dropDownList(Yii::$app->params['contactType'],['placeholder' => '选择您的需求'])->label(false)?>
                            <?= $form->field($model,'phone')->textInput(['placeholder' => '电话联系您'])->label(false)?>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <?= $form->field($model,'content')->textarea(['placeholder' => '简单描述您的需求'])->label(false)?>
                            <span class="form-submit">
                                <input name="submit" type="button" id="submit" class="submit" value="快速联系">
                            </span>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                <?php ActiveForm::end();?>

            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<?php JsBlock::begin()?>
        <script>
            var local = {'h':<?=$location[0]?>,'w':<?=$location[1]?>};
            $('#submit').click(function () {
                var form = $('#contactform');

                if (form.find('.has-error').length) {
                    return false;
                }

                $.ajax({
                    url    : form.attr('action'),
                    type   : 'post',
                    data   : form.serialize(),
                    dataType:'json',

                    success: function (data) {

                       if (0 == data['code']) {
                           alert('提交成功');
                       } else {

                       }
                    }
                });
            });

        </script>
<?php JsBlock::end()?>