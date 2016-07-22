<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '账户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
	
<p>
	<?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
</p>
	
<?php Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'created_at:datetime',
			[
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? 'Inactive' : 'Active';
                },
                'filter' => [
                    0 => 'Inactive',
                    10 => 'Active'
                ]
            ],
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);Pjax::end(); ?>
</div>
