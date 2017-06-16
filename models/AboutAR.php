<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lfs_about".
 *
 * @property integer $id
 * @property string $address
 * @property string $localtion
 * @property string $description
 * @property string $name
 * @property string $qq
 * @property string $phone
 * @property string $email
 * @property string $city
 * @property integer $level
 * @property integer $is_deleted
 * @property integer $create_time
 * @property integer $update_time
 */
class AboutAR extends BaseAR
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'description','city'], 'required'],
            [['id', 'level', 'is_deleted'], 'integer'],
            [['description'], 'string'],
            [['address'], 'string', 'max' => 255],
            [['localtion'], 'string', 'max' => 64],
            [['name', 'qq', 'email'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'localtion' => 'Localtion',
            'description' => 'Description',
            'name' => 'Name',
            'qq' => 'Qq',
            'phone' => 'Phone',
            'email' => 'Email',
            'city' => 'City',
            'level' => 'Level',
            'is_deleted' => 'Is Deleted',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
