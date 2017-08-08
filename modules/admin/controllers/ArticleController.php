<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/26
 * Time: 15:46
 */
namespace app\modules\admin\controllers;

use app\models\CategoryAR;
use Yii;
class ArticleController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        if (Yii::$app->request->isAjax) {
            $data =[ 'data' =>[
                0=>['a','b','c','c','s']
            ]];

            return json_encode($data);
        }

        return false;
    }

    /**
     * 添加文章
     * @return string
     * @author: liuFangShuo
     */
    public function actionAddArticle()
    {
        if(Yii::$app->request->isGet){
            //获取分类
            $categoryModel =  new CategoryAR();
            $category = $categoryModel->getAllCategoryList();

            $this->_data['categoryList'] = $category;
            return $this->render('add',$this->_data);
        }
        

        if(Yii::$app->request->isPost){
            var_dump(Yii::$app->request->post());exit;
        }
    }
}