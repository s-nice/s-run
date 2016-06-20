<?php

use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <p>
        <?= Html::a(Yii::t('rbac-admin', 'Create User'), ['signup'], ['class' => 'btn btn-success']) ?>
    </p>
	<?php Pjax::begin(['formSelector' => 'form', 'enablePushState' => false]); ?> 
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
			//'id',
			[
				'attribute' => 'id',
				'headerOptions' => ['width' => '10%'],
			],
            'username',
            'email:email',
            'created_at:datetime',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? '未激活' : '激活';
                },
                'filter' => [
                    0 => '未激活',
                    10 => '激活'
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn(['view', 'activate', 'delete']),
				'header'=>'操作','headerOptions' => ['width' => '10%'],
                'buttons' => [
                    'activate' => function($url, $model) {
                        if ($model->status == 10) {
                            return '';
                        }
                        $options = [
                            'title' => Yii::t('rbac-admin', 'Activate'),
                            'aria-label' => Yii::t('rbac-admin', 'Activate'),
                            'data-confirm' => '您是否确认要激活该用户?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                    }
                    ]
                ],
            ],
        ]);
        Pjax::end();?>
</div>
