<?php

namespace backend\controllers;

use yii;

use backend\controllers\CommonController;

class IndexController extends CommonController
{

    public function actionIndex()
    {
    	var_dump( yii::$app->session['admin_id']);die;
    	// 阿萨斯阿斯敖德萨a
        return $this->render('index');
    }

}
