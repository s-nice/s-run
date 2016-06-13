<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Plugin */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '组件管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugin-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
