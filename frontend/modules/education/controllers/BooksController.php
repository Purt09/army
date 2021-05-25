<?php


namespace frontend\modules\education\controllers;


use core\entities\Common\Books\Books;
use core\entities\Common\Books\BooksCategory;
use RuntimeException;
use Yii;
use yii\web\Controller;

class BooksController extends Controller
{
    public function actionIndex($category_id)
    {
        $books = Books::find()->where(['category_id' => $category_id])->orderBy('id DESC')->all();
        $category = BooksCategory::findOne($category_id);
        return $this->render('index', [
            'books' => $books,
            'category' => $category
        ]);
    }

    public function actionCreate($category_id)
    {
        $model = new Books();
        $model->category_id = $category_id;

        if ($model->load(Yii::$app->request->post())) {
            if(!empty($_FILES['Books']['name']['image'])){
                if($_FILES['Books']["size"]["image"] > 1000000)
                    throw new RuntimeException('Слишком большой вес у изображения');
                $file = file_get_contents($_FILES['Books']['tmp_name']['image']);
                $type = $_FILES['Books']['type']['image'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $model->image = $src;
            }
            $model->created_at = time();
            $model->save();
            return $this->redirect(['index', 'category_id' => $model->category_id]);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Books::findOne($id);

        if ($model->load(Yii::$app->request->post())) {
            if(!empty($_FILES['Books']['name']['image'])){
                if($_FILES['Books']["size"]["image"] > 1000000)
                    throw new RuntimeException('Слишком большой вес у изображения');
                $file = file_get_contents($_FILES['Books']['tmp_name']['image']);
                $type = $_FILES['Books']['type']['image'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $model->image = $src;
            }
            $model->save();
            return $this->redirect(['index', 'category_id' => $model->category_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Books::findOne($id);
        $model->delete();

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}