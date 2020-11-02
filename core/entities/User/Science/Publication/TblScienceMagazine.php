<?php

namespace core\entities\User\Science\Publication;

use core\entities\Rubish\IoStates;
use core\entities\User\Vpr\ViewTypeTrait;
use Yii;

/**
 * This is the model class for table "tbl_science_magazine".
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
 * @property bool $is_ricc РИНЦ
 * @property bool $is_vak ВАК
 * @property bool $is_scopus SCOPUS
 * @property bool $is_shadow Гос.тайна
 *
 * @property IoStates $ioState
 * @property TblStaffPublication[] $tblStaffPublications
 */
class TblScienceMagazine extends \yii\db\ActiveRecord
{
    use ViewTypeTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_science_magazine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'is_ricc', 'is_vak', 'is_scopus', 'is_shadow'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color'], 'integer'],
            [['is_ricc', 'is_vak', 'is_scopus', 'is_shadow'], 'boolean'],
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
            'name' => 'Название',
            'is_ricc' => 'РИНЦ',
            'is_vak' => 'ВАК',
            'is_scopus' => 'SCOPUS',
            'is_shadow' => 'Гос.тайна',
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
     * Gets query for [[TblStaffPublications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblStaffPublications()
    {
        return $this->hasMany(TblStaffPublication::className(), ['id_science_magazine' => 'id']);
    }
}
