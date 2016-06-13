<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = '编辑: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '文章列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="post-update">

    <div class="col-lg-7">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
    
    <div class="col-lg-5">

    </div>
</div>
