<?php

namespace backend\controllers;

class CatController extends CommonController
{
    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionShow()
    {
        return $this->render('show');
    }
}
