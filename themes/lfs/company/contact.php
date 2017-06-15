<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/13
 * Time: 15:05
 */
use app\assets\lfs\IndexAsset;

$this->title = $cateInfo->name;
$this->params['breadcrumbs'][] = $cateInfo->name;
$this->registerJsFile($this->theme->baseUrl . '/js/jquery-validate.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile('//api.map.baidu.com/api?v=2.0&ak=eVjvzAbpMnEFSq2L8fYbNiz1',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

?>

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
            <div class="col-md-3">
                <h5 class="mag-top0px">Headquarters</h5>
                <p>
                    <strong>Global Transport, New York</strong><br>
                    66 Nicholson St. New York US<br>
                    Tel: +012 222 989888<br>
                    Fax: +012 222 989899<br>
                    Email: <a class="scheme" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </p>
            </div><!-- /.col-md-3 -->

            <div class="col-md-3">
                <h5 class="mag-top0px">canava<span class="scheme">england</span></h5>
                <p>
                    <strong>Headquarters (London Office)</strong><br>
                    6-8 Spring St, London<br>
                    Tel: +012 222 989888<br>
                    Fax: +012 222 989899<br>
                    Email: <a class="scheme" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </p>
            </div><!-- /.col-md-3 -->

            <div class="col-md-3">
                <h5 class="mag-top0px">canava<span class="scheme">italy</span></h5>
                <p>
                    <strong>Headquarters (Rome Office)</strong><br>
                    7 Mario Der Rossi, Roma<br>
                    Tel: +012 222 989888<br>
                    Fax: +012 222 989899<br>
                    Email: <a class="scheme" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </p>
            </div><!-- /.col-md-3 -->

            <div class="col-md-3">
                <h5 class="mag-top0px">canava<span class="scheme">germany</span></h5>
                <p>
                    <strong>Headquarters (Munich Office)</strong><br>
                    Schwanthaler Straße 75a<br>
                    Tel: +012 222 989888<br>
                    Fax: +012 222 989899<br>
                    Email: <a class="scheme" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </p>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row pad-top0px pad-bottom30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="flat-map"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->

<div class="flat-row pad-bottom40px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="flat-contact-us">
                    <h4 class="flat-title-section style mag-top0px">Opening <span>hours</span></h4>
                    <p>Find out opening hours and information for Canava Transport. Thank you !</p>
                </div>
                <div class="flat-divider d20px"></div>
                <ul class="iconlist">
                    <li><i class="fa fa-clock-o"></i> <strong>Monday:</strong> 08:00 a.m – 06:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>Tuesday:</strong> 08:00 a.m – 06:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>Wednesday:</strong> 08:00 a.m – 06:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>Thursday:</strong> 08:00 a.m – 06:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>Friday:</strong> 08:00 a.m – 06:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>Saturday – Sunday:</strong> Closed</li>
                </ul>

                <div class="flat-divider d20px"></div>
            </div><!-- /.col-md-4 -->

            <div class="col-md-8">
                <p>Please fill out the following form and a representative will contact you.</p>
                <div class="flat-divider d10px"></div>
                <form id="contactform" method="post" action="./contact/contact-process.php">
                    <div class="row">
                        <div class="col-md-6">
                            <p><input id="name" name="name" type="text" value="" placeholder="Name" required="required"></p>

                            <p><input id="email" name="email" type="email" value="" placeholder="Email" required="required"></p>

                            <p><select class="wpcf7-form-control wpcf7-select"><option value="Transport">Transport</option><option value="Logistics">Logistics</option></select></p>

                            <p><input id="phone" name="phone" type="text" value="" placeholder="Phone Number" required="required"></p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <p><textarea name="message" placeholder="Comment" required="required"></textarea></p>
                                    <span class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Sent Mail">
                                    </span>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->