<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Yii::$app->request->get('page',1);
?>

<div class="container content" style="margin-top: 50px;">
<div class="page-header">
    <?= Html::a('添加内容', ['add-info'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('返回',["list?page=$page"],['class' => 'btn btn-primary']) ?>
</div>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'emptyText' => '暂无客户！',
    'columns' => [
        [
            'label' => '标题',
            'attribute' => 'title',
            'format' => 'raw',
        ],

        [
            'label' => '显示',
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
            'label' => '内容',
            'attribute' => 'content',
            'format' => 'raw',
            'value' => function($data) {
                return mb_substr(strip_tags($data->content),0,15);
            },
        ],
        [
            'label' => '排序',
            'attribute' => 'sort',
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
                return  html::a('<span class="label label-primary"  title="修改">修改 </span>', Url::to(['helpinfo/edit', 'id' => $data->id]));
            }
        ]
    ],
]); ?>
</div>
