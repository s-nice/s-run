<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-form panel-body">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'pid')->dropDownList($avList, ['prompt'=>'请选择','style'=>'width:120px']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            ]
    ]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true,'size'=>30]) ?>

    <?= $form->field($model, 'orderid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_show')->dropDownList(['1'=>'是','0'=>'否']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
