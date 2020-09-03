<?php
/**
 * @var $this \yii\web\View
 * @var $user \core\entities\User\TblStaff
 * @var $penaltySearch \core\entities\User\Vpr\TblStaffPenaltySearch
 * @var $penaltyProvider
 * @var $promotionSearch \core\entities\User\Vpr\TblStaffPromotionSearch
 * @var $promotionProvider
 *
 */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'УЧЕТ ПООЩРЕНИЙ И ДИСЦИПЛИНАРНЫХ ВЗЫСКАНИЙ';

?>
<div class="col-sm-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i> Поощерения</h3>
        </div>

        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $promotionProvider,
                'filterModel' => $promotionSearch,
                'columns' => [
                    [
                        'attribute' => 'id_promotion_type',
                        'label' => 'Вид',
                        'filter' => \core\entities\User\Vpr\TblPromotionType::typeList(),
                        'value' => function ($model) {

                            return \core\entities\User\Vpr\TblPromotionType::typeLabel($model->id_promotion_type);
                        },
                        'format' => 'raw'
                    ],
                    'id_order_owner',
                    'order_date',
                    'order_number',
                    'notes:ntext',
                ],
            ]); ?>

            <?= Html::a('Добавить', ['add-promotion', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i> Взыскания</h3>
        </div>
        <div class="box-body">

            <?= GridView::widget([
                'dataProvider' => $penaltyProvider,
                'filterModel' => $penaltySearch,
                'columns' => [
                    [
                        'attribute' => 'id_penalty_type',
                        'filter' => \core\entities\User\Vpr\TblPenaltyType::typeList(),
                        'value' => function ($model) {
                            return \core\entities\User\Vpr\TblPenaltyType::typeLabel($model->id_penalty_type);
                        },
                        'format' => 'raw'
                    ],
                    'id_order_owner',
                    'order_date',
                    'order_number',
                    'id_finish_penalty',
                    'notes:ntext',
                ],
            ]); ?>

            <?= Html::a('Добавить', ['add-penalty', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
            <br>
        </div>
    </div>
</div>
