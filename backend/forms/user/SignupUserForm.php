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
    public $passport;
    public $mobile_phone;
    public $address;
    public $birthday_date;
    public $udl_number;
    public $moodle_id;

    public function rules()
    {
        return [
            ['password', 'match', 'pattern' => '((?=.*\d)(?=.*[A-Z])(?=.*\W)(?=.*\*).{8,8})', 'message' => 'Пароль должен содержать минимум 1 букву и 1 цифру, заглавную букву, символ "*" и не менее 8 сиволов'],
            ['email', 'email'],
            ['moodle_id','integer'],
            [['birthday_date'], 'safe'],
            [['lastName', 'firstName', 'sirName', 'username',  'passport', 'email', 'mobile_phone', 'udl_number', 'address'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'moodle_id' => 'id пользователя в системе мудл',
            'moodle_exist' => 'Пользователь уже зарегистрирован в moodle',
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'sirName' => 'Отчество',
            'passport' => 'Номер паспорта',
            'email' => 'Email',
            'mobile_phone' => 'Мобильный телефон',
            'udl_number' => 'Номер удостоверения',
            'birthday_date' => 'Дата рождения',
            'address' => 'Адрес'
        ];
    }
}