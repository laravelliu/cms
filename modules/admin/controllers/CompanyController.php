<?php
namespace app\modules\admin\controllers;
use app\models\CompanyModel;
use Yii;
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/16
 * Time: 10:49
 */

class CompanyController extends BaseController
{
    /**
     * 公司信息列表
     * @author: liuFangShuo
     */
    public function actionList()
    {
        return $this->render('list');
    }

    /**
     * 添加公司信息
     * @author: liuFangShuo
     */
    public function actionAdd()
    {
        $model = new CompanyModel();

        if(Yii::$app->request->isPost){
            if($model->load(Yii::$app->request->post()) && $model->validate()){
                if($model->insertInfo()){

                } else {
                   $model->getErrors();
                }
            } else {
                $model->getErrors();
            }
        }

        $this->_data['model'] = $model;
        return $this->render('add',$this->_data);

    }
}