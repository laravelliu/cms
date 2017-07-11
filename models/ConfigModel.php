<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/25
 * Time: 19:26
 */
namespace  app\models;
use yii\base\Model;

class ConfigModel extends Model
{
    private $config = false;

    public $name;
    public $keywords;
    public $description;
    public $open;
    public $logo;
    public $email;
    public $footer;

    public function rules()
    {
        $rules = parent::rules(); // TODO: Change the autogenerated stub
        $rule = [
            ['logo', 'default','value'=>'asd'],
            [['name', 'keywords', 'description', 'open', 'logo', 'footer', 'email'], 'required'],
            [['name'], 'string', 'max' => 64,'message' => '名字太长'],
            [['keywords', 'description'], 'string', 'max' => 255, 'message' => '此选项最大长度256个字符'],
            [['logo', 'email'], 'string', 'max' => 128, 'message' => '此选项最大长度128个字符'],
            ['email', 'email', 'message'=> '请输入正确的邮箱']
        ];

        return array_merge($rules,$rule);
    }

    public function getConfig($where)
    {
        if(false === $this->config){
            $this->config = ConfigAR::findOne($where);
        }

        return $this->config;
    }

    /**
     * 保存配置
     * @author: liuFangShuo
     */
    public function saveConfig()
    {
        if(false === $this->config){
            $model = $this->getConfig(['id' => 1]);
        } else {
            $model = $this->config;
        }

        if(empty($model)){
            $model = new ConfigAR();
            $model->id = 1;
        }

        $model->load($this->attributes,'');
        return $model->save(false);
    }

    /**
     * 加载设置
     * @return bool
     * @author: liuFangShuo
     */
    public function selfLoad(){
        if(!empty($this->getConfig(['id' => 1]))){
            return $this->load($this->config->toArray(),'');
        }
    }
}