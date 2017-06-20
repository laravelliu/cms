<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/13
 * Time: 15:05
 */
use app\assets\lfs\IndexAsset;
use app\support\widgets\JsBlock;

$this->title = $cateInfo->name;
$this->params['breadcrumbs'][] = $cateInfo->name;
$this->registerJsFile($this->theme->baseUrl . '/js/jquery-validate.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile($this->theme->baseUrl . '/js/parallax.js',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);
$this->registerJsFile('//api.map.baidu.com/api?v=2.0&ak=eVjvzAbpMnEFSq2L8fYbNiz1',[IndexAsset::className(), 'depends' => 'app\assets\lfs\IndexAsset']);

$mainAddress = $this->params['mainAddress'];
$location = explode(',',$mainAddress['localtion']);

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
            <?php foreach ($companyInfo as $company):?>
            <div class="col-md-3">
                <h5 class="mag-top0px"><?=$company['name']?></h5>
                <p>
                    <strong><?=$company['description']?> (<?=$company['city']?>)</strong><br>
                    <?=$company['address']?><br>
                    电话: <?=$company['phone']?><br>
                    QQ: <?=$company['qq']?><br>
                    <?php if(!empty($company['email'])):?>
                    邮箱: <a class="scheme" href="mailto:<?=$company['email']?>"><?=$company['email']?></a>
                    <?php endif;?>
                </p>
            </div><!-- /.col-md-3 -->
            <?php endforeach;?>

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
                    <h4 class="flat-title-section style mag-top0px">工作 <span>时间</span></h4>
                    <p>我们将7 X 24小时竭诚为您服务!</p>
                </div>
                <div class="flat-divider d20px"></div>
                <ul class="iconlist">
                    <li><i class="fa fa-clock-o"></i> <strong>星期一:</strong> 06:00 a.m – 10:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>星期二:</strong> 06:00 a.m – 10:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>星期三:</strong> 06:00 a.m – 10:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>星期四:</strong> 06:00 a.m – 10:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>星期五:</strong> 06:00 a.m – 10:00 p.m</li>
                    <li><i class="fa fa-clock-o"></i> <strong>星期六／星期日:</strong> 06:00 a.m – 6:00 p.m(开个小差)</li>
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

<?php JsBlock::begin()?>
    var local = {'h':<?=$location[0]?>,'w':<?=$location[1]?>};
<?php JsBlock::end()?>