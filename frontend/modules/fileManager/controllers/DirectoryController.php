<?php

namespace frontend\modules\fileManager\controllers;

use core\entities\Common\File as FileYii;
use Yii;
use frontend\modules\fileManager\models\Directory;
use frontend\modules\fileManager\models\DirectoryForm;
use yii\filters\VerbFilter;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class DirectoryController extends Controller
{
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'create' => ['post'],
                    'update' => ['post'],
                ],
            ]
        ];
    }

    /**
     * @param null|string $path
     *
     * @return string
     * @throws BadRequestHttpException
     */
    public function actionCreate($id)
    {
        $model = new DirectoryForm();
        if($id == 0)
          $model->path = '/';
        else {
              $parent_dir = FileYii::findOne($id);
              $model->path = $parent_dir->path;
        }

        if ($model->load(Yii::$app->request->post())) {
            try {
                $file = FileYii::createDirectory($model->name, $model->path);
                $file->parent_id = $id;
                $model->save();
                $file->save();
                return $this->redirect(['default/index', 'id' => $file->id]);
            } catch (\Exception $e) {
                yii::$app->session->setFlash('error', $e->getMessage());
            }
        } /*elseif ($parent_dir->parent_id != 0) {
            $file = FileYii::createSubDirectory($model->name, $model->path);
            $file->parent_id = $id;
            $model->save();
            $file->save();
            return $this->redirect(['default/index', 'id' => $file->id]);
        }*/

        return $this->render('create', [
            'model' => $model,
            'directory' => Directory::createByPath($id)
        ]);
    }

    /**
     * @param string $path
     * @return string|\yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionUpdate($path)
    {
        if (strstr($path, '../')) {
            throw new BadRequestHttpException();
        }

        $directory = Directory::createByPath($path);

        $model = new DirectoryForm();
        $model->path = $directory->parent->path;
        $model->name = $directory->name;
        $model->isNew = false;

        if ($model->load(Yii::$app->request->post())) {
            try {
                $model->save();
                return $this->redirect(['default/index', 'path' => $model->path]);
            } catch (\Exception $e) {
                yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('update', [
            'model' => $model,
            'directory' => $directory
        ]);
    }

    /**
     * @param $path
     * @return \yii\web\Response
     * @throws BadRequestHttpException
     * @throws \yii\base\ErrorException
     */
    public function actionDelete($path, $id)
    {
        if (strstr($path, '../')) {
            throw new BadRequestHttpException();
        }
        $directory = Directory::createByPath($path);
        FileHelper::removeDirectory($directory->fullPath);
        $file_yii = FileYii::findOne($id);
        $file_yii->deleteFile();

        return $this->redirect(['default/index', 'path' => $directory->parent->path]);
    }
}
