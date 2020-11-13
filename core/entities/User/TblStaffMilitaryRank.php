<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_staff_military_rank".
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
 * @property int $id_military_rank Воинское звание
 * @property int $id_order_owner Приказ подписал
 * @property int $id_staff Сотрудник
 * @property string $order_date Дата приказа
 * @property string $order_number Номер приказа
 *
 * @property TblStaff[] $tblStaff
 * @property IoStates $ioState
 * @property TblMilitaryRank $militaryRank
 * @property TblOrderOwner $orderOwner
 * @property TblStaff $staff
 */
class TblStaffMilitaryRank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_military_rank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rr_name', 'id_military_rank', 'id_order_owner', 'id_staff', 'order_date', 'order_number'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'order_number'], 'string'],
            [['last_update', 'order_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_military_rank', 'id_order_owner', 'id_staff'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_military_rank', 'id_order_owner', 'id_staff'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_military_rank'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilitaryRank::className(), 'targetAttribute' => ['id_military_rank' => 'id']],
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
            'id_military_rank' => 'Id Military Rank',
            'id_order_owner' => 'Id Order Owner',
            'id_staff' => 'Id Staff',
            'order_date' => 'Order Date',
            'order_number' => 'Order Number',
        ];
    }

    /**
     * Gets query for [[TblStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaff()
    {
        return $this->hasMany(TblStaff::className(), ['id_current_mil_rank' => 'id']);
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
     * Gets query for [[MilitaryRank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMilitaryRank()
    {
        return $this->hasOne(TblMilitaryRank::className(), ['id' => 'id_military_rank']);
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
