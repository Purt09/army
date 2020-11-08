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
use kartik\date\DatePicker;

$this->title = 'УЧЕТ ПООЩРЕНИЙ И ДИСЦИПЛИНАРНЫХ ВЗЫСКАНИЙ';

?>
<br><br><br>

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
                    [
                        'attribute' => 'id_order_owner',
                        'filter' => \core\entities\User\TblOrderOwner::typeList(),
                        'value' => function ($model) {
                            return \core\entities\User\TblOrderOwner::typeLabel($model->id_order_owner);
                        },
                        'format' => 'raw'
                    ],
                    [
                        'attribute' => 'order_date',
                        'filter' => DatePicker::widget([
                            'model' => $promotionSearch,
                            'attribute' => 'date_from',
                            'attribute2' => 'date_to',
                            'type' => DatePicker::TYPE_RANGE,
                            'separator' => '-',
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd'
                            ]
                        ]),
                        'format' => ['date', 'php:Y-m-d H:i:s']
                    ],
                    'order_number',
                    'notes:ntext',
                ],
            ]); ?>

            <?php if(\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                <?= Html::a('Добавить поощерение', ['add-promotion', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
            <?php endif; ?>
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
                    [
                        'attribute' => 'id_order_owner',
                        'filter' => \core\entities\User\TblOrderOwner::typeList(),
                        'value' => function ($model) {
                            return \core\entities\User\TblOrderOwner::typeLabel($model->id_order_owner);
                        },
                        'format' => 'raw'
                    ],
                    [
                        'attribute' => 'order_date',
                        'filter' => DatePicker::widget([
                            'model' => $penaltySearch,
                            'attribute' => 'date_from',
                            'attribute2' => 'date_to',
                            'type' => DatePicker::TYPE_RANGE,
                            'separator' => '-',
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd'
                            ]
                        ]),
                        'format' => ['date', 'php:Y-m-d H:i:s']
                    ],
                    'order_number',
                    'id_finish_penalty',
                    'notes:ntext',
                ],
            ]); ?>

            <?php if(\core\helpers\user\RbacHelpers::checkAccessManageUser($user)): ?>
                <?= Html::a('Добавить взыскание', ['add-penalty', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
            <?php endif; ?>
            <br>
        </div>
    </div>
</div>
