<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/25
 * Time: 14:06
 */
namespace app\support\helpers;
use Yii;

class RedisKeyHelper {
    /**
     * 获取key
     * @param $key
     * @param array $value
     * @param bool $flag    是否加密
     * @return null|string
     */
    public static function getKey($key, $value = array(), $flag = false)
    {
        if ( empty($value) || !is_array($value) ) {
            return null;
        }

        $key = vsprintf($key, $value);

        if (true === $flag) {
            $key = md5($key);
        }

        return $key;
    }

    /**
     * 获取缓存
     * @param string $key
     * @return string|array
     */
    public static function get($key)
    {
        $ret = Yii::$app->redis->get($key);
        return $ret;
    }

    /**
     * 设置缓存
     * @param $key
     * @param $val
     * @param int $duration
     * @return mixed
     */
    public static function set($key, $val, $duration=60)
    {
        $ret = Yii::$app->redis->set($key, $val, $duration);
        return $ret;
    }

    /**
     * 删除缓存
     * @param type $key
     * @return type
     */
    public static function del($key)
    {
        $ret = Yii::$app->redis->delete($key);
        return $ret;
    }

    /**
     * 先进先出队列
     * @param $key
     * @param $value
     */
    public function pushQueue($key, $value)
    {
        $ret = Yii::$app->redis->LPUSH($key, $value);
        return $ret;
    }

    /**
     * 先进先出队列
     * @param $key
     */
    public function popQueue($key)
    {
        $ret = Yii::$app->redis->RPOP($key);
        return $ret;
    }
}
