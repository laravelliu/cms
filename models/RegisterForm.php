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
            [['email','username'], 'checkUserExist']
        ];

        return $rule;

    }

    /**
     * 检查用户是否存在
     * @author: liuFangShuo
     */
    public function checkUserExist()
    {
        if (UserAR::findByEmail($this->email)) {
            $this->addError('email','此邮箱已注册');
            return false;
        }

        if (UserAR::findByUsername($this->username)) {
            $this->addError('username','此用户已存在');
            return false;
        }

        return true;
    }

    /**
     * 注册
     * @return bool
     * @author: liuFangShuo
     */
    public function register()
    {
        if ($this->validate()) {
            $model = new UserAR();
            $model->username = $this->username;
            $model->name = $this->name;
            $model->password = $model->getPassword($this->password);
            $model->email = $this->email;
            $model->role = ROLE_ADMIN;
            $model->login_times = 0;
            $model->photo = DEFAULT_PHOTO;

            if ($model->save()) {
                return true;
            } else {
                $this->addErrors($model->getErrors());
                return false;
            }
        } else {
            return false;
        }


    }

}