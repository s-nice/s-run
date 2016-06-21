<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $name
 * @property string $domain
 * @property integer $status
 * @property string $remark
 * @property string $title
 * @property string $keyword
 * @property string $des
 * @property string $email
 * @property string $version
 * @property string $code
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['remark', 'des', 'code'], 'string'],
            [['name'], 'string', 'max' => 30],
            [['domain', 'email'], 'string', 'max' => 120],
            [['title'], 'string', 'max' => 60],
            [['keyword', 'version'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '网站名称',
            'domain' => '网站域名',
            'status' => '网站状态',
            'remark' => '备注',
            'title' => 'SEO标题',
            'keyword' => 'SEO关键词',
            'des' => 'SEO描述',
            'email' => '管理员邮箱',
            'version' => '版权信息',
            'code' => '统计代码',
        ];
    }
}
