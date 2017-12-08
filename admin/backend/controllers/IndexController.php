<?php

namespace backend\controllers;

use yii;

use backend\controllers\CommonController;

class IndexController extends CommonController
{

    public function actionIndex()
    {
    	// 阿萨斯
        return $this->render('index');
    }

}
