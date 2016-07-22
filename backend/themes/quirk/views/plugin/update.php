<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Plugin */

$this->title = '更新: ' . $model->plugin_name;
$this->params['breadcrumbs'][] = ['label' => '组件管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->plugin_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="plugin-update panel">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
