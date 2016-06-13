<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "cat".
 *
 * @property integer $id
 * @property string $cat_name
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['id'], 'integer'],
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => '分类名称',
        ];
    }
    
    public static function enumItems()
    {       
        $dt = ['0' => '请选择'];
        $item = ArrayHelper::map(self::find()->all(), 'id', 'cat_name');
        return ArrayHelper::merge($dt, $item);
    }
    
}
