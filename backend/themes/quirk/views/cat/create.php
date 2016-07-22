<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cat */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '分类管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-create panel">

    <?= $this->render('_form', [
        'model' => $model,
		'catList'=>$catList,
    ]) ?>

</div>
