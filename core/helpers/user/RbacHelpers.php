<?php

namespace core\helpers\user;

use core\entities\User\TblStaff;
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
    static public $FAKULTET = 'fakultet';

    /** Прописывать настройки первоначальные для ролей
     *  т.е. их создание и базовое присвоение кому-нибудь
     * @throws \Exception
     */
    public static function init()
    {
//        $admin = \Yii::$app->authManager->createRole(self::$ADMIN);
//        $admin->description = 'Администратор';
//        \Yii::$app->authManager->add($admin);
//
//        $cadet = \Yii::$app->authManager->createRole(self::$CADET);
//        $cadet->description = 'Курсант';
//        \Yii::$app->authManager->add($cadet);
//
//        $officer = \Yii::$app->authManager->createRole(self::$OFFICER);
//        $officer->description = 'Офицер';
//        \Yii::$app->authManager->add($officer);
//
//        $teacher = \Yii::$app->authManager->createRole(self::$TEACHER);
//        $teacher->description = 'Преаодаватель';
//        \Yii::$app->authManager->add($teacher);
//
//        $manager = \Yii::$app->authManager->createRole(self::$MANAGER);
//        $manager->description = 'Управление факультетом';
//        \Yii::$app->authManager->add($manager);
//
//        $course_main = \Yii::$app->authManager->createRole(self::$COURSE_MAIN);
//        $course_main->description = 'Курсовое звено';
//        \Yii::$app->authManager->add($course_main);
//
//        $course51 = \Yii::$app->authManager->createRole(self::$COURSE51);
//        $course51->description = '51 курс';
//        \Yii::$app->authManager->add($course51);
//
//        $course52 = \Yii::$app->authManager->createRole(self::$COURSE52);
//        $course52->description = '52 курс';
//        \Yii::$app->authManager->add($course52);
//
//        $course53 = \Yii::$app->authManager->createRole(self::$COURSE53);
//        $course53->description = '53 курс';
//        \Yii::$app->authManager->add($course53);
//
//        $course54 = \Yii::$app->authManager->createRole(self::$COURSE54);
//        $course54->description = '54 курс';
//        \Yii::$app->authManager->add($course54);
//
//        $course55 = \Yii::$app->authManager->createRole(self::$COURSE55);
//        $course55->description = '55 курс';
//        \Yii::$app->authManager->add($course55);
//
//        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA51);
//        $role->description = '51 кафедра';
//        \Yii::$app->authManager->add($role);
//
//        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA52);
//        $role->description = '52 кафедра';
//        \Yii::$app->authManager->add($role);
//
//        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA53);
//        $role->description = '53 кафедра';
//        \Yii::$app->authManager->add($role);
//
//        $role = \Yii::$app->authManager->createRole(self::$CAFEDRA55);
//        $role->description = '55 кафедра';
//        \Yii::$app->authManager->add($role);
//
//
//
//        \Yii::$app->authManager->addChild($admin, $cadet);
//        \Yii::$app->authManager->addChild($admin, $officer);
//        \Yii::$app->authManager->addChild($manager, $officer);
//        \Yii::$app->authManager->addChild($teacher, $officer);
//        \Yii::$app->authManager->addChild($course_main, $officer);
//        \Yii::$app->authManager->addChild($course51, $cadet);
//        \Yii::$app->authManager->addChild($course52, $cadet);
//        \Yii::$app->authManager->addChild($course53, $cadet);
//        \Yii::$app->authManager->addChild($course54, $cadet);
//        \Yii::$app->authManager->addChild($course55, $cadet);
//
//        // Привязываем пользователей
//        $user = User::findOne(1);
//        self::setRoleUser(self::$CADET, $user);
//        $user = User::findOne(2);
//        self::setRoleUser(self::$ADMIN, $user);

        $role = \Yii::$app->authManager->createRole(self::$FAKULTET);
        $role->description = 'ФаАкультет';
        \Yii::$app->authManager->add($role);
    }

    /**
     * @param string $role
     * @param string $role2
     * @return TblStaff[]
     */
    public static function getByTwoRole(string $role, string $role2)
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole($role);
        $users2 = \Yii::$app->authManager->getUserIdsByRole($role2);
        $users = array_intersect($users1, $users2);
        $users = User::find()->where(['id' => $users])->select('user_base_id')->asArray()->all();
        $result = [];
        foreach ($users as $user)
            array_push($result, $user['user_base_id']);
        $users = TblStaff::find()->where(['id' => $result])->with('currentMilPosition.milPosition')->all();
        ArrayHelper::multisort($users, 'currentMilPosition.milPosition.id', SORT_DESC);
        return $users;
    }

    /**
     * @param string $role_name
     * @param User $user
     * @throws \Exception
     */
    public static function setRoleUser($role_name, $user)
    {
        $userRole = \Yii::$app->authManager->getRole($role_name);
        \Yii::$app->authManager->assign($userRole, $user->id);
    }


    /**
     * @param User $user
     * @param string $attribute
     * @return mixed
     */
    public static function getRoleUser($user, $attribute = 'name')
    {
        return current(ArrayHelper::getColumn(\Yii::$app->authManager->getRolesByUser($user->id), $attribute));
    }

    /**
     * Просто перечисляет роли с разделеителем
     * @param User $user
     * @param string $separator
     * @return string
     */
    public static function getRolesString($user, $separator = ' | ')
    {
        $result = '';
        $roles = \Yii::$app->authManager->getRolesByUser($user->id);
        foreach ($roles as $role) {
            if (empty($result))
                $result .= $role->description;
            else
                $result .= $separator . $role->description;

        }
        return $result;
    }

    /**
     * @return array
     */
    public static function getRoles()
    {
        $roles = \Yii::$app->getAuthManager()->getRoles();
        $i = 0;
        $result = [];
        foreach ($roles as $key => $role) {
            $i++;
            $result += [$key => $role->description];
        }
        return $result;
    }

    /**
     * @param string $role
     * @return bool
     */
    public static function checkRole(string $role)
    {
        $user = User::findOne(\Yii::$app->user->id);
        if ($user == null)
            return false;

        $roles = ArrayHelper::getColumn(\Yii::$app->authManager->getRolesByUser($user->id), 'name');
        return array_key_exists($role, $roles);
    }

    /**
     * Врменное разграничение доступа, конечно, надо учитывать все, а не просто роль менеджера или нач курса
     * @param TblStaff $staff
     * @return bool
     */
    public static function checkAccessManageUser(TblStaff $staff)
    {
        $manager = User::findOne(\Yii::$app->user->id);

        $roles = ArrayHelper::getColumn(\Yii::$app->authManager->getRolesByUser($manager->id), 'name');
        foreach ($roles as $role){
            if(RbacHelpers::$ADMIN == $role)
                return true;
            if(RbacHelpers::$COURSE_MAIN == $role)
                return true;
            if(RbacHelpers::$MANAGER == $role)
                return true;
        }
        return  false;
    }
}