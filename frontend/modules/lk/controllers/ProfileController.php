<?php


namespace frontend\modules\lk\controllers;


use common\repositories\NotFoundException;
use core\entities\User\MdlUser;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;

class ProfileController extends MainController
{
    public function actionView($id)
    {
        if (isset($this->staff->user->id))
            $roles = Yii::$app->authManager->getRolesByUser($this->staff->user->id);
        if (!isset($roles))
            $roles = ['description' => 'Ролей пока нет'];
        return $this->render('view', [
            'user' => $this->staff,
            'roles' => $roles
        ]);
    }

    public function actionSettingPhoto($id)
    {
        if ($this->staff->load(Yii::$app->request->post()) && $this->staff->validate()){
                $file = file_get_contents($_FILES['TblStaff']['tmp_name']['foto']);
                $type = $_FILES['TblStaff']['type']['foto'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $this->staff->foto = $src;

            if ($this->staff->save())
                Yii::$app->session->setFlash('success', 'Настройки сохранены');
        }


        return $this->render('setting-photo', [
            'model' => $this->staff
        ]);
    }

    public function actionSettingPassword($id)
    {
        if ($this->staff->user->load(Yii::$app->request->post()) && $this->staff->user->validate()){
            $this->staff->user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->staff->user->password);
            $moodle = MdlUser::findOne($this->staff->user->user_moodle_id);
            $moodle->password = Yii::$app->getSecurity()->generatePasswordHash($this->staff->user->password);
            if ($this->staff->user->save() && $moodle->save()){
                Yii::$app->session->setFlash('success', 'Пароль сброшен');
            }
        }


        return $this->render('setting-password', [
            'model' => $this->staff->user
        ]);
    }

    public function actionSetting($id)
    {
        if ($this->staff->load(Yii::$app->request->post()) && $this->staff->validate()){
            if ($this->staff->save())
                Yii::$app->session->setFlash('success', 'Настройки сохранены');
        }


        return $this->render('setting', [
            'model' => $this->staff
        ]);
    }
}
