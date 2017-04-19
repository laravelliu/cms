<?php

namespace app\models;

use app\support\helpers\UnitHelper;
use Yii;

/**
 * This is the model class for table "lfs_user".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $photo
 * @property integer $role
 * @property integer $create_time
 * @property integer $update_time
 * @property string $ip
 * @property integer $login_times
 * @property string $email
 * @property string $phone
 * @property integer $status
 */
class UserAR extends BaseAR implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lfs_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'role', 'email'], 'required'],
            [['role', 'login_times', 'status'], 'integer'],
            [['username'], 'string', 'max' => 64],
            [['password', 'name'], 'string', 'max' => 32],
            [['photo', 'phone'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 16],
            [['email'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'photo' => 'Photo',
            'role' => 'Role',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'ip' => 'Ip',
            'login_times' => 'Login Times',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
        ];
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id, 'status' =>STATUS_TRUE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['token' => $token, 'status' => STATUS_TRUE]);

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username, 'status' => STATUS_TRUE]);
        
    }

    /**
     * 根据邮箱获取
     * @param $email
     * @return static
     * @author: liuFangShuo
     */
    public static function findByEmail($email)
    {
        return self::findOne(['email' => $email, 'status' => STATUS_TRUE]);

    }

    /**
     * 计算password算法
     * @param $password
     * @return string
     * @author: liuFangShuo
     */
    public function getPassword($password)
    {
        $salt = hash('sha256', md5($password));
        return  md5($password . $salt);
    }


    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return UnitHelper::uuid();
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $this->getPassword($password);
    }
}
