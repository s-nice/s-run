<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<!--
    <?= $form->field($model, 'pid')->textInput() ?>
-->
	<?= $form->field($model, 'type')->dropDownList([1=>'自定义',2=>'模板'], ['onchange'=>'change()']) ?>

    <?= $form->field($model, 'tem')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'orderid')->textInput() ?>

    <?= $form->field($model, 'is_show')->dropDownList([1=>'显示',0=>'不显示']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
	function change(){
		var type=$('#page-type').val();
		if(type==1){
			$('.field-page-tem').hide();
			$('.field-page-content').show();
		}else{
			$('.field-page-tem').show();
			$('.field-page-content').hide();
		}
	}
</script>