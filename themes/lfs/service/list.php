<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:21
 */
use app\assets\lfs\IndexAsset;

$this->title = '服务';
$this->params['breadcrumbs'][] = '服务';

$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

?>

<!-- Page title -->
<div class="page-title parallax parallax3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>Services</h2>
                </div><!-- /.page-title-heading -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<?=$this->render('/layouts/breadcrumbs');?>

<div class="flat-row pad-bottom60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="flat-title-section style1 style2">Canava transport services is a full service, freight <span class="scheme">transportation</span> and <span class="scheme">logistics</span> company.</h3>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
        <div class="flat-divider d20px"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/1.jpg" alt="images"></div>
                        <h5 class="box-title">Packaged goods transport</h5>
                    </div>
                    <div class="box-content">
                        Focuses on the packaging requirements of goods in transit, in particular for items traveling overland by road or rail.
                        <p class="box-readmore">
                            <a href="services-detail.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->

                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/3.jpg" alt="images"></div>
                        <h5 class="box-title">Sea and air freight</h5>
                    </div>
                    <div class="box-content">
                        By using a combination of sea and air freight, you bring added flexibility to your supply chain.
                        <p class="box-readmore">
                            <a href="services-detail-v3.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->

                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/5.jpg" alt="images"></div>
                        <h5 class="box-title">Warehousing and storage</h5>
                    </div>
                    <div class="box-content">
                        Canava is able to offer heated or unheated warehouse solutions both for short-term and for long-term storage.
                        <p class="box-readmore">
                            <a href="services-detail-v5.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->
            </div><!-- /.col-md-6 -->

            <div class="col-md-6">
                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/2.jpg" alt="images"></div>
                        <h5 class="box-title">Multimodal transport</h5>
                    </div>
                    <div class="box-content">
                        When it comes to multimodal transport services, Canava Transport has connections you can trust.
                        <p class="box-readmore">
                            <a href="services-detail-v2.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->

                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/4.jpg" alt="images"></div>
                        <h5 class="box-title">Logistics solutions</h5>
                    </div>
                    <div class="box-content">
                        Smart and sustainable business requires the skills of logistics experts who are able to think ahead.
                        <p class="box-readmore">
                            <a href="services-detail-v4.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->

                <div class="flat-iconbox ">
                    <div class="box-header">
                        <div class="box-icon"><img src="<?=$this->theme->baseUrl?>/images/services/6.jpg" alt="images"></div>
                        <h5 class="box-title">Forwarding services</h5>
                    </div>
                    <div class="box-content">
                        With our extensive network, we will find a competitive and efficient solution to your next assignment.
                        <p class="box-readmore">
                            <a href="services-detail-v6.html">Read more</a>
                        </p>
                    </div>
                </div><!-- /.flat-iconbox -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.blog -->
