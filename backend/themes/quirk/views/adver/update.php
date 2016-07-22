<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adver */

$this->title = '更新: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '广告位', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="adver-update panel">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
