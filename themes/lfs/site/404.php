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
                        <h2>404</h2>
                    </div><!-- /.page-title-heading -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <?=$this->render('/layouts/breadcrumbs');?>

    <div class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-404">
                        <div class="heading-404">
                            <img src="<?=$this->theme->baseUrl?>/images/404.png" alt="images">
                        </div>
                        <div class="content-404">
                            <h3>好像哪里出了问题!</h3>
                            <p>你想找的页面不在这里。 也许你要搜索一下?</p>

                            <div class="widget widget_search">
                                <form class="search-form">
                                    <input type="search" class="search-field" placeholder="Search …">
                                    <input type="submit" class="search-submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    <!-- /#page-body -->

</div>
