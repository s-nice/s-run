<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Adver;
/* @var $this yii\web\View */
/* @var $model common\models\Ad */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '广告', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-view">

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
			//'pid',
			[
				'attribute'=>'pid',
				'format' => 'raw',
				'value' => Adver::getName($model->pid),
			],
            'title',
            //'img',
			[
				'attribute'=>'img',
				'format' => 'raw',
				'value' => $model->img?html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>200)):'无图',
			],
            //'link',
            'orderid',
			[
				'attribute'=>'link',
				'format' => 'raw',
				'value' => Html::a($model->link,$model->link,array('target'=>'_blank')),
			],
            //'is_show',
			[
				'attribute'=>'is_show',
				'format' => 'raw',
				'value' => $model->is_show == 1 ? '显示' : '不显示',
			],
            'created_uid',
            'created_at:datetime',
        ],
    ]) ?>

</div>
