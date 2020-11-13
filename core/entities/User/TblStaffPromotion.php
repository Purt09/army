<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_staff_promotion".
 *
 * @property string $unique_id
 * @property string $last_update
 * @property int $id
 * @property int $id_io_state
 * @property string $uuid_t
 * @property string $rr_name
 * @property string|null $r_icon
 * @property int|null $record_fill_color
 * @property int|null $record_text_color
 * @property int $id_promotion_type Тип поощрения
 * @property int $id_staff Сотрудник
 * @property int $id_order_owner Приказ подписал
 * @property string $order_date Дата приказа
 * @property string $order_number Номер приказа
 * @property string|null $notes Информация
 *
 * @property TblStaffPenalty[] $tblStaffPenalties
 * @property IoStates $ioState
 * @property TblOrderOwner $orderOwner
 * @property TblPromotionType $promotionType
 * @property TblStaff $staff
 */
class TblStaffPromotion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_promotion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'id_promotion_type', 'id_staff', 'id_order_owner', 'order_date', 'order_number'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'order_number', 'notes'], 'string'],
            [['last_update', 'order_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_promotion_type', 'id_staff', 'id_order_owner'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_promotion_type', 'id_staff', 'id_order_owner'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_order_owner'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderOwner::className(), 'targetAttribute' => ['id_order_owner' => 'id']],
            [['id_promotion_type'], 'exist', 'skipOnError' => true, 'targetClass' => TblPromotionType::className(), 'targetAttribute' => ['id_promotion_type' => 'id']],
            [['id_staff'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaff::className(), 'targetAttribute' => ['id_staff' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unique_id' => 'Unique ID',
            'last_update' => 'Last Update',
            'id' => 'ID',
            'id_io_state' => 'Id Io State',
            'uuid_t' => 'Uuid T',
            'rr_name' => 'Rr Name',
            'r_icon' => 'R Icon',
            'record_fill_color' => 'Record Fill Color',
            'record_text_color' => 'Record Text Color',
            'id_promotion_type' => 'Id Promotion Type',
            'id_staff' => 'Id Staff',
            'id_order_owner' => 'Id Order Owner',
            'order_date' => 'Order Date',
            'order_number' => 'Order Number',
            'notes' => 'Notes',
        ];
    }

    /**
     * Gets query for [[TblStaffPenalties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPenalties()
    {
        return $this->hasMany(TblStaffPenalty::className(), ['id_finish_penalty' => 'id']);
    }

    /**
     * Gets query for [[IoState]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIoState()
    {
        return $this->hasOne(IoStates::className(), ['id' => 'id_io_state']);
    }

    /**
     * Gets query for [[OrderOwner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderOwner()
    {
        return $this->hasOne(TblOrderOwner::className(), ['id' => 'id_order_owner']);
    }

    /**
     * Gets query for [[PromotionType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPromotionType()
    {
        return $this->hasOne(TblPromotionType::className(), ['id' => 'id_promotion_type']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(TblStaff::className(), ['id' => 'id_staff']);
    }
}
