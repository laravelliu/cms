<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/26
 * Time: 15:46
 */
namespace app\modules\admin\controllers;

use app\models\CategoryAR;
use app\models\NewsAR;
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
           var_dump(Yii::$app->request->post());exit;
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
        $newsModel = new NewsAR();

        //获取分类
        $categoryModel =  new CategoryAR();
        $categoryList = $categoryModel->getAllCategoryList();
        $category = [];

        foreach ($categoryList as $k => $v){
            $category[$v->id] = $v->name;
        }

        $this->_data['categoryList'] = $category;
        $this->_data['sort'] = [ 0 => '顺序增加', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'];


        if (Yii::$app->request->isPost) {

            if ($newsModel->load($post = Yii::$app->request->post()) && $newsModel->validate()) {
                if($newsModel->save()){
                    return $this->redirect(['article/index']);
                }
            } else {
                $newsModel->getErrors();
            }
        }

        $this->_data['model'] = $newsModel;
        return $this->render('add',$this->_data);

    }
}