<?php

namespace app\modules\help\models;

use Yii;

class HelpInfo extends \yii\db\ActiveRecord
{

    public static function getDb()
    {
        return Yii::$app->get('help_db');
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'help_info';
    }

    public function rules()
    {
        return [
            [['classify','status','sort','platform'], 'safe'],
            // [['company'], 'required','message'=> '不能为空！'],
            //[['email'], 'email','message'=> '邮箱格式不正确！'],
            //[['email'], 'unique','message'=> '公司名已被占用！'],
        ];
    }
    public function getHelpContent(){
        return $this->hasMany(HelpContent::className(), ['cid' => 'id']);
    }

}
