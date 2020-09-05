<?php

namespace core\entities\User\Position;


use core\entities\Rubish\IoStates;
use core\entities\User\TblMilUnit;
use core\entities\User\TblOrderOwner;
use core\entities\User\TblStaff;

/**
 * This is the model class for table "tbl_staff_mil_position".
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
 * @property string $name Название
 * @property int $id_mil_unit Подразделение
 * @property int $id_mil_position Должность
 * @property string $vus ВУС
 * @property int $tarif Тарифный разряд
 * @property bool $is_military Военная
 * @property int|null $id_staff Сотрудник
 * @property int|null $id_order_owner Приказ подписал
 * @property string|null $order_date Дата приказа
 * @property string|null $order_number Номер приказа
 *
 * @property TblStaff[] $tblStaff
 * @property IoStates $ioState
 * @property TblMilPosition $milPosition
 * @property TblMilUnit $milUnit
 * @property TblOrderOwner $orderOwner
 * @property TblStaff $staff
 */
class TblStaffMilPosition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_mil_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_mil_unit', 'id_mil_position', 'vus', 'tarif'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name', 'vus', 'order_number'], 'string'],
            [['last_update', 'order_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_mil_unit', 'id_mil_position', 'tarif', 'id_staff', 'id_order_owner'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_mil_unit', 'id_mil_position', 'tarif', 'id_staff', 'id_order_owner'], 'integer'],
            [['is_military'], 'boolean'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_mil_position'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilPosition::className(), 'targetAttribute' => ['id_mil_position' => 'id']],
            [['id_mil_unit'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['id_mil_unit' => 'id']],
            [['id_order_owner'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderOwner::className(), 'targetAttribute' => ['id_order_owner' => 'id']],
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
            'name' => 'Название',
            'id_mil_unit' => 'Подразделение',
            'id_mil_position' => 'Должность',
            'vus' => 'Вус',
            'tarif' => 'Тариф',
            'is_military' => 'Военная?',
            'id_staff' => 'Пользователь',
            'id_order_owner' => 'Кто приказал',
            'order_date' => 'Дата приказа',
            'order_number' => 'Номер приказа',
        ];
    }

    /**
     * Gets query for [[TblStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaff()
    {
        return $this->hasMany(TblStaff::className(), ['id_current_mil_position' => 'id']);
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
     * Gets query for [[MilPosition]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMilPosition()
    {
        return $this->hasOne(TblMilPosition::className(), ['id' => 'id_mil_position']);
    }

    /**
     * Gets query for [[MilUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMilUnit()
    {
        return $this->hasOne(TblMilUnit::className(), ['id' => 'id_mil_unit']);
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
}
