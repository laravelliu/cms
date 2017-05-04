<?php

namespace app\modules\admin\controllers;

/**
 * Default controller for the `admin` module
 */
use app\models\CategoryAR;
use app\models\ConfigAR;
use app\models\ConfigModel;
use Yii;

class CategoryController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAddCategory()
    {
        $model = new CategoryAR();

        $categoryListObj = $model->getCategoryList();
        $categoryList[0] = '无';

        if (!empty($categoryListObj)) {
            foreach ($categoryListObj as $k => $v){
                $categoryList[$v->id] = $v->name;
            }
        }

        //获取分类
        if (Yii::$app->request->isPost) {
            if ($model->load($post = Yii::$app->request->post()) && $model->validate()) {
                $model->save();
            }
            
            $model->getErrors();
        }

        if(empty($model->target) && 0 !== $model->target){
            $model->target = 0;
        }
        
        return $this->render('add',[
            'model' => $model,
            'categoryList' => $categoryList
        ]);
    }
    
}
