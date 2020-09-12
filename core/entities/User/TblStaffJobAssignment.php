<?php

namespace core\entities\User;

use core\entities\Rubish\IoStates;
use Yii;

/**
 * This is the model class for table "tbl_staff_job_assignment".
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
 * @property int $id_staff Сотрудник
 * @property string $date_start Дата начала
 * @property string|null $date_end Дата окончания
 * @property string|null $notes Информация
 *
 * @property IoStates $ioState
 * @property TblStaff $staff
 */
class TblStaffJobAssignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_job_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_staff', 'date_start'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'notes'], 'string'],
            [['last_update', 'date_start', 'date_end'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_staff'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_staff'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
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
            'id_staff' => 'Сотрудник',
            'date_start' => 'Дата начала',
            'date_end' => 'Дата окончания',
            'notes' => 'Информация',
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
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(TblStaff::className(), ['id' => 'id_staff']);
    }
}
