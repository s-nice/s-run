<?php
namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class DemoForm extends Model
{
    public $demo;
    
    public function attributeLabels()
    {
        return [
            'demo' => '属性',
        ];
    }
}