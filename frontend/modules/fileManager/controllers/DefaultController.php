<?php

namespace frontend\modules\fileManager\controllers;

use core\entities\Common\File;
use frontend\modules\fileManager\models\Directory;
use frontend\modules\fileManager\SimpleFilemanagerModule;
use Yii;
use yii\data\ArrayDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class DefaultController
 * @package app\modules\fileManager\controllers
 * @property SimpleFilemanagerModule $module
 */
class DefaultController extends Controller
{
    /**
     * @param null $path
     *
     * @return string
     * @throws BadRequestHttpException
     */
    public function actionIndex($id = null)
    {
        // if (strstr($path, '../')) {
        //     throw new BadRequestHttpException();
        // }
        mb_internal_encoding("UTF-8");

        // try {
          $breadCrumbs = File::getBreadCrumbs($id);
            $directory = Directory::createByPath($id);

            $list = File::getByPath($id);
        // } catch (\Exception $e) {
        //     yii::$app->session->setFlash('error', $e->getMessage());
        //     return $this->redirect(yii::$app->request->referrer);
        // }

        return $this->render('index', [
            'breadCrumbs' => $breadCrumbs,
            'directory' => $directory,
            'dataProvider' => new ArrayDataProvider(
                [
                    'allModels' => $list,
                    'sort' => [
                        'attributes' => ['name', 'time'],
                    ],
                ]
            )
        ]);
    }
}
