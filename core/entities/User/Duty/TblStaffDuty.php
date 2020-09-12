<?php

namespace core\entities\User\Duty;

use core\entities\Rubish\IoStates;
use core\entities\User\TblStaff;

/**
 * This is the model class for table "tbl_staff_duty".
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
 * @property int $id_duty_type Тип наряда
 * @property int $id_staff Сотрудник
 * @property string $date_start Дата заступления
 * @property string $date_end Дата сдачи
 *
 * @property IoStates $ioState
 * @property TblDutyType $dutyType
 * @property TblStaff $staff
 */
class TblStaffDuty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_duty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_duty_type', 'id_staff', 'date_start', 'date_end'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon'], 'string'],
            [['last_update', 'date_start', 'date_end'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_duty_type', 'id_staff'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_duty_type', 'id_staff'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_duty_type'], 'exist', 'skipOnError' => true, 'targetClass' => TblDutyType::className(), 'targetAttribute' => ['id_duty_type' => 'id']],
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
            'id_duty_type' => 'Тип наряда',
            'id_staff' => 'Сотрудник',
            'date_start' => 'Дата заступления',
            'date_end' => 'Дата сдачи',
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
     * Gets query for [[DutyType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDutyType()
    {
        return $this->hasOne(TblDutyType::className(), ['id' => 'id_duty_type']);
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
