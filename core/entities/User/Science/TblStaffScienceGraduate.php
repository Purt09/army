<?php

namespace core\entities\User\Science;

use core\entities\Rubish\IoStates;
use core\entities\User\TblOrderOwner;
use core\entities\User\TblStaff;
use Yii;

/**
 * This is the model class for table "tbl_staff_science_graduate".
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
 * @property int $id_science_graduate Ученая степень
 * @property int $id_order_owner Приказ подписал
 * @property int $id_staff Сотрудник
 * @property string $order_date Дата приказа
 * @property string $order_number Номер приказа
 * @property string|null $number
 * @property string|null $speciality_code
 * @property string|null $speciality
 *
 * @property IoStates $ioState
 * @property TblOrderOwner $orderOwner
 * @property TblScienceGradiate $scienceGraduate
 * @property TblStaff $staff
 */
class TblStaffScienceGraduate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_science_graduate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'id_science_graduate', 'id_order_owner', 'id_staff', 'order_date', 'order_number'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'order_number', 'number', 'speciality_code', 'speciality'], 'string'],
            [['last_update', 'order_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_science_graduate', 'id_order_owner', 'id_staff'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_science_graduate', 'id_order_owner', 'id_staff'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_order_owner'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderOwner::className(), 'targetAttribute' => ['id_order_owner' => 'id']],
            [['id_science_graduate'], 'exist', 'skipOnError' => true, 'targetClass' => TblScienceGradiate::className(), 'targetAttribute' => ['id_science_graduate' => 'id']],
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
            'id_science_graduate' => 'Id Science Graduate',
            'id_order_owner' => 'Id Order Owner',
            'id_staff' => 'Id Staff',
            'order_date' => 'Order Date',
            'order_number' => 'Order Number',
            'number' => 'Number',
            'speciality_code' => 'Speciality Code',
            'speciality' => 'Speciality',
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
     * Gets query for [[ScienceGraduate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScienceGraduate()
    {
        return $this->hasOne(TblScienceGradiate::className(), ['id' => 'id_science_graduate']);
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
