<?php


namespace frontend\modules\education\controllers;


use core\entities\Common\Sport;
use core\entities\Common\SportSearch;
use core\entities\Education\Semester;
use core\entities\Education\Timetable;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SportController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actions()
    {
        return [
            'file-upload' => [
                'class' => \pantera\media\actions\kartik\MediaUploadActionKartik::className(),
                'model' => function () {
                    if (Yii::$app->request->get('id')) {
                        return Sport::findOne(Yii::$app->request->get('id'));
                    } else {
                        return new Test();
                    }
                }
            ],
            'file-delete' => [
                'class' => \pantera\media\actions\kartik\MediaDeleteActionKartik::className(),
                'model' => function () {
                    return \pantera\media\models\Media::findOne(Yii::$app->request->get('id'));
                }
            ],
            'file-sort' => [
                'class' => \pantera\media\actions\kartik\MediaSortActionKartik::className(),
                'model' => function () {
                    return Sport::findOne(Yii::$app->request->get('id'));
                }
            ],
        ];
    }

    /**
     * Lists all Sport models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return string
     */
    public function actionView()
    {
        $semesters = Semester::find()->limit(2)->orderBy('id ASC')->all();
        $semestersArray = ArrayHelper::getColumn(ArrayHelper::toArray($semesters), 'id');
        $sports = Sport::find()->where(['semester_id' => $semestersArray])->orderBy('title ASC')->all();
        return $this->render('view', [
            'semesters' => $semesters,
            'sports' => $sports
        ]);
    }

    /**
     * Creates a new Sport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sport();
        $model->created_at = time();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Ведомость добавлена');
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sport model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sport the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sport::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



    public function actionUpload($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('upload', [
            'model' => $model,
        ]);
    }
}