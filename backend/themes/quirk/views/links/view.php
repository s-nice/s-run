<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model common\models\Links */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '友情链接', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-view">
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
            //'img',
			[
				'attribute'=>'img',
				'format' => 'raw',
				'value' => $model->img?html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>200)):'无图',
			],
            //'link',
			[
				'attribute'=>'link',
				'format' => 'raw',
				'value' => Html::a($model->link,$model->link,array('target'=>'_blank')),
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
