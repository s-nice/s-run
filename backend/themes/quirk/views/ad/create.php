<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ad */

$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => '广告', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-create">

    <?= $this->render('_form', [
        'model' => $model,
		'avList'=>$avList,
    ]) ?>

</div>
