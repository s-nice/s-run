<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PluginSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '组件列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugin-index">

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'plugin_name',
            'plugin_desc',
            //'demo_url:url',
            'created_at:datetime',
            'updated_at:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete} {demo}',
                'buttons' => [
                    'demo' => function ($url, $model, $key) {
                        return  Html::a('演示地址', ['plugin/demo','id'=>$model->id], ['title' => '演示','data-pjax'=>'0'] ) ;
                    }
                ],
            ],
        ],
    ]); ?>
</div>
