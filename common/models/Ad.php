<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad".
 *
 * @property string $id
 * @property integer $pid
 * @property string $name
 * @property string $title
 * @property string $img
 * @property string $link
 * @property string $orderid
 * @property integer $is_show
 * @property integer $created_uid
 * @property string $created_at
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'name', 'link', 'orderid', 'created_uid', 'created_at'], 'required'],
            [['pid', 'orderid', 'is_show', 'created_uid', 'created_at'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['title', 'img', 'link'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => '广告位',
            'name' => '名称',
            'title' => '标题',
            'img' => '图片',
            'link' => '链接',
            'orderid' => '排序',
            'is_show' => '是否显示',
            'created_uid' => '创建者',
            'created_at' => '创建时间',
        ];
    }
}
