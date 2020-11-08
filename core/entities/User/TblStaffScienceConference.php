<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "tbl_staff_science_conference".
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
 * @property int $id_science_conference Конференция
 * @property int $id_staff Сотрудник
 * @property int|null $id_conference_result_type Тип результата
 * @property string|null $result Результат
 *
 * @property IoStates $ioState
 * @property TblConferenceResultType $conferenceResultType
 * @property TblScienceConference $scienceConference
 * @property TblStaff $staff
 */
class TblStaffScienceConference extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_science_conference';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'id_science_conference', 'id_staff'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'result'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_science_conference', 'id_staff', 'id_conference_result_type'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_science_conference', 'id_staff', 'id_conference_result_type'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_conference_result_type'], 'exist', 'skipOnError' => true, 'targetClass' => TblConferenceResultType::className(), 'targetAttribute' => ['id_conference_result_type' => 'id']],
            [['id_science_conference'], 'exist', 'skipOnError' => true, 'targetClass' => TblScienceConference::className(), 'targetAttribute' => ['id_science_conference' => 'id']],
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
            'id_science_conference' => 'Id Science Conference',
            'id_staff' => 'Id Staff',
            'id_conference_result_type' => 'Id Conference Result Type',
            'result' => 'Result',
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
     * Gets query for [[ConferenceResultType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConferenceResultType()
    {
        return $this->hasOne(TblConferenceResultType::className(), ['id' => 'id_conference_result_type']);
    }

    /**
     * Gets query for [[ScienceConference]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScienceConference()
    {
        return $this->hasOne(TblScienceConference::className(), ['id' => 'id_science_conference']);
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
