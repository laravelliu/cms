<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/8
 * Time: 19:51
 */
use yii\helpers\Url;
?>
<footer class="footer">
    <div class="content-bottom-widgets">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="ft-wrapper clearfix">
                        <div class="footer-50">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="counter">
                                        <div class="counter-image"><i class="fa fa-building-o"></i></div>
                                        <div class="numb-count" data-to="23" data-speed="3000" data-waypoint-active="yes">23</div>
                                        <div class="counter-title">
                                            Offices worldwide
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="counter ft-style1">
                                        <div class="counter-image"><i class="fa fa-group"></i></div>
                                        <div class="numb-count" data-to="14" data-speed="3000" data-waypoint-active="yes">14</div>
                                        <div class="counter-title">
                                            Hardworking people
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="counter ft-style2">
                                        <div class="counter-image"><i class="fa fa-globe"></i></div>
                                        <div class="numb-count" data-to="15" data-speed="3000" data-waypoint-active="yes">15</div>
                                        <div class="counter-title">
                                            Countries covered
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.footer-50 -->

                        <div class="footer-50">
                            <div class="subscribe-form">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                    </div><!-- /.col-md-8 -->

                                    <div class="col-md-4">
                                        <input type="submit" value="Subscribe">
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.subscribe-form -->
                        </div><!-- /.footer-50 -->
                    </div><!-- /.ft-wrapper -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-widgets -->

    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widge widget_text">
                        <div class="textwidget">
                            <h2>canava - business, transport, logistic &amp; warehouse.</h2>
                        </div>
                    </div><!-- /.widget_text -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget_recent_entries">
                        <h4 class="widget-title">Recent News</h4>
                        <ul>
                            <li>
                                <a href="blog-single.html">Raising productivity &amp; morale in the warehouse</a>
                                <span class="post-date">March 25, 2017</span>
                            </li>
                            <li>
                                <a href="blog-single.html">Seafield logistics goes into administration</a>
                                <span class="post-date">March 25, 2017</span>
                            </li>
                        </ul>
                    </div><!-- /.widget_recent_entries -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget_nav_menu">
                        <h3 class="widget-title">Information</h3>
                        <div class="menu-footer-menu-container">
                            <ul class="menu-footer-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">History</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="widget widget_text information">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="textwidget">
                            <p><strong>66 Nicholson Street Buffalo New York US 14214</strong></p>
                            <p>
                                <i class="fa fa-phone"></i>  001-123-456-7890<br>
                                <i class="fa fa-envelope"></i>themesflat@gmail.com
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>  007-123-456-7890<br>
                                <i class="fa fa-envelope"></i>themesflat@gmail.com
                            </p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-content -->

    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="ft-wrap clearfix">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook-official"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="copyright">
                            <div class="copyright-content">
                                Copyright &copy; 2017.Company name All rights reserved.<a href="<?=Url::to(['/'])?>">老刘配货</a>
                            </div>
                        </div>
                    </div><!-- /.ft-wrap -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-content -->
</footer>
