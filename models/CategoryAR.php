<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lfs_category".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $desc
 * @property string $logo
 * @property integer $sort
 * @property integer $target
 * @property string $name
 * @property integer $is_deleted
 * @property integer $create_time
 * @property integer $update_time
 */
class CategoryAR extends \app\models\BaseAR
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'required'],
            ['name', 'required', 'message'=>'名称不能为空'],
            ['name', 'validateName'],
            ['sort', 'required', 'message'=>'排序不能为空'],
            ['sort', 'number', 'message' => '不能为非数字'],
            [['pid', 'sort', 'target', 'is_deleted'], 'integer'],
            [['desc'], 'string', 'max' => 64],
            [['logo'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'desc' => 'Desc',
            'logo' => 'Logo',
            'sort' => 'Sort',
            'target' => 'Target',
            'name' => 'Name',
            'is_deleted' => 'Is Deleted',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    /**
     * 根据名称获取分类
     * @return static
     * @author: liuFangShuo
     */
    public function getCategoryByName($name)
    {
       return $this->findOne(['name' => $name, 'is_deleted' => STATUS_FALSE]);
    }


    /**
     * 检查名称是否重复
     * @param $name
     * @return bool
     * @author: liuFangShuo
     */
    public function validateName($name)
    {
        if($this->getCategoryByName($name)){
            $this->addError('name', '分类已经存在');
            return false;
        }
        
        return true;
    }

    /**
     * 获取分类列表
     * @param bool $level
     * @return array|\yii\db\ActiveRecord[]
     * @author: liuFangShuo
     */
    public function getCategoryList($level = false)
    {
        $sql = $this->find()->where(['is_deleted' => STATUS_FALSE]);

        if (false !==$level) {
            $sql->andWhere(['pid' => $level]);
        }

        return $sql->orderBy(['update_time' => SORT_DESC])->all();

    }
}
