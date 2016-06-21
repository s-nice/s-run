<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Site */

$this->title = '站点设置';
$this->params['breadcrumbs'][] = ['label' => '站点设置', 'url' => ['set']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-set">
    
<div class="site-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domain')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'status')->dropDownList([1=>'开启',0=>'关闭']) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'des')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
