<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Links */

$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => '友情链接', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
