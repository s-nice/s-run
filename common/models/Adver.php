<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adver".
 *
 * @property string $id
 * @property string $name
 * @property string $remark
 * @property integer $created_uid
 * @property string $created_at
 */
class Adver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_uid', 'created_at'], 'required'],
            [['created_uid', 'created_at'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['remark'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'remark' => '备注',
            'created_uid' => '创建者',
            'created_at' => '创建时间',
        ];
    }
}
