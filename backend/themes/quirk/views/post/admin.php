<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use common\models\Cat;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
	['class' => 'kartik\grid\CheckboxColumn'],
	[
		'attribute' => 'id',
		'headerOptions' => ['width' => '10%'],
		'vAlign'=>'middle',
	],
    [
		'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'title',
        'vAlign'=>'middle',
    ],
	[
		'attribute' => 'img',
		'format' => 'raw',
		'value' => function ($model) {
			return Html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>100));
		},
	],
	[
		'attribute' => 'cat_id',
		'value' => function ($model) {
			return Cat::getName($model->cat_id);
		},
		'filter' => Cat::getList(0),
	],
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
	
    [
        'class' => 'kartik\grid\ActionColumn',
       
    ],
    
];
echo GridView::widget([
	'export' => false,
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
   
    'toolbar' =>  [
		// '{export}',
		// '{toggleData}'
    ],
    'pjax' => true,
  
]);

?>
