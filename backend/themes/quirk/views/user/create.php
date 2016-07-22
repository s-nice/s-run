<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = '创建账号';
$this->params['breadcrumbs'][] = ['label' => '账号', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create panel">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
