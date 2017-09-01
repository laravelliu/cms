<?php

namespace app\modules\help\controllers;

use Yii;
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use app\modules\help\models\HelpInfo;
use app\modules\help\models\HelpContent;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

/**
 * AppInfoController implements the CRUD actions for AppInfo model.
 */
class HelpinfoController extends BaseController
{
    public $enableCsrfValidation = false;
    
    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }

    /**
     * 添加修改分类
     * @return string
     * @throws \Exception
     */
    public function actionAddclassify()
    {
        $this->checklogin();

        $model = new HelpInfo();
        $hidden = Yii::$app->request->post('id', null);

        if (!empty($hidden)) {
            $model = $model->findOne(['id' => $hidden]);
            if($model->load(Yii::$app->request->post()) && $model->validate())
            {
                $model->create_time = time();
                if($model->update())
                {
                    $this->redirect(['helpinfo/list']);
                }
            }
        }  else {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->create_time = time();

                if ($model->insert()) {
                    $this->redirect(['helpinfo/addinfo']);
                }
            }
        }


        if(Yii::$app->request->get('id')) {
            $data = HelpInfo::findOne(['id' => Yii::$app->request->get('id')]);
            $model->id = $data->id;
            $model->classify = $data->classify;
            $model->status = $data->status;
            $model->sort = $data->sort;
            $model->platform = $data->platform;
            return $this->render('index',[
                'model' => $model,
                'hidden' => true
            ]);
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * 添加信息
     * @return string
     * @throws \Exception
     */
    public function actionAddinfo()
    {
        $this->checklogin();

        $data = HelpInfo::find()->orderBy('sort asc')->all();
        $data = ArrayHelper::map($data,'id','classify');
        $model = new HelpContent();

        if ( $model->load(Yii::$app->request->post()) ) {
            $post = Yii::$app->request->post();
            $model->cid = $post['HelpContent']['cid'][1];
            $model->title = $post['HelpContent']['title'];
            $model->status = $post['HelpContent']['status'];
            $model->sort = $post['HelpContent']['sort'];
            $model->content = $post['HelpContent']['content'];
            if ($model->validate()) {
                $model->create_time = time();
                if ($model->insert()) {
                    $this->redirect(['helpinfo/list']);
                }
            }
        } else {
            return $this->render('content', [
                'model' => $model,
                'data' => $data
            ]);
        }
    }

    /**
     * 修改文章内容
     * @return string
     * @throws \Exception
     */
    public function actionEdit()
    {
        $this->checklogin();

        $model = new HelpContent();
        $hidden = Yii::$app->request->post('id');

        if ($hidden) {
            $model = $model->findOne(['id' => $hidden]);

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $post = Yii::$app->request->post();
                $model->cid = $post['HelpContent']['cid'];
                $model->content = $post['HelpContent']['content'];
                $model->create_time = time();
                if ($model->update()) {
                    $this->redirect(['helpinfo/list']);
                }
            }
        } else {
            $data = HelpInfo::find()->orderBy('sort asc')->all();
            $data = ArrayHelper::map($data,'id','classify');
            $content = HelpContent::findOne(['id' => Yii::$app->request->get('id')]);
            $model->id = $content->id;
            $cid = $content->cid;
            
            $cate = HelpInfo::findOne(['id' => $cid]);
            $platform = HelpInfo::findAll(['platform' => $cate->platform]);
            $platformname = $cate->platform;
            $model->cid = $content->cid;
            $model->title = $content->title;
            $model->status = $content->status;
            $model->sort = $content->sort;
            $model->content = $content->content;
            return $this->render('edit',[
                'model' => $model,
                'platform' => $platform,
                'platformname' => $platformname,
                'hidden' => true,
                'data' => $data
            ]);
        }
    }

    /**
     * 帮助列表
     * @return string
     */
    public function actionList()
    {
        $this->checklogin();

        $model = new HelpInfo();
        $dataProvider = new ActiveDataProvider([
            'query' => HelpInfo::find(),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ],
        ]);

        return $this->render('list', [
            'model' => $model,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * 各业务线展示
     * @return string
     */
    public function actionShow()
    {
        $id = Yii::$app->request->get('id',null);
        $platform = Yii::$app->request->get('show', 'pre');

        if('crash' == $platform){
            $platform = 'apm';
        }
        $model = new HelpInfo();
        $data = $model->find()->where(['status' => 1, 'platform' => $platform])->orderBy(['sort'=>SORT_ASC])->all();


        return $this->render('show', [
            'model' => $model,
            'data' => $data,
            'id' => (empty($id) || is_array($id)) ? 0 : intval($id),
            'platform' => $platform,
        ]);
    }

    /**
     * 内容列表
     * @return string
     */
    public function actionShowcontent()
    {
        $this->checklogin();

        $id = Yii::$app->request->get('id');
        $model = new HelpContent();
        $dataProvider = new ActiveDataProvider([
            'query' => HelpContent::find()->where('cid='.$id),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ],
        ]);

        return $this->render('listcontent', [
            'model' => $model,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * 二级分类
     */
    public function actionSelplat()
    {
        $plat = Yii::$app->request->get('id');
        $data = HelpInfo::findAll(['platform' => $plat]);
        $html = '';

        foreach($data as $v)
        {
            $html .= '<option value="'.$v->id.'">'.$v->classify.'</option>';
        }
        print($html);
    }

    /**
     * 帮助中心首页
     * @return string
     */
    public function actionHelpall()
    {
        $contentModel = new HelpContent();
        $InfoModel = new HelpInfo();
        $keyword = Html::encode(trim(Yii::$app->request->post('keyword', null)));

        if (Yii::$app->request->post() && !empty($keyword)) {

            /*搜索*/
            $resultInfo = $contentModel::find()
                ->joinWith('helpInfo')
                ->where(['like', 'title', $keyword])
                ->limit(20)
                ->all();

            return $this->renderPartial('helpall', [
                'contentModel' => $contentModel,
                'resultInfo' => $resultInfo,
            ]);
        }

        //pre
        $pre = $contentModel->getInfoByPlatform('pre');
        if ( empty($pre) ) {
            $pre = '没有相关数据可以显示';
        }

        //apm
        $apm = $contentModel->getInfoByPlatform('apm');
        if ( empty($apm) ) {
            $apm = '没有相关数据可以显示';
        }

        //云测
        $cts = $contentModel->getInfoByPlatform('cts');
        if ( empty($cts) ) {
            $cts = '没有相关数据可以显示';
        }

        //itestin
        $itestin = $contentModel->getInfoByPlatform('itestin');
        if( empty($itestin) ){
            $itestin = '没有相关数据可以显示';
        }


        //众测
        $fn = $contentModel->getInfoByPlatform('fn');
        if ( empty($fn) ) {
            $fn = '没有相关数据可以显示';
        }


        //ab
        $ab = $contentModel->getInfoByPlatform('abtest');
        if (empty($ab)) {
            $ab = '没有相关数据可以显示';
        }

        return $this->render('helpall',[
                'contentModel'=>$contentModel,
                'infoModel' => $InfoModel,
                'pre' => $pre,
                'apm' => $apm,
                'cts' => $cts,
                'itestin' => $itestin,
                'fn' => $fn,
                'ab' => $ab,
            ]);
    }

    /**
     * 上传
     * @return string
     */
    public function actionUpload()
    {
        $this->checkLogin();

        $save_path = dirname(dirname(dirname(dirname(__FILE__)))) . '/web/simditor/attached/';
        //$save_url = dirname($_SERVER['PHP_SELF']).'Web/kindeditor/attached/';
        $save_url = SITE_CDN . '/simditor/attached/';
        //$save_path = realpath($save_path) . '/';

        //最大文件大小
        $max_size = 1000000;

        //定义允许上传的文件扩展名
        $ext_arr = array(
            'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
            'flash' => array('swf', 'flv'),
            'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
            'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
        );
        //PHP上传失败
        if (!empty($_FILES['fileData']['error'])) {
            switch($_FILES['fileData']['error']){
                case '1':
                    $error = '超过php.ini允许的大小。';
                    break;
                case '2':
                    $error = '超过表单允许的大小。';
                    break;
                case '3':
                    $error = '图片只有部分被上传。';
                    break;
                case '4':
                    $error = '请选择图片。';
                    break;
                case '6':
                    $error = '找不到临时目录。';
                    break;
                case '7':
                    $error = '写文件到硬盘出错。';
                    break;
                case '8':
                    $error = 'File upload stopped by extension。';
                    break;
                case '999':
                default:
                    $error = '未知错误。';
            }

            $msg = array('success' => false,'msg' => $error);
            return json_encode($msg);
        }

        //有上传文件时
        if (empty($_FILES) === false) {
            //原文件名
            $file_name = $_FILES['fileData']['name'];
            //服务器上临时文件名
            $tmp_name = $_FILES['fileData']['tmp_name'];
            //文件大小
            $file_size = $_FILES['fileData']['size'];
            //检查文件名
            if (!$file_name) {
                $msg = array('success' => false,'uploadError' => "请选择文件。");
                return json_encode($msg);
            }
            //检查目录
            if (@is_dir($save_path) === false) {
                $msg = array('success' => false,'uploadError' => "上传目录不存在。");
                return json_encode($msg);
            }
            //检查目录写权限
            if (@is_writable($save_path) === false) {
                $msg = array('success' => false,'msg' => "上传目录没有写权限。");
                return json_encode($msg);
            }
            //检查是否已上传
            if (@is_uploaded_file($tmp_name) === false) {
                $msg = array('success' => false,'msg' => "上传失败。");
                return json_encode($msg);
            }
            //检查文件大小
            if ($file_size > $max_size) {
                $msg = array('success' => false,'msg' => "上传文件大小超过限制。");
                return json_encode($msg);
            }
            //检查目录名
            $dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
            if (empty($ext_arr[$dir_name])) {
                $msg = array('success' => false,'msg' => "目录名不正确。");
                return json_encode($msg);
            }
            //获得文件扩展名
            $temp_arr = explode(".", $file_name);
            $file_ext = array_pop($temp_arr);
            $file_ext = trim($file_ext);
            $file_ext = strtolower($file_ext);
            //检查扩展名
            if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
                echo "上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。";
            }
            //创建文件夹
            if ($dir_name !== '') {
                $save_path .= $dir_name . "/";
                $save_url .= $dir_name . "/";
                if (!file_exists($save_path)) {
                    mkdir($save_path);
                }
            }
            $ymd = date("Ymd");
            $save_path .= $ymd . "/";
            $save_url .= $ymd . "/";
            if (!file_exists($save_path)) {
                mkdir($save_path);
            }
            //新文件名
            $new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
            //移动文件
            $file_path = $save_path . $new_file_name;
            if (move_uploaded_file($tmp_name, $file_path) === false) {
                echo "上传文件失败。";
            }
            @chmod($file_path, 0644);
            $file_url = $save_url . $new_file_name;
            //var_dump($_SERVER['SERVER_NAME']);
            header('Content-type: text/html; charset=UTF-8');
            //return $file_url;
            return json_encode(array('success' => true,'file_path' => $file_url));
            exit;
        }

    }

    /**
     * 登录
     * @return bool
     * @throws NotFoundHttpException
     */
    private function checklogin()
    {
        parent::_checkLogin();

        if (!in_array(Yii::$app->user->identity->user['email'], Yii::$app->params['helpinfoEmails'])) {
            throw new NotFoundHttpException('无访问权限');
        }
    	return true;
    }

}