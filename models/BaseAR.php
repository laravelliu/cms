<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/13
 * Time: 11:38
 */
namespace app\models;
use app\support\helpers\UnitHelper;

class BaseAR extends  \yii\db\ActiveRecord
{
    public function beforeSave($insert)
    {
        /**
         * 时间自动更新
         */
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                if(array_key_exists('create_time', $this->getAttributes())){
                    $this->create_time = time();
                }

                if(array_key_exists('update_time', $this->getAttributes())){
                    $this->update_time = time();
                }

                /**
                 * 如果是用户表
                 */
                if ($this->tableName() == 'lfs_user') {
                    $this->ip = UnitHelper::getUserIp();
                    $this->token = UnitHelper::uuid();
                }
            } else {
                if(array_key_exists('update_time', $this->getAttributes())){
                    $this->update_time = time();
                }
            }
            return true;
        } else {
            return false;
        }

    }
}