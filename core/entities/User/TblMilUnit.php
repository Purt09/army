<?php

namespace core\entities\User;

use core\entities\Rubish\IoStates;
use core\entities\User\Position\TblStaffMilPosition;
use core\entities\User\Vpr\ViewTypeTrait;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_mil_unit".
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
 * @property int|null $id_parent Входит в
 * @property int $number
 * @property string $short_name
 * @property string $name Название
 * @property int|null $id_chief Начальник
 * @property string|null $work_phone Телефон дежурного
 * @property string|null $chief_phone Телефон начальника
 * @property int|null $item_is_leaf
 *
 * @property TblEioTable334[] $tblEioTable334s
 * @property IoStates $ioState
 * @property TblMilUnit $parent
 * @property TblMilUnit[] $tblMilUnits
 * @property TblStaff $chief
 * @property TblStaffMilPosition[] $tblStaffMilPositions
 */
class TblMilUnit extends \yii\db\ActiveRecord
{
    const CAFEDRA51 = 2;
    const CAFEDRA52 = 28;
    const CAFEDRA53 = 30;
    const CAFEDRA55 = 31;
    const FAKULTET5 = 1;

    use ViewTypeTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mil_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'number', 'short_name', 'name'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'short_name', 'name', 'work_phone', 'chief_phone'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_parent', 'number', 'id_chief', 'item_is_leaf'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_parent', 'number', 'id_chief', 'item_is_leaf'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_parent'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['id_parent' => 'id']],
            [['id_chief'], 'exist', 'skipOnError' => true, 'targetClass' => TblStaff::className(), 'targetAttribute' => ['id_chief' => 'id']],
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
            'id_parent' => 'Входит в',
            'number' => 'Номер',
            'short_name' => 'Короткое имя',
            'name' => 'Название',
            'id_chief' => 'Начальник',
            'work_phone' => 'Рабочий телефон',
            'chief_phone' => 'Телефон начальника',
            'item_is_leaf' => 'Лист',
        ];
    }

    /**
     * Gets query for [[TblEioTable334s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEioTable334s()
    {
        return $this->hasMany(TblEioTable334::className(), ['id_mil_unit' => 'id']);
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
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(TblMilUnit::className(), ['id' => 'id_parent']);
    }

    /**
     * Gets query for [[TblMilUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMilUnits()
    {
        return $this->hasMany(TblMilUnit::className(), ['id_parent' => 'id']);
    }

    /**
     * Gets query for [[Chief]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChief()
    {
        return $this->hasOne(TblStaff::className(), ['id' => 'id_chief']);
    }

    /**
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilPositions()
    {
        return $this->hasMany(TblStaffMilPosition::className(), ['id_mil_unit' => 'id']);
    }
}
