<?php

namespace core\entities\User;

use core\entities\Rubish\IoStates;
use core\entities\User\Education\TblEducation;
use core\entities\User\MilitaryRank\TblStaffMilitaryRank;
use core\entities\User\Position\TblStaffMilPosition;
use core\entities\User\Science\TblStaffScienceConference;
use core\entities\User\Science\TblStaffScienceGraduate;
use core\entities\User\Science\TblStaffScienceRank;
use Yii;
use core\entities\User\Vpr\TblStaffPenalty;
use core\entities\User\Vpr\TblStaffPromotion;

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
        $user->firstname = $firstName;
        $user->lastname = $lastName;
        $user->sirname = $sirName;
        $user->fio = $lastName . ' ' . mb_substr($firstName, 0, 1) . '.' . mb_substr($sirName, 0, 1) . '.';
        $user->passport_number = $passport_number;
        $user->mobile_phone = $mobile_phone;
        $user->address = $address;
        $user->birthday_date = $birthday_date;
        $user->udl_number = $udl_number;
        $user->foto = "data:image/png;base64,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";
        return $user;
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
          $this->fio = $this->lastname . ' ' . mb_substr($this->firstname, 0, 1) . '.' . mb_substr($this->sirname, 0, 1) . '.';
          return true;
        }
        return false;
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
            [[ 'lastname', 'firstname', 'sirname', 'passport_number', 'mobile_phone', 'address', 'birthday_date', 'udl_number'], 'required'],
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
            'id_current_mil_rank' => 'Звание',
            'id_current_mil_position' => 'Должность',
            'fio' => 'Фио',
            'lastname' => 'Фамилия',
            'firstname' => 'Имя',
            'sirname' => 'Отчество',
            'passport_number' => 'Номер паспорта',
            'email' => 'Email',
            'mobile_phone' => 'Мобильный телефон',
            'wife_mobile_phone' => 'Мобильный телефон жены',
            'home_phone' => 'Домашний телефон',
            'work_phone' => 'Рабочий телефон',
            'address' => 'Адрес',
            'birthday_date' => 'Дата рождения',
            'udl_number' => 'Номер военного билета',
            'foto' => 'Фото',
        ];
    }

    /**
     * Gets query for [[TblEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasMany(User::className(), ['user_base_id' => 'id']);
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
