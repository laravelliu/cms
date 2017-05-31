<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/13
 * Time: 10:08
 */
namespace app\support\helpers;
class UnitHelper 
{
    /**
     * 获取毫秒
     * @author: liuFangShuo
     */
    public static function getMillisecond()
    {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
    }

    /**
     * 获取用户IP
     * @author: liuFangShuo
     */
    public static function getUserIp()
    {
        if (isset ($_SERVER)) {
            if (isset ($_SERVER ["HTTP_X_FORWARDED_FOR"])) {
                $arr = explode(',', $_SERVER ['HTTP_X_FORWARDED_FOR']);
                foreach ($arr as $val) {
                    $val = trim($val);
                    if ($val != 'unknown') {
                        $ip = $val;
                        break;
                    }
                }
            } elseif (isset ($_SERVER ["HTTP_CLIENT_IP"])) {
                $ip = $_SERVER ["HTTP_CLIENT_IP"];
            } elseif (isset ($_SERVER ["REMOTE_ADDR"])) {
                $ip = $_SERVER ["REMOTE_ADDR"];
            } else {
                $ip = $_SERVER ["SSH_CLIENT"];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")) {
                $ip = getenv("HTTP_X_FORWARDED_FOR");
            } elseif (getenv("HTTP_CLIENT_IP")) {
                $ip = getenv("HTTP_CLIENT_IP");
            } else {
                $ip = getenv("REMOTE_ADDR");
            }
        }
        $realIp = explode(",", $ip);
        return $realIp[0];
    }

    /**
     * 模拟获取内容函数
     * @param <type> $url
     * @return <type>
     */
    static function vget($url)
    {
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
        //curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_HTTPGET, 1); // 发送一个常规的Post请求
        //curl_setopt($curl, CURLOPT_COOKIEFILE, $GLOBALS['cookie_file']); // 读取上面所储存的Cookie信息
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno' . curl_error($curl);
        }
        curl_close($curl); // 关闭CURL会话
        return $tmpInfo; // 返回数据
    }

    /**
     * 获取IP地址信息
     * @param string $ip
     * @return array|false
     */
    public static function getIpInfo($ip)
    {
        $url = "http://ip.taobao.com/service/getIpInfo.php?ip={$ip}";
        $ret = self::vget($url);
        $ret = json_decode($ret, true);
        if ($ret['code'] == 0) {
            return $ret['data'];
        }
        return false;
    }

    /**
     * 获取uuid
     * @param int $suffix_len
     * @return string
     * @author: liuFangShuo
     */
    public static function uuid($suffix_len = 2)
    {
        //! 计算种子数的开始时间
        static $being_timestamp = 1353427200; // 2011-11-21

        $time = explode(' ', microtime());
        $id = ($time[1] - $being_timestamp) . sprintf('%06u', substr($time[0], 2, 6));
        if ($suffix_len > 0)
        {
            $id .= substr(sprintf('%010u', mt_rand()), 0, $suffix_len);
        }
        return $id;
    }


    /**
     * 获取后缀
     * @author: liuFangShuo
     */
    public static function getSuffix($name = '')
    {
        if ( empty($name) ) {
            return '';
        }

        $tmparr = parse_url($name);
        $pic = $tmparr['path'];
        $suffix = strrchr($pic, '.');

        return strtolower($suffix);
    }
}