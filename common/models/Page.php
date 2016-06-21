<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property string $id
 * @property string $name
 * @property integer $pid
 * @property integer $type
 * @property string $tem
 * @property string $content
 * @property integer $orderid
 * @property integer $is_show
 * @property integer $created_uid
 * @property string $created_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_uid', 'created_at'], 'required'],
            [['pid', 'type', 'orderid', 'is_show', 'created_uid', 'created_at'], 'integer'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 30],
            [['tem'], 'string', 'max' => 10],
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
            'pid' => '上级',
            'type' => '类型',
            'tem' => '模板',
            'content' => '内容',
            'orderid' => '排序',
            'is_show' => '是否显示',
            'created_uid' => '创建者',
            'created_at' => '创建时间',
        ];
    }
}
