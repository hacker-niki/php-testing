<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['username', 'email',], 'required'],
            ['email', 'email'],
        ];
    }
}