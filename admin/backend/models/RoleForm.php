<?php

namespace backend\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $role_name;


    public function rules()
    {
        return [
            ['role_name', 'required'],
        ];
    }
}
