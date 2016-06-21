<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "cat".
 *
 * @property integer $id
 * @property string $name
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
            [['name','pid','created_uid','created_at'], 'required'],
            [['id','created_uid','created_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'pid' => '上级',
            'name' => '名称',
			'created_uid' => '创建者',
			'created_at' => '创建时间',
        ];
    }
    
    public static function enumItems()
    {       
        $dt = ['0' => '请选择'];
        $item = ArrayHelper::map(self::find()->all(), 'id', 'name');
        return ArrayHelper::merge($dt, $item);
    }
	
	public static function getList($pid=0)
    {
        $model = Cat::findAll(array('pid'=>$pid));
        return ArrayHelper::map($model, 'id', 'name');
    }
	
	public static function getName ( $id='')
	{
		$data=Cat::findOne($id);
		if($data){
			return $data['name'];
		}else{
			return '';
		}
	}
    
}
