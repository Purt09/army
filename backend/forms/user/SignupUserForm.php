<?php


namespace backend\forms\user;


use yii\base\Model;

class SignupUserForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $firstName;
    public $lastName;
    public $sirName;
    public $moodle_id;

    public function rules()
    {
        return [
            ['password', 'match', 'pattern' => '((?=.*\d)(?=.*[A-Z])(?=.*\W)(?=.*\*).{8,8})', 'message' => 'Пароль должен содержать минимум 1 букву и 1 цифру, заглавную букву, символ "*" и не менее 8 сиволов'],
            ['email', 'email'],
            ['moodle_id','integer'],
            [['lastName', 'firstName', 'sirName', 'username'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'moodle_id' => 'id пользователя в системе мудл',
            'moodle_exist' => 'Пользователь уже зарегестрирован в moodle',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'sirName' => 'Отчество',
        ];
    }
}