<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_staff_vacation".
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
 * @property int $id_vacation_type Тип отпуска
 * @property int $id_staff Сотрудник
 * @property string $date_start Дата начала
 * @property string $date_end Дата окончания
 * @property int|null $id_order_owner Приказ подписал
 * @property string|null $order_number Номер приказа
 * @property string|null $order_date Дата приказа
 *
 * @property IoStates $ioState
 * @property TblOrderOwner $orderOwner
 * @property TblStaff $staff
 * @property TblVacationType $vacationType
 */
class TblStaffVacation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_vacation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'id_vacation_type', 'id_staff', 'date_start', 'date_end'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'order_number'], 'string'],
            [['last_update', 'date_start', 'date_end', 'order_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_vacation_type', 'id_staff', 'id_order_owner'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_vacation_type', 'id_staff', 'id_order_owner'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_order_owner'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderOwner::className(), 'targetAttribute' => ['id_order_owner' => 'id']],
            [['id_staff'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaff::className(), 'targetAttribute' => ['id_staff' => 'id']],
            [['id_vacation_type'], 'exist', 'skipOnError' => true, 'targetClass' => TblVacationType::className(), 'targetAttribute' => ['id_vacation_type' => 'id']],
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
            'id_vacation_type' => 'Id Vacation Type',
            'id_staff' => 'Id Staff',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'id_order_owner' => 'Id Order Owner',
            'order_number' => 'Order Number',
            'order_date' => 'Order Date',
        ];
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
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(TblStaff::className(), ['id' => 'id_staff']);
    }

    /**
     * Gets query for [[VacationType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVacationType()
    {
        return $this->hasOne(TblVacationType::className(), ['id' => 'id_vacation_type']);
    }
}
