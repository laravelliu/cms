<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/6/15
 * Time: 18:11
 */

namespace app\controllers;

use app\models\CategoryAR;
use Yii;

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
        
        $model = new CategoryAR();
        $categoryInfo = $model->getCategoryById($cateId);
        
        if(empty($categoryInfo)){
            return $this->goHome();
        } else {
          $this->_data['cateInfo'] =  $categoryInfo;
        }
        
        return $this->render('contact', $this->_data);
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