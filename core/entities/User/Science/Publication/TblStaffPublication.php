<?php

namespace core\entities\User\Science\Publication;

use core\entities\Rubish\IoStates;
use core\entities\User\TblStaff;
use Yii;

/**
 * This is the model class for table "tbl_staff_publication".
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
 * @property int $id_science_magazine Научный журнал
 * @property string $publication_name Название публикации
 * @property string $pages Страницы
 * @property string $out_data Дата публикации
 * @property string $expert_zakl_number Номер экспертного заключения
 * @property string|null $scan_title Скан первой страницы статьи
 * @property string|null $scan_expert Скан экспертного заключения
 * @property string|null $scan_magazine Скан обложки журнала
 * @property string|null $scan_content Скан содержания журнала
 *
 * @property IoStates $ioState
 * @property TblScienceMagazine $scienceMagazine
 * @property TblStaff $staff
 */
class TblStaffPublication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_staff_publication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_staff', 'id_science_magazine', 'publication_name', 'pages', 'out_data', 'expert_zakl_number'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'publication_name', 'pages', 'expert_zakl_number', 'scan_title', 'scan_expert', 'scan_magazine', 'scan_content'], 'string'],
            [['last_update', 'out_data'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_staff', 'id_science_magazine'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_staff', 'id_science_magazine'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_science_magazine'], 'exist', 'skipOnError' => true, 'targetClass' => TblScienceMagazine::className(), 'targetAttribute' => ['id_science_magazine' => 'id']],
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
            'id_science_magazine' => 'Научный журнал',
            'publication_name' => 'Название публикации',
            'pages' => 'Страницы',
            'out_data' => 'Дата публикации',
            'expert_zakl_number' => 'Номер экспертного заключения',
            'scan_title' => 'Скан первой страницы статьи',
            'scan_expert' => 'Скан экспертного заключения',
            'scan_magazine' => 'Скан обложки журнала',
            'scan_content' => 'Скан содержания журнала',
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
     * Gets query for [[ScienceMagazine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScienceMagazine()
    {
        return $this->hasOne(TblScienceMagazine::className(), ['id' => 'id_science_magazine']);
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
