<?php


namespace frontend\modules\lk\controllers;


use common\repositories\NotFoundException;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;

class ProfileController extends Controller
{

    public function actionView($id)
    {
        $staff = $this->findModel($id);
        $user = User::find()->where(['user_base_id' => $staff->id])->one();
        $roles = Yii::$app->authManager->getRolesByUser($user->id);
        if (!isset($roles))
            $roles = ['description' => 'Ролей пока нет'];
        return $this->render('view', [
            'user' => $staff,
            'roles' => $roles
        ]);
    }

    public function actionSettingPhoto($id)
    {
        $staff = $this->findModel($id);

        if ($staff->load(Yii::$app->request->post()) && $staff->validate()){
                $file = file_get_contents($_FILES['TblStaff']['tmp_name']['foto']);
                $type = $_FILES['TblStaff']['type']['foto'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $staff->foto = $src;

            if ($staff->save())
                Yii::$app->session->setFlash('success', 'Настройки сохранены');
        }


        return $this->render('setting-photo', [
            'model' => $staff
        ]);
    }

    public function actionSetting($id)
    {
        $staff = $this->findModel($id);

        if ($staff->load(Yii::$app->request->post()) && $staff->validate()){
            if ($staff->save())
                Yii::$app->session->setFlash('success', 'Настройки сохранены');
        }


        return $this->render('setting', [
            'model' => $staff
        ]);
    }

    private function findModel($id)
    {
        $user = TblStaff::find()->with('user')->where(['id' => $id])->one();
        if (!isset($user))
            throw new NotFoundException('Пользователь не найден');
        return $user;
    }
}
