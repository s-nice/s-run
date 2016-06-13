<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->params['breadcrumbs'][] = ['label' => '组件管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = '演示';
?>
<div class="row">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'demo')->widget($plugin['plugin_namespace'],$plugin['data'])->label($plugin['plugin_name']) ?>
    
        <?php ActiveForm::end(); ?>
    </div>
    
    <div class="col-lg-6">
    
    </div>
</div>