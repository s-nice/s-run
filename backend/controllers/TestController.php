<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use mdm\admin\models\Menu;
use mdm\admin\components\MenuHelper;
use yii\base\Object;
use frontend\models\SignupForm;
class TestController extends Controller
{
    public function actions()
    {
        return [
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }
    
    public function actionIndex()
    {
        $data = MenuHelper::getAssignedMenu(1);
        print_r($data);exit;
    }
    
    public function actionTest()
    {
        $model = new SignupForm();
        return $this->render('index',['model'=>$model]);
    }
}