<?php

namespace frontend\modules\fileManager\controllers;

use frontend\modules\fileManager\models\Directory;
use frontend\modules\fileManager\models\File;
use core\entities\Common\File as FileYii;
use frontend\modules\fileManager\models\UploadForm;
use yii\helpers\Inflector;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;

class FileController extends Controller
{
    /**
     * @param $path
     * @return string|\yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionUpload($path)
    {
        if (strstr($path, '../')) {
            throw new BadRequestHttpException();
        }

        $directory = Directory::createByPath($path);

        $model = new UploadForm();
        $model->path = $path;

        if (\Yii::$app->request->isPost) {
            $model->files = UploadedFile::getInstances($model, 'files');

            $file = FileYii::createFile($model->files['0']->name, $model->path, $model->files['0']->size);
            if ($model->upload()) {
                $file->save();

                return $this->redirect(['default/index', 'path' => $model->path]);
            }
        }

        return $this->render('upload', [
            'directory' => $directory,
            'model' => $model
        ]);
    }

    /**
     * @param $path
     * @return \yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionDelete($path, $id)
    {
        if (strstr($path, '../')) {
            throw new BadRequestHttpException();
        }

        $file = File::createByPath($path);
        $file_yii = FileYii::findOne($id);
        $file_yii->deleteFile();

        unlink($file->fullPath);

        return $this->redirect(['default/index', 'path' => $file->directory->path]);

    }
}