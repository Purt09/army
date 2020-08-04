<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\user\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Экспорт пример', ['excel'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            [
                'attribute' => 'role_id',
                'label' => 'Роли',
                'filter' => \core\helpers\user\RbacHelpers::getRoles(),
                'value' => function ($user) {
                    if (!empty($userRole = \core\helpers\user\RbacHelpers::getRoleUser($user, 'description'))) {
                        return \core\helpers\user\RbacHelpers::getRolesString($user);
                    }
                }
            ],
            'password',
//            [
//                'attribute' => 'Имя',
//                'value' => function ($user) {
//                    return $user->base->firstname;
//                }
//            ],
//            [
//                'attribute' => 'Фамилия',
//                'value' => function ($user) {
//                    return $user->base->lastname;
//                }
//            ],
            [
                'class' => ActionColumn::className(),
            ],
        ],
    ]); ?>


</div>
