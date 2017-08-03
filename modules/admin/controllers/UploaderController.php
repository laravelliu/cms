<?php

namespace app\modules\admin\controllers;

use app\models\ConfigAR;
use Yii;
use yii\web\UploadedFile;

class UploaderController extends BaseController
{
    /**
     * @return boolean
     */

    public function actionWebLogo()
    {
        if (Yii::$app->request->isPost) {

            $res = $this->saveFile('logo');

            if (!empty($res)) {
                $configModel = ConfigAR::findOne(['id' => 1]);
                $configModel->logo = $res[0]['address'];
                $configModel->save(false);
                
                return $this->ajaxReturn([],0,'设置成功');
            } else {
                return $this->ajaxReturn([],1,'文件保存失败，稍后重试');
            }
            
        }

        return false;
    }

    /**
     * 上传
     * @return bool|object
     * @author: liuFangShuo
     */
    public function actionUpload()
    {
        if (Yii::$app->request->isPost) {
            $count = Yii::$app->request->post('count',1);
            $type = Yii::$app->request->post('type',null);
            
            if (empty($type)) {
                return $this->ajaxReturn([],1,'请指定类别');
            }
            
            $res = $this->saveFile($type,$count);

            if (!empty($res)) {
                $data = $res;
                return $this->ajaxReturn($data,0,'上传成功');
            } else {
                return $this->ajaxReturn([],1,'文件保存失败，稍后重试');
            }

        }

        return false;
    }

    /**
     * 保存
     * @param $type
     * @param int $count
     * @return bool|object
     * @author: liuFangShuo
     */
    protected function saveFile($type, $count = 1)
    {
        $fileAdd = [];
        
        if ($count > 1) {
            for ($i=0; $i<$count; $i++) {
                $fileInfo = UploadedFile::getInstanceByName('file['.$i.']');

                if(empty($fileInfo)){
                    return $fileAdd;
                }

                $suffix = $fileInfo->extension;
                $fileName = md5(time().$fileInfo->name).'.'.$suffix;
                $picPath = '/upload/' . $type . '/'.date('Ymd',time());
                $realPath = Yii::$app->getBasePath().'/web'.$picPath;

                if (!is_dir($realPath)) {
                    @mkdir($realPath, 0777, true);
                }

                $realName = $realPath.'/'.$fileName;

                if($fileInfo->saveAs($realName)){
                    $fileAdd[$i]['address'] = $picPath.'/'.$fileName;
                } else {
                    $fileAdd[$i]['address'] = '';
                }
            }

        } else {
            $fileInfo = UploadedFile::getInstanceByName('file');

            if(empty($fileInfo)){
                return $fileAdd;
            }

            $suffix = $fileInfo->extension;
            $fileName = md5(time().$fileInfo->name).'.'.$suffix;
            $picPath = '/upload/' . $type . '/'.date('Ymd',time());
            $realPath = Yii::$app->getBasePath().'/web'.$picPath;

            if (!is_dir($realPath)) {
                @mkdir($realPath, 0777, true);
            }

            $realName = $realPath.'/'.$fileName;

            if($fileInfo->saveAs($realName)){
                $fileAdd[]['address'] = $picPath.'/'.$fileName;
            } else {
                return null;
            }
        }

        return $fileAdd;
    }

}
