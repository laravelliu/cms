<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/8/8
 * Time: 18:38
 */

use yii\helpers\Url;

?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>轮播图</h5>
                <div class="ibox-tools">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?=Url::to(['index/add-slider'])?>">添加轮播图</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ibox-content">
                <div class="carousel slide" id="carousel1">
                    <?php if(!empty($sliderList)): ?>
                    <div class="carousel-inner">
                        <?php foreach ($sliderList as $k => $slider):?>
                        <div class="item <?php if($k == 0):?>active<?php endif;?>">
                            <img alt="image" class="img-responsive" src="<?=$slider['images_url']?>">
                        </div>
                        <?php endforeach;?>
                    </div>
                    <?php if(count($sliderList) > 1):?>
                    <a data-slide="prev" href="#carousel1" class="left carousel-control">
                        <span class="icon-prev"></span>
                    </a>

                    <a data-slide="next" href="#carousel1" class="right carousel-control">
                        <span class="icon-next"></span>
                    </a>
                        <?php endif;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>