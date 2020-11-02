<?php

namespace core\entities\User\Education;

use core\entities\Rubish\IoStates;
use core\entities\User\TblStaff;
use Yii;

/**
 * This is the model class for table "tbl_education".
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
 * @property int $id_edication_level Уровень образования
 * @property int $id_univercity Учебное заведение
 * @property int $id_staff Сотрудник
 * @property string $datestart Дата поступления
 * @property string $dateend Дата окончания
 * @property string $diplom_number Номер диплома
 * @property bool $is_military Военный ВУЗ
 *
 * @property IoStates $ioState
 * @property TblEducationLevel $edicationLevel
 * @property TblStaff $staff
 * @property TblUnivercity $univercity
 */
class TblEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_edication_level', 'id_univercity', 'id_staff', 'datestart', 'dateend', 'diplom_number', 'is_military'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'diplom_number'], 'string'],
            [['last_update', 'datestart', 'dateend'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_edication_level', 'id_univercity', 'id_staff'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_edication_level', 'id_univercity', 'id_staff'], 'integer'],
            [['is_military'], 'boolean'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_edication_level'], 'exist', 'skipOnError' => true, 'targetClass' => TblEducationLevel::className(), 'targetAttribute' => ['id_edication_level' => 'id']],
            [['id_staff'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaff::className(), 'targetAttribute' => ['id_staff' => 'id']],
            [['id_univercity'], 'exist', 'skipOnError' => true, 'targetClass' => TblUnivercity::className(), 'targetAttribute' => ['id_univercity' => 'id']],
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
            'id_edication_level' => 'Уровень образования',
            'id_univercity' => 'Учебное заведение',
            'id_staff' => 'Сотрудник',
            'datestart' => 'Дата поступления',
            'dateend' => 'Дата окончания',
            'diplom_number' => 'Номер диплома',
            'is_military' => 'Военный ВУЗ?',
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
     * Gets query for [[EdicationLevel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEdicationLevel()
    {
        return $this->hasOne(TblEducationLevel::className(), ['id' => 'id_edication_level']);
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

    /**
     * Gets query for [[Univercity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnivercity()
    {
        return $this->hasOne(TblUnivercity::className(), ['id' => 'id_univercity']);
    }
}
