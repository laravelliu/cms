<?php

namespace app\modules\help\models;

use Yii;

class HelpContent extends \yii\db\ActiveRecord
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
        return 'help_info_content';
    }

    public function rules()
    {
        return [
            [['cid', 'content','sort','status'], 'required','message'=> '不能为空！'],
            [['title'], 'safe'],
            //[['email'], 'unique','message'=> '公司名已被占用！'],
        ];
    }

    public function getHelpInfo(){
        return $this->hasOne(HelpInfo::className(), ['id' => 'cid']);
    }

    /**
     * 查询每个平台上的信息
     * @param $platform
     * @param int $limit
     * @return array|bool|\yii\db\ActiveRecord[]
     */
    public function getInfoByPlatform($platform, $limit = 5){

        $Info = HelpContent::find()->joinWith('helpInfo')->where(['platform'=>$platform, 'help_info_content.status'=>1, 'help_info.status'=>1])->limit($limit)->orderBy(['help_info_content.sort'=>SORT_ASC, 'help_info_content.create_time'=>SORT_DESC])->all();

        return $Info;
    }

}
