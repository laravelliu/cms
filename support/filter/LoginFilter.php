<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/13
 * Time: 09:50
 */
namespace  app\support\filter;

class LoginFilter extends BaseFilter
{

    /**
     * 操作之前
     * @param \yii\base\Action $action
     * @return bool
     * @author: liuFangShuo
     */
    public function beforeAction($action)
    {
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * 操作之后
     * @param \yii\base\Action $action
     * @param mixed $result
     * @return mixed
     * @author: liuFangShuo
     */
    public function afterAction($action, $result)
    {
        return parent::afterAction($action, $result); // TODO: Change the autogenerated stub
    }
}