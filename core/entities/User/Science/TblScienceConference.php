<?php

namespace core\entities\User\Science;

use core\entities\Rubish\IoStates;
use Yii;

/**
 * This is the model class for table "tbl_science_conference".
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
 * @property int $id_conference_owner Организатор конференции
 * @property int $id_conference_rank Уровень конференции
 * @property string $name Название
 * @property string $date_start Дата начала
 * @property string|null $date_end Дата окончания
 *
 * @property IoStates $ioState
 * @property TblConferenceOwner $conferenceOwner
 * @property TblConferenceRank $conferenceRank
 * @property TblStaffScienceConference[] $tblStaffScienceConferences
 */
class TblScienceConference extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_science_conference';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'id_conference_owner', 'id_conference_rank', 'name', 'date_start'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name'], 'string'],
            [['last_update', 'date_start', 'date_end'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_conference_owner', 'id_conference_rank'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_conference_owner', 'id_conference_rank'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_conference_owner'], 'exist', 'skipOnError' => true, 'targetClass' => TblConferenceOwner::className(), 'targetAttribute' => ['id_conference_owner' => 'id']],
            [['id_conference_rank'], 'exist', 'skipOnError' => true, 'targetClass' => TblConferenceRank::className(), 'targetAttribute' => ['id_conference_rank' => 'id']],
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
            'id_conference_owner' => 'Организатор конфереции',
            'id_conference_rank' => 'Уровень конференции',
            'name' => 'Название',
            'date_start' => 'Дата начала конференции',
            'date_end' => 'Дата окончания конференции',
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
     * Gets query for [[ConferenceOwner]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConferenceOwner()
    {
        return $this->hasOne(TblConferenceOwner::className(), ['id' => 'id_conference_owner']);
    }

    /**
     * Gets query for [[ConferenceRank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConferenceRank()
    {
        return $this->hasOne(TblConferenceRank::className(), ['id' => 'id_conference_rank']);
    }

    /**
     * Gets query for [[TblStaffScienceConferences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffScienceConferences()
    {
        return $this->hasMany(TblStaffScienceConference::className(), ['id_science_conference' => 'id']);
    }
}
