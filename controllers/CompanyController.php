<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 18:11
 */

namespace app\controllers;

use app\models\CategoryAR;
use app\models\CompanyModel;
use app\models\ContactAR;
use Yii;
use yii\web\Response;
use yii\widgets\ActiveForm;

class CompanyController extends BaseController
{
    /**
     * @return string
     * @author: liuFangShuo
     */
    public function actionContact()
    {
        $cateId = Yii::$app->request->get('cid',0);
        if($cateId === 0){
            return $this->goHome();
        }

        //获取此分类
        $model = new CategoryAR();
        $categoryInfo = $model->getCategoryById($cateId);
        
        if(empty($categoryInfo)){
            return $this->goHome();
        } else {
          $this->_data['cateInfo'] =  $categoryInfo;
        }

        //获取公司信息
        $model = new CompanyModel();
        $companyInfo = $model->getCompanyList(4);

        $this->_data['companyInfo'] = $companyInfo;
        return $this->render('contact', $this->_data);
    }


    /**
     * 保存表单
     * @author: liuFangShuo
     */
    public function actionSaveContact()
    {
        if(Yii::$app->request->isAjax){
            $model = new ContactAR();
            $model->load($post = Yii::$app->request->post());

            if(!empty(ActiveForm::validate($model))){
                return $this->ajaxReturn(ActiveForm::validate($model),200);
            }

            if ($model->validate()) {
                if($model->save()){
                    return $this->ajaxReturn([],0);
                }
            }
        }

        return false;

    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $cateId = Yii::$app->request->get('cid',0);
        if($cateId === 0){
            return $this->goHome();
        }

        $model = new CategoryAR();
        $categoryInfo = $model->getCategoryById($cateId);

        if(empty($categoryInfo)){
            return $this->goHome();
        } else {
            $this->_data['cateInfo'] =  $categoryInfo;
        }
        return $this->render('about', $this->_data);
    }
}