<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property string $id
 * @property string $name
 * @property string $img
 * @property string $link
 * @property integer $orderid
 * @property integer $is_show
 * @property integer $created_uid
 * @property string $created_at
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link', 'orderid', 'created_uid', 'created_at'], 'required'],
            [['orderid', 'is_show', 'created_uid', 'created_at'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['img', 'link'], 'string', 'max' => 120],
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
            'img' => '图片',
            'link' => '链接',
            'orderid' => '排序',
            'is_show' => '是否显示',
            'created_uid' => '创建者',
            'created_at' => '创建时间',
        ];
    }
}
