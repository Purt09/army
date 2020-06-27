<?php

namespace core\helpers\user;

use core\entities\User\User;
use phpDocumentor\Reflection\Types\Self_;
use yii\helpers\ArrayHelper;

class RbacHelpers
{
    static public $ADMIN = 'admin';
    static public $CADET = 'cadet';
    static public $OFFICER = 'officer';
    static public $TEACHER = 'teacher';
    static public $MANAGER = 'manager';
    static public $COURSE_MAIN = 'course_main';
    static public $COURSE51 = 'course51';
    static public $COURSE52 = 'course52';
    static public $COURSE53 = 'course53';
    static public $COURSE54 = 'course54';
    static public $COURSE55 = 'course55';
    static public $CAFEDRA51 = 'cafedra51';
    static public $CAFEDRA52 = 'cafedra52';
    static public $CAFEDRA53 = 'cafedra53';
    static public $CAFEDRA55 = 'cafedra55';

    /** Прописывать настройки первоначальные для ролей
     *  т.е. их создание и базовое присвоение кому-нибудь
     * @throws \Exception
     */
    public static function init()
    {
        $admin = \Yii::$app->authManager->createRole(self::$ADMIN);
        $admin->description = 'Администратор';
        \Yii::$app->authManager->add($admin);

        $cadet = \Yii::$app->authManager->createRole(self::$CADET);
        $cadet->description = 'Курсант';
        \Yii::$app->authManager->add($cadet);

        $officer = \Yii::$app->authManager->createRole(self::$OFFICER);
        $officer->description = 'Офицер';
        \Yii::$app->authManager->add($officer);

        $teacher = \Yii::$app->authManager->createRole(self::$TEACHER);
        $teacher->description = 'Преаодаватель';
        \Yii::$app->authManager->add($teacher);

        $manager = \Yii::$app->authManager->createRole(self::$MANAGER);
        $manager->description = 'Управление факультетом';
        \Yii::$app->authManager->add($manager);

        $course_main = \Yii::$app->authManager->createRole(self::$COURSE_MAIN);
        $course_main->description = 'Курсовое звено';
        \Yii::$app->authManager->add($course_main);

        $course51 = \Yii::$app->authManager->createRole(self::$COURSE51);
        $course51->description = '51 курс';
        \Yii::$app->authManager->add($course51);

        $course52 = \Yii::$app->authManager->createRole(self::$COURSE52);
        $course52->description = '52 курс';
        \Yii::$app->authManager->add($course52);

        $course53 = \Yii::$app->authManager->createRole(self::$COURSE53);
        $course53->description = '53 курс';
        \Yii::$app->authManager->add($course53);

        $course54 = \Yii::$app->authManager->createRole(self::$COURSE54);
        $course54->description = '54 курс';
        \Yii::$app->authManager->add($course54);

        $course55 = \Yii::$app->authManager->createRole(self::$COURSE55);
        $course55->description = '55 курс';
        \Yii::$app->authManager->add($course55);

        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA51);
        $role->description = '51 кафедра';
        \Yii::$app->authManager->add($role);

        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA52);
        $role->description = '52 кафедра';
        \Yii::$app->authManager->add($role);

        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA53);
        $role->description = '53 кафедра';
        \Yii::$app->authManager->add($role);

        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA55);
        $role->description = '55 кафедра';
        \Yii::$app->authManager->add($role);


        \Yii::$app->authManager->addChild($admin, $cadet);
        \Yii::$app->authManager->addChild($admin, $officer);
        \Yii::$app->authManager->addChild($manager, $officer);
        \Yii::$app->authManager->addChild($teacher, $officer);
        \Yii::$app->authManager->addChild($course_main, $officer);
        \Yii::$app->authManager->addChild($course51, $cadet);
        \Yii::$app->authManager->addChild($course52, $cadet);
        \Yii::$app->authManager->addChild($course53, $cadet);
        \Yii::$app->authManager->addChild($course54, $cadet);
        \Yii::$app->authManager->addChild($course55, $cadet);

        // Привязываем пользователей
        $user = User::findOne(1);
        self::setRoleUser(self::$CADET, $user);
        $user = User::findOne(2);
        self::setRoleUser(self::$ADMIN, $user);
    }

    /**
     * @param string $role_name
     * @param User $user
     * @throws \Exception
     */
    public static function setRoleUser(string $role_name, User $user)
    {
        $userRole = \Yii::$app->authManager->getRole($role_name);
        \Yii::$app->authManager->assign($userRole, $user->id);
    }


    public static function getRoleUser(User $user, string $attribute = 'name'){
        return current(ArrayHelper::getColumn(\Yii::$app->authManager->getRolesByUser($user->id), $attribute));
    }

    public static function getRolesString(User $user): string
    {
        $result = '';
        $roles = \Yii::$app->authManager->getRolesByUser($user->id);
        foreach ($roles as $role){
            if(empty($result))
                $result .= $role->description;
            else
                $result .= ' | ' . $role->description;

        }
        return  $result;
    }

    public static function getRoles():array {
        $roles = \Yii::$app->getAuthManager()->getRoles();
        $i = 0;
        $result = [];
        foreach ($roles as $key => $role){
            $i++;
            $result += [$key => $role->description];
        }
        return $result;
    }
}