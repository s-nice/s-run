<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plugin".
 *
 * @property integer $id
 * @property string $plugin_name
 * @property string $plugin_desc
 * @property string $demo_url
 * @property string $plugin_namespace
 * @property string $data
 * @property string $created_at
 * @property string $updated_at
 */
class Plugin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plugin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plugin_name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['plugin_name', 'plugin_namespace', 'plugin_desc', 'demo_url'], 'string', 'max' => 255],
            ['data','string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plugin_name' => '名称',
            'plugin_desc' => '描述',
            'demo_url' => '演示地址',
            'plugin_namespace' => '命名空间',
            'data' => '配置数据',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
