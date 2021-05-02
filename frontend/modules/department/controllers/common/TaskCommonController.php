<?php


namespace frontend\modules\department\controllers\common;


use core\entities\Army\TaskCommon;
use core\entities\Army\TaskCommonSearch;
use DateTime;
use kartik\date\DatePicker;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TaskCommonController extends Controller
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
     * Lists all TaskCommon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaskCommonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new TaskCommon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TaskCommon();

        if ($model->load(Yii::$app->request->post())) {
            $model->order_date_finish = strtotime($model->order_date_finish);
            $model->date_finish = strtotime($model->date_finish);
            $model->created_at = time();
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TaskCommon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->order_date_finish = strtotime($model->order_date_finish);
            $model->date_finish = strtotime($model->date_finish);
            $model->save();
            return $this->redirect(['index']);
        }

        $model->order_date_finish = Yii::$app->formatter->asDate($model->order_date_finish);
        $model->date_finish = Yii::$app->formatter->asDate($model->date_finish);

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDownload($id)
    {
        $file = \Yii::createObject([
            'class' => 'codemix\excelexport\ExcelFile',
            'sheets' => [
                'Users' => [
                    'class' => 'codemix\excelexport\ActiveExcelSheet',
                    'query' => TaskCommon::find()->where(['id' => $id]),
                    'attributes' => [
                        'order_id',
                        'order_date_finish',
                        'date_finish',
                        'name',    // Related attribute
                        'description',    // Related attribute
                        'is_complete_cafedra_51',
                        'is_complete_cafedra_52',
                        'is_complete_cafedra_53',
                        'is_complete_cafedra_55',
                        'is_complete_course_51',
                        'is_complete_course_52',
                        'is_complete_course_53',
                        'is_complete_course_54',
                        'is_complete_course_55',
                        'is_complete_manager_cv',
                        'is_complete_manager_vpr',
                        'is_complete_manager_teacher',
                    ],
                    'formatters' => [
                        // Dates and datetimes must be converted to Excel format
                        2 => function ($value, $row, $data) {
                            return Yii::$app->formatter->asDate($value);
                        },
                        1 => function ($value, $row, $data) {
                            return Yii::$app->formatter->asDate($value);
                        },
                        5 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        6 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        7 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        8 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        9 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        10 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        11 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        12 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        13 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        14 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        15 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                        16 => function ($value, $row, $data) {
                            if($value)
                                return 'Выполнено';
                            return 'Не выполнено';
                        },
                    ],
                ],
            ]
        ]);
        $file->send('task.xlsx');
        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing TaskCommon model.
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
     * Finds the TaskCommon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TaskCommon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TaskCommon::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}