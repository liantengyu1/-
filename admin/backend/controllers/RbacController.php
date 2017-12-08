<?php

namespace backend\controllers;

use yii;

use app\models\Role;

/**
 * 权限
 */
class RbacController extends CommonController
{
	/** 用户权限添加 */
    public function actionAdd()
    {

        return $this->render('add');
    }

    /** 用户权限展示操作 */
    public function actionList()
    {

        return $this->render('add');
    }

    /** 角色添加 */
    public function actionRole_add()
    {

    	$data = yii::$app->request->post();

    	if (empty($data)) {

        	//展示角色添加页面

        	return $this->render('role_add');

    	}else{

    		//处理添加

    		$role = new Role;

    		$role->role_name = $data['role_name'];

    		if($role->save()){
    			return $this->redirect(['rbac/role_list']);
    		}

    	}


    }

    /** 角色展示操作 */
    public function actionRole_list()
    {

    	$data['data'] = json_encode(Role::find()->asArray()->all());

        return $this->render('role_list',$data);
    }

    /** 权限添加 */
    public function actionRbac_add()
    {
        return $this->render('add');
    }

    /** 权限展示操作 */
    public function actionRbac_list()
    {

        return $this->render('add');
    }
}
