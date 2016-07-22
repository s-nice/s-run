<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = '更新: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '单页', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="page-update panel">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
