<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Cat;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'size'=>50]) ?>
    
    <?= $form->field($model, 'cat_id')->dropDownList(Cat::enumItems()) ?>
    
    <?= $form->field($model, 'img')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            ]
    ]) ?>
        
    <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
            'options'=>[
                'initialFrameWidth' => '50%',
                'initialFrameHeight' => 300,
                'toolbars' => [
                    [
                        'fullscreen', 'undo', 'redo', '|',
                        'bold', 'italic','formatmatch', '|',
                        'forecolor', 'insertorderedlist','insertunorderedlist','fontsize', '|', 
                        'link', 'unlink', 'anchor', '|',
                        'horizontal','insertcode', '|',
                        'simpleupload', 'insertimage', 
                    ]
                ],   
            ]
        ]) ?>
        
    <?= $form->field($model, 'summary')->textarea(['rows' => 3,'cols' => 30]) ?>

    <?= $form->field($model, 'top')->dropDownList(['0'=>'否','1'=>'是']) ?>

    <?= $form->field($model, 'is_valid')->dropDownList(['1'=>'是','0'=>'否']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
