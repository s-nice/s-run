<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $summary
 * @property string $content
 * @property string $img
 * @property integer $cat_id
 * @property integer $user_id
 * @property integer $top
 * @property integer $is_valid
 * @property integer $created_at
 * @property integer $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['cat_id', 'user_id', 'top', 'is_valid', 'created_at', 'updated_at'], 'integer'],
            [['title', 'summary', 'img',], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'summary' => '摘要',
            'content' => '内容',
            'img' => '标签图',
            'cat_id' => '分类',
            'user_id' => '用户ID',
            
            'top' => '置顶',
            'is_valid' => '是否有效',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
