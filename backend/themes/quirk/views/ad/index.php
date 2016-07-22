<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Adver;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

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

$this->title = '广告';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-index">

    <p>
        <?= Html::a('创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
			[
				'attribute' => 'id',
				'headerOptions' => ['width' => '10%'],
			],
			'name',
            //'pid',
			[
				'attribute' => 'pid',
				'value' => function ($model) {
					return Adver::getName($model->pid);
				},
				'filter' => $avList,
			],
            
            //'title',
            //'img',
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
			[
				'attribute' => 'img',
				'format' => 'raw',
				'filter' => false,
				'value' => function ($model) {
					return Html::a(Html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>100)), Yii::$app->params['upload_url'].$model->img, ['width'=>100,'rel' => 'fancybox']);
				},
			],
            //'link',
			[
				'attribute' => 'link',
				'filter' => false,
				'value' => function ($model) {
					return Html::a($model->link,$model->link,array('target'=>'_blank'));
				},
				'format' => 'raw',
			],
            // 'orderid',
            // 'is_show',
            // 'created_uid',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
