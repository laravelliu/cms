<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="container content" style="margin-top: 50px;">
<div class="page-header">
	<?= Html::a('添加分类', ['addclassify'], ['class' => 'btn btn-primary']) ?>
</div>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'emptyText' => '暂无客户！',
    'columns' => [
        [
            'label' => '分类',
            'attribute' => 'classify',
            'format' => 'raw',
            'value' => function($data){
                return html::a($data->classify, Url::to(['helpinfo/showcontent', 'page' => Yii::$app->request->get('page',1) , 'id' => $data->id]) );
            }
        ],
        [
            'label' => '状态',
            'attribute' => 'status',
            'format' => 'raw',
            'value' => function($data) {
                if($data->status == '0')
                    return '不显示';
                else
                    return '显示';
            },
        ],
        [
            'label' => '排序',
            'attribute' => 'sort',
            'format' => 'raw',
        ],
        [
            'label' => '平台',
            'attribute' => 'platform',
            'format' => 'raw',
        ],
        [
            'label' => '创建时间',
            'attribute' => 'create_time',
            'format' => 'raw',
            'value' => function($data) {
                return Yii::$app->formatter->asDate($data->create_time, 'php:Y-m-d');
            }
        ],
        [
            'label' => '操作',
            'format' => 'raw',
            'value' => function($data) {
                return  Html::a('<span class="label label-primary"  title="修改">修改</span>', Url::to(['helpinfo/addclassify', 'id' => $data->id])) . ' ' . Html::a('<span class="label label-primary"  title="查看内容">查看内容</span>',['helpinfo/showcontent', 'page' => 1,'id' => $data->id]);
            }
        ]
    ],
]); 
?>
</div>
