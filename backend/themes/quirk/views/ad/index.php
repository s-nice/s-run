<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Adver;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

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
            //'pid',
			[
				'attribute' => 'pid',
				'value' => function ($model) {
					return Adver::getName($model->pid);
				},
				'filter' => $avList,
			],
            'name',
            //'title',
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
            // 'orderid',
            // 'is_show',
            // 'created_uid',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
