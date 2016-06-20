<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Adver */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '广告位', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adver-view">
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
            'remark',
            'created_uid',
            'created_at:datetime',
        ],
    ]) ?>

</div>
