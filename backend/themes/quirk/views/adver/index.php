<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\User;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '广告位';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adver-index">

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
            'remark',
            //'created_uid',
			[
				'attribute' => 'created_uid',
				'value' => function ($model) {
					return User::getName($model->created_uid);
				},
			],
            'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn','header'=>'操作','headerOptions' => ['width' => '10%'],],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
