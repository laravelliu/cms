<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2017/4/26
 * Time: 15:46
 */
namespace app\modules\admin\controllers;

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
    
    public function actionAddArticle()
    {
        if(Yii::$app->request->isPost){

        }
        return $this->render('add');
    }
}