<?php


namespace frontend\controllers;


use common\repositories\NotFoundException;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    public function actionView($id)
    {
        $news = News::findOne($id);
        return $this->render('view', [
            'news' => $news
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $publications = NewsPublications::findOne($model->publications);

        if ($model->load(Yii::$app->request->post()) && $publications->load(Yii::$app->request->post())) {
            if(!empty($_FILES['News']['name']['img'])){
                $file = file_get_contents($_FILES['News']['tmp_name']['img']);
                $type = $_FILES['News']['type']['img'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $model->img = $src;
            }

            $model->save();
            $publications->save();
            Yii::$app->session->setFlash('success', 'Новость сохранена');
            return $this->redirect(Yii::$app->request->referrer);
        }

        return $this->render('update', [
            'model' => $model,
            'publications' => $publications
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function findModel($id)
    {
        $model = News::findOne($id);
        if (isset($model))
            return $model;
        else
            throw new NotFoundException('Новость не найдена');
    }
}