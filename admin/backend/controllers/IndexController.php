<?php

namespace backend\controllers;

use yii;

use backend\controllers\CommonController;

class IndexController extends CommonController
{

    public function actionIndex()
    {
    	// 阿萨斯阿斯敖德萨
        return $this->render('index');
    }

}
