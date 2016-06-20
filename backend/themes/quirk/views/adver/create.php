<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Adver */

$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => '广告位', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adver-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
