<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lfs_slider".
 *
 * @property integer $id
 * @property string $images_url
 * @property string $title
 * @property string $description
 * @property integer $is_deleted
 * @property integer $is_show
 * @property integer $is_button
 * @property string $button_url
 * @property integer $create_time
 * @property integer $update_time
 */
class SliderAR extends \app\models\BaseAR
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'images_url'], 'required'],
            [['id', 'is_deleted', 'is_show', 'is_button', 'create_time', 'update_time'], 'integer'],
            [['images_url', 'button_url'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 8],
            [['description'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images_url' => 'Images Url',
            'title' => 'Title',
            'description' => 'Description',
            'is_deleted' => 'Is Deleted',
            'is_show' => 'Is Show',
            'is_button' => 'Is Button',
            'button_url' => 'Button Url',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
