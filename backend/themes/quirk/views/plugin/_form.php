<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Plugin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plugin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plugin_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plugin_desc')->textarea(['row' => 4]) ?>

    <?= $form->field($model, 'plugin_namespace')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'data')->textarea(['row' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
