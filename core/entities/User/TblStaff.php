<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_staff".
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
 * @property int|null $id_current_mil_rank Воинское звание
 * @property int|null $id_current_mil_position Занимаемая должность
 * @property string|null $fio ФИО
 * @property string $lastname Фамилия
 * @property string $firstname Имя
 * @property string $sirname Отчество
 * @property string $passport_number Номер паспорта
 * @property string|null $email
 * @property string $mobile_phone Номер мобильного телефона
 * @property string|null $wife_mobile_phone Номер мобильного телефона супруга
 * @property string|null $home_phone Домашний телефон
 * @property string|null $work_phone Рабочий телефон
 * @property string $address Домашний адрес
 * @property string $birthday_date Дата рождения
 * @property string $udl_number Номер удостоверения личности
 * @property string|null $foto Фото
 *
 * @property TblEducation[] $tblEducations
 * @property TblEioTable334[] $tblEioTable334s
 * @property TblMilUnit[] $tblMilUnits
 * @property IoStates $ioState
 * @property TblStaffMilPosition $currentMilPosition
 * @property TblStaffMilitaryRank $currentMilRank
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
 */
class TblStaff extends \yii\db\ActiveRecord
{
    public static function create(string $firstName, string $lastName, string $sirName, string $passport_number, string $mobile_phone,
string $address, string $birthday_date, string $udl_number)
    {
        $user = new self();
        $user->id_io_state = IoStates::ACTIVE;
        $user->rr_name = 'Новая запись справочника';
        $user->firstname = $firstName;
        $user->lastname = $lastName;
        $user->sirname = $sirName;
        $user->fio = $lastName . ' ' . mb_substr($firstName, 0, 1) . '.' . mb_substr($sirName, 0, 1) . '.';
        $user->passport_number = $passport_number;
        $user->mobile_phone = $mobile_phone;
        $user->address = $address;
        $user->birthday_date = $birthday_date;
        $user->udl_number = $udl_number;
        return $user;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'rr_name', 'lastname', 'firstname', 'sirname', 'passport_number', 'mobile_phone', 'address', 'birthday_date', 'udl_number'], 'required'],
            [['rr_name', 'r_icon', 'fio', 'lastname', 'firstname', 'sirname', 'passport_number', 'email', 'mobile_phone', 'wife_mobile_phone', 'home_phone', 'work_phone', 'address', 'udl_number', 'foto'], 'string'],
            [['last_update', 'birthday_date'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_current_mil_rank', 'id_current_mil_position'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_current_mil_rank', 'id_current_mil_position'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_current_mil_position'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaffMilPosition::className(), 'targetAttribute' => ['id_current_mil_position' => 'id']],
            [['id_current_mil_rank'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaffMilitaryRank::className(), 'targetAttribute' => ['id_current_mil_rank' => 'id']],
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
            'id_current_mil_rank' => 'Id Current Mil Rank',
            'id_current_mil_position' => 'Id Current Mil Position',
            'fio' => 'Fio',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'sirname' => 'Sirname',
            'passport_number' => 'Passport Number',
            'email' => 'Email',
            'mobile_phone' => 'Mobile Phone',
            'wife_mobile_phone' => 'Wife Mobile Phone',
            'home_phone' => 'Home Phone',
            'work_phone' => 'Work Phone',
            'address' => 'Address',
            'birthday_date' => 'Birthday Date',
            'udl_number' => 'Udl Number',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[TblEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEducations()
    {
        return $this->hasMany(TblEducation::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblEioTable334s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEioTable334s()
    {
        return $this->hasMany(TblEioTable334::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblMilUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMilUnits()
    {
        return $this->hasMany(TblMilUnit::className(), ['id_chief' => 'id']);
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
     * Gets query for [[CurrentMilPosition]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentMilPosition()
    {
        return $this->hasOne(TblStaffMilPosition::className(), ['id' => 'id_current_mil_position']);
    }

    /**
     * Gets query for [[CurrentMilRank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentMilRank()
    {
        return $this->hasOne(TblStaffMilitaryRank::className(), ['id' => 'id_current_mil_rank']);
    }

    /**
     * Gets query for [[TblStaffDuties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffDuties()
    {
        return $this->hasMany(TblStaffDuty::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffDutyJourneys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffDutyJourneys()
    {
        return $this->hasMany(TblStaffDutyJourney::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffJobAssignments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffJobAssignments()
    {
        return $this->hasMany(TblStaffJobAssignment::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilPositions()
    {
        return $this->hasMany(TblStaffMilPosition::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffMilitaryRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilitaryRanks()
    {
        return $this->hasMany(TblStaffMilitaryRank::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPenalties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPenalties()
    {
        return $this->hasMany(TblStaffPenalty::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPromotions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPromotions()
    {
        return $this->hasMany(TblStaffPromotion::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffPublications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPublications()
    {
        return $this->hasMany(TblStaffPublication::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceConferences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceConferences()
    {
        return $this->hasMany(TblStaffScienceConference::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceGraduates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceGraduates()
    {
        return $this->hasMany(TblStaffScienceGraduate::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffScienceRanks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceRanks()
    {
        return $this->hasMany(TblStaffScienceRank::className(), ['id_staff' => 'id']);
    }

    /**
     * Gets query for [[TblStaffVacations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffVacations()
    {
        return $this->hasMany(TblStaffVacation::className(), ['id_staff' => 'id']);
    }
}
