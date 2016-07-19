<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Cat;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;

echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);
?>
<div class="post-index">
    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?>    
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
			[
				'attribute' => 'id',
				'headerOptions' => ['width' => '10%'],
			],
			/*
            'img'=>[
                'label' => '图片',
                'format' => [
                    'image',
                    [
                        'height' =>50,
                        'width' => 100
                    ]
                ],
                'value' => function($data){
                    return !empty($data->img)?Yii::$app->params['upload_url'].$data->img:'/themes/quirk/images/default/default.jpg';
                }
            ],
			 * 
			 */
            'title',
			[
				'attribute' => 'img',
				'format' => 'raw',
				'value' => function ($model) {
					return Html::a(Html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>100)), Yii::$app->params['upload_url'].$model->img, ['width'=>100,'rel' => 'fancybox']);
				},
			],
            //'summary',
            //'content:ntext',

            // 'cat_id',
			[
				'attribute' => 'cat_id',
				'value' => function ($model) {
					return Cat::getName($model->cat_id);
				},
				'filter' => Cat::getList(0),
			],
            // 'user_id',
            // 'user_name',
            // 'top',
            'created_at:date',
            'updated_at:date',
            [
                'attribute' => 'is_valid',
                'label' => '发布状态',
                'value' => function($model) {
                    return $model->is_valid == 0 ? '未发布' : '发布';
                },
                'filter' => [
                    0 => '未发布',
                    1 => '发布'
                ]
            ],

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
