<?php

namespace core\entities\User\Position;

use core\entities\Rubish\IoStates;
use core\entities\User\Vpr\ViewTypeTrait;
use Yii;

/**
 * This is the model class for table "tbl_mil_position".
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
 * @property int|null $position
 *
 * @property TblEioTable334[] $tblEioTable334s
 * @property IoStates $ioState
 * @property TblStaffMilPosition[] $tblStaffMilPositions
 */
class TblMilPosition extends \yii\db\ActiveRecord
{

    use ViewTypeTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mil_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'name'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'position'], 'integer'],
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
            'name' => 'Должность',
            'position' => 'Сортировка'
        ];
    }

    /**
     * Gets query for [[TblEioTable334s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEioTable334s()
    {
        return $this->hasMany(TblEioTable334::className(), ['id_mil_position' => 'id']);
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
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffMilPositions()
    {
        return $this->hasMany(TblStaffMilPosition::className(), ['id_mil_position' => 'id']);
    }
}
