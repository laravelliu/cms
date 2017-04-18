<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/18
 * Time: 17:38
 */
namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $name;
    
    public function rules()
    {
        $rule =  [
            // username and password are both required
            [['username', 'password', 'name', 'email'], 'required', 'message' => '该选项不能为空'],
            // password is validated by validatePassword()
            ['email', 'email', 'message' => '请输出正确的邮箱'],
            //用户存在
            ['username', 'checkUserExist', 'message' => '此邮箱已注册'],
        ];

        return $rule;

    }

    /**
     * 检查用户是否存在
     * @author: liuFangShuo
     */
    public function checkUserExist()
    {
        if(UserAR::findByUsername($this->username)){
            return true;
        } else {
            return false;
        }
    }
    
    
    public function register()
    {
        $model = new UserAR();
        $model->username = $this->username;
        $model->password = $model->getPassword($this->password);
        $model->email = $this->email;
        $model->save(false);
    }

}