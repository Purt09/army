<?php

namespace backend\controllers\user;

use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use core\entities\User\TblStaff;
use core\entities\User\UsersBase;
use core\services\api\UserApiService;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use core\repositories\user\UserRepository;
use Yii;
use core\entities\User\User;
use backend\forms\user\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use core\entities\User\MdlUser;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    private $service;
    private $users;
    private $serviceAPI;


    public function __construct($id, $module, $config = [])
    {
        $this->serviceAPI = new UserApiService();
        $this->users = new UserRepository();
        $this->service = new UserServices();
        parent::__construct($id, $module, $config);
    }

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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionExcel()
    {
        try {
            $file = \Yii::createObject([
                'class' => 'codemix\excelexport\ExcelFile',
                'sheets' => [
                    'Users' => [
                        'class' => 'codemix\excelexport\ActiveExcelSheet',
                        'query' => UsersBase::find()->with('rank'),
                    ]
                ]
            ]);
            $file->send('user.xlsx');
        } catch (\Exception $e) {
            vardump($e->getMessage());
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \Exception
     */
    public function actionCreate()
    {
        $models = new SignupUserForm();
        if ($models->load(Yii::$app->request->post())) {
            $user = User::requestSignup(
                $models->username,
                $models->password
            );
            $user->user_base_id = 'ЗДЕСЬ ID ИЗ tbl_staff не нужный';
            if ($models->moodle_id == 0) {
                $user_id = $this->serviceAPI->createUser(
                    $models->username,
                    $models->email,
                    $models->password,
                    $models->firstName,
                    $models->lastName
                );
                vardump($user_id);
                $user->user_moodle_id = $user_id[0]['id'];
                vardump($user->save());vardump($user);
            }
            return $this->render('create', [
                'models' => $models,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $userMoodle = MdlUser::findOne($model->user_moodle_id);
            $model->save();
            $userMoodle->password = '';
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'models' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public
    function actionDelete($id)
    {

        $model = $this->findModel($id);

        try {
            $this->service->delete($model);
        } catch (\Exception $e) {
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
