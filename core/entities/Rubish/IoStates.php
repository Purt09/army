<?php

namespace core\entities\Rubish;

use Yii;

/**
 * This is the model class for table "io_states".
 *
 * @property string $unique_id
 * @property string $last_update
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property bool $is_system ЖМБЗ УЙУФЕНОПЗП УПУФПСОЙС. уПУФПСОЙС У ЙДЕОФЙЖЙЛБФПТБНЙ 2-5 СЧМСАФУС УЙУФЕНОЩНЙ Й ОЕ НПЗХФ ВЩФШ ЙУРПМШЪПЧБОЩ ДМС ОБЪОБЮЕОЙС ЙОЖПТНБГЙПООЩН ПВЯЕЛФБН
 *
 * @property IoCategories[] $ioCategories
 * @property IoProcessingOrder[] $ioProcessingOrders
 * @property IoProcessingOrder[] $ioProcessingOrders0
 * @property LifeCycle[] $lifeCycles
 * @property LifeCycle[] $lifeCycles0
 * @property LifeCycle[] $lifeCycles1
 * @property LifeCycleIoStates[] $lifeCycleIoStates
 * @property LifeCycle[] $lifeCycles2
 * @property QBaseTable[] $qBaseTables
 * @property StateCrosses[] $stateCrosses
 * @property StateCrosses[] $stateCrosses0
 * @property TblCity[] $tblCities
 * @property TblConferenceOwner[] $tblConferenceOwners
 * @property TblConferenceRank[] $tblConferenceRanks
 * @property TblConferenceResultType[] $tblConferenceResultTypes
 * @property TblCountry[] $tblCountries
 * @property TblDutyType[] $tblDutyTypes
 * @property TblEducation[] $tblEducations
 * @property TblEducationLevel[] $tblEducationLevels
 * @property TblEioTable334[] $tblEioTable334s
 * @property TblIoObjects[] $tblIoObjects
 * @property TblMilPosition[] $tblMilPositions
 * @property TblMilUnit[] $tblMilUnits
 * @property TblMilitaryRank[] $tblMilitaryRanks
 * @property TblOrderOwner[] $tblOrderOwners
 * @property TblPenaltyType[] $tblPenaltyTypes
 * @property TblPromotionType[] $tblPromotionTypes
 * @property TblScienceConference[] $tblScienceConferences
 * @property TblScienceGradiate[] $tblScienceGradiates
 * @property TblScienceMagazine[] $tblScienceMagazines
 * @property TblScienceRank[] $tblScienceRanks
 * @property TblStaff[] $tblStaff
 * @property TblStaffDuty[] $tblStaffDuties
 * @property TblStaffDutyJourney[] $tblStaffDutyJourneys
 * @property TblStaffJobAssignment[] $tblStaffJobAssignments
 * @property TblStaffMilPosition[] $tblStaffMilPositions
 * @property TblStaffMilitaryRank[] $tblStaffMilitaryRanks
 * @property TblStaffPenalty[] $tblStaffPenalties
 * @property TblStaffPromotion[] $tblStaffPromotions
 * @property TblStaffPublication[] $tblStaffPublications
 * @property TblStaffScienceConference[] $tblStaffScienceConferences
 * @property TblStaffScienceGraduate[] $tblStaffScienceGraduates
 * @property TblStaffScienceRank[] $tblStaffScienceRanks
 * @property TblStaffVacation[] $tblStaffVacations
 * @property TblUnivercity[] $tblUnivercities
 * @property TblVacationType[] $tblVacationTypes
 */
class IoStates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'io_states';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'name'], 'required'],
            [['unique_id', 'name', 'description'], 'string'],
            [['last_update'], 'safe'],
            [['is_system'], 'boolean'],
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
            'name' => 'Name',
            'description' => 'Description',
            'is_system' => 'Is System',
        ];
    }

    /**
     * Gets query for [[IoCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIoCategories()
    {
        return $this->hasMany(IoCategories::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[IoProcessingOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIoProcessingOrders()
    {
        return $this->hasMany(IoProcessingOrder::className(), ['id_state_src' => 'id']);
    }

    /**
     * Gets query for [[IoProcessingOrders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIoProcessingOrders0()
    {
        return $this->hasMany(IoProcessingOrder::className(), ['id_state_dest' => 'id']);
    }

    /**
     * Gets query for [[LifeCycles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLifeCycles()
    {
        return $this->hasMany(LifeCycle::className(), ['id_start_state' => 'id']);
    }

    /**
     * Gets query for [[LifeCycles0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLifeCycles0()
    {
        return $this->hasMany(LifeCycle::className(), ['id_auto_state_attr' => 'id']);
    }

    /**
     * Gets query for [[LifeCycles1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLifeCycles1()
    {
        return $this->hasMany(LifeCycle::className(), ['id_auto_state_ind' => 'id']);
    }

    /**
     * Gets query for [[LifeCycleIoStates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLifeCycleIoStates()
    {
        return $this->hasMany(LifeCycleIoStates::className(), ['id_io_states' => 'id']);
    }

    /**
     * Gets query for [[LifeCycles2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLifeCycles2()
    {
        return $this->hasMany(LifeCycle::className(), ['id' => 'id_life_cycle'])->viaTable('life_cycle_io_states', ['id_io_states' => 'id']);
    }

    /**
     * Gets query for [[QBaseTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQBaseTables()
    {
        return $this->hasMany(QBaseTable::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[StateCrosses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStateCrosses()
    {
        return $this->hasMany(StateCrosses::className(), ['id_state_src' => 'id']);
    }

    /**
     * Gets query for [[StateCrosses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStateCrosses0()
    {
        return $this->hasMany(StateCrosses::className(), ['id_state_dest' => 'id']);
    }

    /**
     * Gets query for [[TblCities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblCities()
    {
        return $this->hasMany(TblCity::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblConferenceOwners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblConferenceOwners()
    {
        return $this->hasMany(TblConferenceOwner::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblConferenceRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblConferenceRanks()
    {
        return $this->hasMany(TblConferenceRank::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblConferenceResultTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblConferenceResultTypes()
    {
        return $this->hasMany(TblConferenceResultType::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblCountries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblCountries()
    {
        return $this->hasMany(TblCountry::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblDutyTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblDutyTypes()
    {
        return $this->hasMany(TblDutyType::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEducations()
    {
        return $this->hasMany(TblEducation::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblEducationLevels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEducationLevels()
    {
        return $this->hasMany(TblEducationLevel::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblEioTable334s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEioTable334s()
    {
        return $this->hasMany(TblEioTable334::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblIoObjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblIoObjects()
    {
        return $this->hasMany(TblIoObjects::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMilPositions()
    {
        return $this->hasMany(TblMilPosition::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblMilUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMilUnits()
    {
        return $this->hasMany(TblMilUnit::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblMilitaryRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMilitaryRanks()
    {
        return $this->hasMany(TblMilitaryRank::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblOrderOwners]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrderOwners()
    {
        return $this->hasMany(TblOrderOwner::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblPenaltyTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPenaltyTypes()
    {
        return $this->hasMany(TblPenaltyType::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblPromotionTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPromotionTypes()
    {
        return $this->hasMany(TblPromotionType::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblScienceConferences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblScienceConferences()
    {
        return $this->hasMany(TblScienceConference::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblScienceGradiates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblScienceGradiates()
    {
        return $this->hasMany(TblScienceGradiate::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblScienceMagazines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblScienceMagazines()
    {
        return $this->hasMany(TblScienceMagazine::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblScienceRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblScienceRanks()
    {
        return $this->hasMany(TblScienceRank::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaff()
    {
        return $this->hasMany(TblStaff::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffDuties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffDuties()
    {
        return $this->hasMany(TblStaffDuty::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffDutyJourneys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffDutyJourneys()
    {
        return $this->hasMany(TblStaffDutyJourney::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffJobAssignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffJobAssignments()
    {
        return $this->hasMany(TblStaffJobAssignment::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilPositions()
    {
        return $this->hasMany(TblStaffMilPosition::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilitaryRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilitaryRanks()
    {
        return $this->hasMany(TblStaffMilitaryRank::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPenalties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPenalties()
    {
        return $this->hasMany(TblStaffPenalty::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPromotions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPromotions()
    {
        return $this->hasMany(TblStaffPromotion::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPublications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPublications()
    {
        return $this->hasMany(TblStaffPublication::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceConferences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceConferences()
    {
        return $this->hasMany(TblStaffScienceConference::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceGraduates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceGraduates()
    {
        return $this->hasMany(TblStaffScienceGraduate::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceRanks()
    {
        return $this->hasMany(TblStaffScienceRank::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblStaffVacations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffVacations()
    {
        return $this->hasMany(TblStaffVacation::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblUnivercities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblUnivercities()
    {
        return $this->hasMany(TblUnivercity::className(), ['id_io_state' => 'id']);
    }

    /**
     * Gets query for [[TblVacationTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblVacationTypes()
    {
        return $this->hasMany(TblVacationType::className(), ['id_io_state' => 'id']);
    }
}
