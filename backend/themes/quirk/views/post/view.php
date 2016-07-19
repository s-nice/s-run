<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Cat;
/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 0,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'float'],
            'buttons' => [],
            'thumbs' => ['width' => 68, 'height' => 50],
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)'
                ]
            ]
        ],
    ]
]);
?>
<div class="post-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'summary',
            //'content:ntext',
            [
				'attribute'=>'img',
				'format' => 'raw',
				//'value' => $model->img?html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>200)):'无图',
				'value' => Html::a(Html::img(Yii::$app->params['upload_url'].$model->img,array('width'=>200)), Yii::$app->params['upload_url'].$model->img, ['width'=>100,'rel' => 'fancybox']),
			],
            //'cat_id',
			[
				'attribute'=>'cat_id',
				'format' => 'raw',
				'value' => Cat::getName($model->cat_id),
			],
            'user_id',
            
            //'top',
			[
				'attribute'=>'top',
				'format' => 'raw',
				'value' => $model->top == 1 ? '是' : '否',
			],
            //'is_valid',
			[
				'attribute'=>'is_valid',
				'format' => 'raw',
				'value' => $model->is_valid == 1 ? '是' : '否',
			],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
