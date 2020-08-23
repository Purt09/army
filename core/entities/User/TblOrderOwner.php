<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_order_owner".
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
 * @property string $short_name Короткое название
 *
 * @property TblEioTable334[] $tblEioTable334s
 * @property IoStates $ioState
 * @property TblStaffDutyJourney[] $tblStaffDutyJourneys
 * @property TblStaffMilPosition[] $tblStaffMilPositions
 * @property TblStaffMilitaryRank[] $tblStaffMilitaryRanks
 * @property TblStaffPenalty[] $tblStaffPenalties
 * @property TblStaffPromotion[] $tblStaffPromotions
 * @property TblStaffScienceGraduate[] $tblStaffScienceGraduates
 * @property TblStaffScienceRank[] $tblStaffScienceRanks
 * @property TblStaffVacation[] $tblStaffVacations
 */
class TblOrderOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_order_owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'name', 'short_name'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name', 'short_name'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
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
            'name' => 'Name',
            'short_name' => 'Short Name',
        ];
    }

    /**
     * Gets query for [[TblEioTable334s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEioTable334s()
    {
        return $this->hasMany(TblEioTable334::className(), ['id_order_owner' => 'id']);
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
     * Gets query for [[TblStaffDutyJourneys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffDutyJourneys()
    {
        return $this->hasMany(TblStaffDutyJourney::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilPositions()
    {
        return $this->hasMany(TblStaffMilPosition::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilitaryRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilitaryRanks()
    {
        return $this->hasMany(TblStaffMilitaryRank::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPenalties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPenalties()
    {
        return $this->hasMany(TblStaffPenalty::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPromotions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPromotions()
    {
        return $this->hasMany(TblStaffPromotion::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceGraduates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceGraduates()
    {
        return $this->hasMany(TblStaffScienceGraduate::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceRanks()
    {
        return $this->hasMany(TblStaffScienceRank::className(), ['id_order_owner' => 'id']);
    }

    /**
     * Gets query for [[TblStaffVacations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffVacations()
    {
        return $this->hasMany(TblStaffVacation::className(), ['id_order_owner' => 'id']);
    }
}
