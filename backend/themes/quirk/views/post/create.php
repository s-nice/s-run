<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <div class="col-lg-7">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
    
    <div class="col-lg-5">
    
    </div>

</div>
