<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LinksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '友情链接';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-index">
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
            //'img',
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
            //'link',
			[
				'attribute' => 'link',
				'value' => function ($model) {
					return Html::a($model->link,$model->link,array('target'=>'_blank'));
				},
				'format' => 'raw',
			],
            //'orderid',
			[
				'attribute' => 'orderid',
				'headerOptions' => ['width' => '10%'],
			],
            // 'is_show',
            // 'created_uid',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
