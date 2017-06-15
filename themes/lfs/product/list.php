<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 14:17
 */
use app\assets\lfs\IndexAsset;

$this->title = '产品';
$this->params['breadcrumbs'][] = '产品';

$this->registerJsFile($this->theme->baseUrl . '/js/imagesloaded.min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/jquery.isotope.min.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

?>

<!-- Page title -->
<div class="page-title parallax-style parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2>Gallery</h2>
                </div><!-- /.page-title-heading -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<?=$this->render('/layouts/breadcrumbs');?>

<!-- Portfolio -->
<section class="flat-row pad-bottom80px">
    <div class="container">
        <div class="row">
            <div class="flat-wrapper">
                <div class="flat-portfolio portfolio-grid-alt">
                    <ul class="portfolio-filter">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".warehouse" href="#">Warehouse</a></li>
                        <li><a data-filter=".cargo" href="#">Cargo</a></li>
                        <li><a data-filter=".transport" href="#">Transport</a></li>
                        <li><a data-filter=".logistics" href="#">Logistics</a></li>
                    </ul><!-- /.project-filter -->

                    <div class="portfolio">
                        <div class="portfolio-item item-three-column warehouse">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.1.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Warehouse canava</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Warehouse</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column cargo">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.2.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Cargo photos 2017</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Cargo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column transport">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.3.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Sea delivery</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Transport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column logistics">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.4.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Logistics photos 2017</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Logistics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column transport">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.5.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Air delivery</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Transport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column transport">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.6.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Transport photos</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Transport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column cargo">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.7.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Cargo Photos</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Cargo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column coaching logistics">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.8.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Logistics Photos</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Logistics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->

                        <div class="portfolio-item item-three-column warehouse">
                            <div class="portfolio-wrap">
                                <div class="portfolio-thumbnail">
                                    <a href="portfolio-single.html"><img src="<?=$this->theme->baseUrl?>/images/portfolio/1.9.jpg" alt="images"></a>
                                    <div class="flat-figcaption">
                                        <div class="project-buttons">
                                            <a href="portfolio-single.html"><span>Quick View</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-wrap">
                                        <h6 class="portfolio-title">
                                            <a href="portfolio-single.html">Warehouse envato</a>
                                        </h6>
                                        <ul class="portfolio-categories">
                                            <li><a href="#">Warehouse</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.portfolio-item -->
                    </div><!-- /.portfolio -->
                </div><!-- /.flat-portfolio -->
            </div><!-- /.flat-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
