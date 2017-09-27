<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lfs_contact".
 *
 * @property integer $id
 * @property integer $name
 * @property string $email
 * @property string $content
 * @property string $phone
 * @property integer $type
 * @property integer $create_time
 * @property integer $update_time
 */
class ContactAR extends \app\models\BaseAR
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'content', 'type', 'name'], 'required', 'message'=>'请填写此信息'],
            [['type'], 'in', 'range' => array_keys(Yii::$app->params['contactType']), 'message' => '请选择运输方式'],
            [['email'], 'email', 'message' => '请填写正确的邮箱'],
            [['content'], 'string', 'min' => 3, 'tooShort' => '请输入最少3个字符'],
            [['phone'], 'match', 'pattern'=>'/^((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)$/', 'message'=>'请填写正确的手机号码'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'content' => 'Content',
            'phone' => 'Phone',
            'type' => 'Type',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
