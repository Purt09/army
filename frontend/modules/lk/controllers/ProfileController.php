<?php


namespace frontend\modules\lk\controllers;


use common\repositories\NotFoundException;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use yii\web\Controller;
use Yii;

class ProfileController extends Controller
{
    public function actionView($id)
    {
        $user = $this->findModel($id);
        $roles = Yii::$app->authManager->getRolesByUser($user->id);
        if (!isset($roles))
            $roles = ['description' => 'Ролей пока нет'];
        return $this->render('view', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function actionSetting($id)
    {
        $user = $this->findModel($id);
        $staff = TblStaff::findOne($user->user_base_id);

        if ($staff->load(Yii::$app->request->post()) && $staff->validate()) {
            if ($staff->save())
                Yii::$app->session->setFlash('success', 'Настройки сохранены');

        }

        return $this->render('setting', [
            'model' => $staff
        ]);
    }

    private function findModel($id)
    {
        $user = User::findOne($id);
        if (!isset($user))
            throw new NotFoundException('Пользователь не найден');
        return $user;
    }
}