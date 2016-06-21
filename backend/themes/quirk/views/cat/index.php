<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Cat;
/* @var $this yii\web\View */
/* @var $searchModel common\models\CatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分类管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-index">

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
			//'pid',
			[
				'attribute' => 'pid',
				'value' => function ($model) {
					return Cat::getName($model->pid);
				},
				'filter' => Cat::getList(0),
			],
            'name',
			'created_uid',
			'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]);Pjax::end(); ?>
</div>
