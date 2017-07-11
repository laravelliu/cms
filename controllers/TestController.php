<?php
namespace app\controllers;
use app\support\helpers\UnitHelper;
use yii\web\Controller;
use yii;
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/21
 * Time: 17:04
 */
class TestController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    /**
     * 但文件分片上传
     * 思路 如果是一个文件，直接将临时文件移动到存储目录，如果是分片文件，将分片文件放入一个文件夹下面当个数达到分的片数，直接合并文件到一起
     * @return bool
     * @author: liuFangShuo
     */
    public function actionFileupload()
    {
        if (Yii::$app->request->isPost) {
            $tempPath = Yii::$app->getBasePath().'/web/upload/test/temp';
            $savePath = Yii::$app->getBasePath().'/web/upload/test/'.date('Y-m-d');
            $post = Yii::$app->request->post();

            $file = $_FILES['file'];
            $fileExt = UnitHelper::getSuffix($post['name']);
            $chunks = isset($post['chunks']) ? $post['chunks'] : 1;
            $chunk = isset($post['chunk']) ? $post['chunk']+1 : 1;

            $fileStr = md5($post['name']);
            $fileName = $fileStr . $fileExt;
            $filePath = $savePath . '/' . $fileName;

            if (!is_dir($savePath)) {
                @mkdir($savePath,0777,true);
            }

            //没有分片,直接把文件放到save目录
            if ($chunks == 1) {



                move_uploaded_file($file['tmp_name'], $filePath);

            } else {
                $fileTempPath = $tempPath . '/' . $fileStr;

                $tempFileName = $fileTempPath . '/' . $fileStr.$chunk.$fileExt;

                if (!is_dir($fileTempPath)) {
                    @mkdir($fileTempPath,0777,true);
                }

                move_uploaded_file($file['tmp_name'], $tempFileName);

                //查看文件夹下面的文件数量
                $arr = scandir($fileTempPath);

                //如果临时文件夹文件数量到达了指定数量合并文件(这里比较坑)
                if (count($arr) == $chunks+2) {

                    $fp = fopen($filePath,'a');

                    for ($i=1; $i <= $chunks; $i++) {
                        $page = $fileTempPath.'/'.$fileStr.$i.$fileExt;
                        $ifile = fopen($page,'r');
                        $size = filesize($page);
                        fwrite($fp,fread($ifile,$size));
                        fclose($ifile);
                    }

                    fclose($fp);

                    //删除文件夹
                    $dh = opendir($fileTempPath);
                    while ($dirFile=readdir($dh)) {
                        if($dirFile != "." && $dirFile != "..") {
                            $fullPath = $fileTempPath . "/" . $dirFile;

                            if( !is_dir($fullPath)) {
                                unlink($fullPath);
                            }
                        }
                    }

                    closedir($dh);

                    //删除当前文件夹：
                    if(!rmdir($fileTempPath)) {
                        return false;
                    }
                }

            }
        }

    }
}