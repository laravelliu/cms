<?php

use app\assets\help\AppAsset;
use yii\helpers\Url;
use app\modules\help\models\HelpContent;
use \app\support\widgets\JsBlock;

$this->registerJsFile('/helpResource/js/common.js', [AppAsset::className(), 'depends' => 'app\assets\help\AppAsset']);
$this->registerCssFile('/helpResource/css/help-content.css', [AppAsset::className(), 'depends' => 'app\assets\help\AppAsset']);
?>
<div class="container content" style="margin-top: 50px;">

<div id="wrapper" class="help-wrapper clearfix" style="padding-left:0px;">
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<?php foreach($data as $v):?>
			<li>
				<a href="javascript:void(0);">
					<?= $v->classify?> 
					<span class="fa fa-angle-down"></span>
				</a>
				<ul id ='s<?= $v->id?>'>
					<?php $content = HelpContent::find()->select(['id', 'title'])->orderBy('sort asc')->where(['cid' => $v->id, 'status' => 1])->all();?>
					<?php foreach($content as $s):?>
						<?php if($platform == 'pre'): ?>
							<li>
								<a id="c<?=$s->id?>" href="<?= Url::to(["pre/{$s->id}"])?>"><?= $s->title?></a>
							</li>
						<?php elseif($platform == 'apm'): ?>
							<li>
								<a id="c<?=$s->id?>" href="<?= Url::to(["crash/{$s->id}"])?>"><?= $s->title?></a>
							</li>
						<?php else:?>
	                        <li>
	                        	<a id="c<?=$s->id?>" href="<?= Url::to(["{$platform}/{$s->id}"])?>"><?= $s->title?></a>
	                        </li>
	                    <?php endif;?>
					<?php endforeach;?>
				</ul>
			</li>
			<?php endforeach;?>
		</ul>
	</div>

	<!-- Page content -->
	<?php
		$content = null;
		if($id > 0){
			$content = HelpContent::findOne(['id' => $id]);
			if ( empty($content) ){
				$id = 0;
			}
		}
	?>	
	<?php if( $id > 0 && !empty($content)):?>
		<div class="simditor">
			<div name="" class="help-model-right">
				<div class="content-header">
					<h1 id="GettingStarted" name="">
						<?= isset($content->title) ? $content->title : '无'?>
					</h1>
				</div>
				<div class="page-content inset">
					<div id="OverView">
						<div class="row">
							<div class="col-md-12">
								<?= isset($content->content) ? $content->content : '无'?>
							</div>
						</div>
					</div><hr>
				</div>
			</div>
		</div>
	<?php endif;?>
	<?php if( 0 == $id && !empty($data[0])):?>
		<div class="simditor">
			<div  class="help-model-right">
				<?php $content = HelpContent::findOne(['cid' => $data[0]->id , 'status' => 1]);?>
				<div class="content-header">
					<h1 id="GettingStarted" >
						<?= isset($content->title) ? $content->title : '无'?>
					</h1>
				</div>
				<div class="page-content inset">
					<div id="OverView">
						<div class="row">
							<div class="col-md-12">
								<?= isset($content->content) ? $content->content : '无'?>
							</div>
						</div>
					</div><hr>
				</div>
			</div>
		</div>
	<?php endif;?>
</div>

</div>
<?php JsBlock::begin()?>
<script>
    $(document).ready(function(){
        DocMaster.treeMenu();
        DocMaster.sideToggle();
        DocMaster.scrollToElement();

		<?php if(!$id && isset($data[0]) && isset($content)):?>
	        $('#s<?= $data[0]->id?>').css('display','block');
	        $('#c<?= $content->id?>').css({'background-color':'#44b5f6','color':'#fff'});
        <?php endif;?>
        <?php if(isset($id) && isset($content)):?>
	        $('#s<?= $content->cid?>').css('display','block');
	        $('#c<?= $id?>').css({'background-color':'#44b5f6','color':'#fff'});
        <?php endif;?>
        $('.home-ad .close').on('click', function(){
            $(this).parent().toggle('fast');
        });
    });

    $('.help-model-right').addClass('help-content');
</script>
<?php JsBlock::end()?>
<?php
if (isset($content) && $content && isset($content->title)) {
	$this->title = $content->title;
} else {
	$this->title = 'testin';
}

?>