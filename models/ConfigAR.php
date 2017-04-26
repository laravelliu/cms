<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lfs_config".
 *
 * @property integer $id
 * @property string $name
 * @property string $keywords
 * @property string $description
 * @property integer $open
 * @property string $logo
 * @property string $email
 * @property string $footer
 */
class ConfigAR extends \app\models\BaseAR
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'keywords', 'description', 'open', 'logo', 'footer'], 'required'],
            [['id', 'open'], 'integer'],
            [['footer'], 'string'],
            [['name'], 'string', 'max' => 64],
            [['keywords', 'description'], 'string', 'max' => 255],
            [['logo', 'email'], 'string', 'max' => 128],
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
            'keywords' => 'Keywords',
            'description' => 'Description',
            'open' => 'Open',
            'logo' => 'Logo',
            'email' => 'Email',
            'footer' => 'Footer',
        ];
    }
}
