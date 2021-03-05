<?php

namespace frontend\modules\education\controllers\conference;

use core\entities\User\Science\TblStaffScienceConference;
use core\entities\User\Science\TblStaffScienceConferenceSearch;
use core\entities\User\TblStaff;
use Yii;
use core\entities\User\Science\TblScienceConference;
use core\entities\User\Science\TblScienceConferenceSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScienceConferenceController implements the CRUD actions for TblScienceConference model.
 */
class ScienceConferenceController extends Controller
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

    /**
     * Lists all TblScienceConference models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblScienceConferenceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblScienceConference model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUsers($id)
    {
        $searchModel = new TblStaffScienceConferenceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);


        return $this->render('users', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new TblScienceConference model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUserAdd($id)
    {
        $model = new TblStaffScienceConference();

        $users = TblStaff::find()->asArray()->all();
        $users = ArrayHelper::map($users, 'id', 'fio');

        if ($model->load(Yii::$app->request->post())) {
            $model->id_staff = Yii::$app->request->post('staff_id');
            $model->id_science_conference = $id;
            $model->save();
            return $this->redirect(['users', 'id' => $id]);
        }

        return $this->render('user_add', [
            'model' => $model,
            'users' => $users
        ]);
    }

    /**
     * Creates a new TblScienceConference model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblScienceConference();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblScienceConference model.
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
     * Deletes an existing TblScienceConference model.
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
     * Finds the TblScienceConference model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblScienceConference the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblScienceConference::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
