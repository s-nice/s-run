<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '单页', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'pid',
            //'type',
			[
				'attribute'=>'type',
				'format' => 'raw',
				'value' => $model->type == 1 ? '自定义' : '模板',
			],
            'tem',
            //'content:ntext',
			[
				'attribute'=>'content',
				'format' => 'raw',
			],
            'orderid',
            //'is_show',
			[
				'attribute'=>'is_show',
				'format' => 'raw',
				'value' => $model->is_show == 1 ? '显示' : '不显示',
			],
            //'created_uid',
			[
				'attribute'=>'created_uid',
				'format' => 'raw',
				'value' => User::getName($model->created_uid),
			],
            'created_at:datetime',
        ],
    ]) ?>

</div>
