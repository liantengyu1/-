<?php

namespace backend\controllers;

class RbacController extends CommonController
{
    public function actionAdd()
    {
        return $this->render('add');
    }

}
