<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/20
 * Time: 14:24
 */
$this->params['breadcrumbs'][] = '404';
?>

<div id="site-content">

    <!-- Page title -->
    <div class="page-title parallax-style parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2><?=$cateInfo->name?></h2>
                    </div><!-- /.page-title-heading -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <?=$this->render('/layouts/breadcrumbs');?>


    <div class="flat-row">
        <div class="container">
            <div class="row">

                <div class="content" itemprop="mainContentOfPage">
                    <div class="main-content-wrap">
                        <div class="content-inner">
                            <div class="heading-404">
                                <img src="http://demo.linethemes.com/canava/wp-content/themes/canava/assets/img/404.png" alt="404">
                            </div>
                            <div class="content-404">
                                <h3>Looks Like Something Went Wrong!</h3>
                                <p>The page you were looking for is not here. Maybe you want to perform a search?</p>

                                <form role="search" method="get" class="search-form" action="http://demo.linethemes.com/canava/">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </div>
                        </div>
                        <!-- /.content-inner -->
                    </div>
                </div>
                <!-- /#main-content -->

            </div>
            <!-- /.content-wrap -->

        </div>
        <!-- /.wrapper -->
    </div>
    <!-- /#page-body -->

</div>
