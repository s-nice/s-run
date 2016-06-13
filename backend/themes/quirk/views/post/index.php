<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'label_img'=>[
                'label' => '标签图',
                'format' => [
                    'image',
                    [
                        'height' =>50,
                        'width' => 100
                    ]
                ],
                'value' => function($data){
                    return !empty($data->label_img)?Yii::$app->params['upload_url'].$data->label_img:'/themes/quirk/images/default/default.jpg';
                }
            ],
            'title',
            'summary',
            //'content:ntext',

            // 'cat_id',
            // 'user_id',
            // 'user_name',
            // 'top',
            'created_at:date',
            'updated_at:date',
            [
                'attribute' => 'is_valid',
                'label' => '发布状态',
                'value' => function($model) {
                    return $model->is_valid == 0 ? '未发布' : '发布';
                },
                'filter' => [
                    0 => '未发布',
                    1 => '发布'
                ]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
