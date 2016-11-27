<?php

namespace common\models;

use Yii;
use yii\base\Model;

class TeacherContact extends Model
{
    public $name;
    public $email;
    public $level;
    public $site;
    public $age;
    public $comment;
    public $married; 
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'site'], 'required'],
            ['name', 'match', 'pattern' => '/^[a-z,A-Z]\w*$/i'],
            ['email', 'email'],
            ['level', 'level'],
            ['site', 'url', 'defaultScheme' => 'http'],
            ['age', 'default', 'value' => 25],
            ['age', 'integer', 'min' => 25],
            ['comment', 'string', 'max' => 200],
            ['married', 'boolean'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',          
        ];
    }

    public function level($attribute, $params)
    {
        if (!in_array($this->level, [1,2,3,4,5])) {
            $this->addError($attribute, 'Level must be betwen 1-5!');
        }
    }
   
}
