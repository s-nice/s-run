<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cat */

$this->title = '编辑: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '分类管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="cat-update panel">

    <?= $this->render('_form', [
        'model' => $model,
		'catList'=>$catList,
    ]) ?>

</div>
