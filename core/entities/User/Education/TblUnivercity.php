<?php

namespace core\entities\User\Education;

use core\entities\Common\TblCity;
use core\entities\Common\TblCountry;
use core\entities\Rubish\IoStates;
use Yii;

/**
 * This is the model class for table "tbl_univercity".
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
 * @property int|null $id_country Страна
 * @property int|null $id_city Город
 * @property string $name Название
 * @property string $title Официальное название
 * @property string|null $postcode Почтовый индекс
 * @property string|null $phone Телефон
 * @property string|null $fax Факс
 * @property string|null $email
 * @property string|null $note Информация
 *
 * @property TblEducation[] $tblEducations
 * @property IoStates $ioState
 * @property TblCity $city
 * @property TblCountry $country
 */
class TblUnivercity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_univercity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'id_io_state', 'uuid_t', 'rr_name', 'name', 'title'], 'required'],
            [['unique_id', 'uuid_t', 'rr_name', 'r_icon', 'name', 'title', 'postcode', 'phone', 'fax', 'email', 'note'], 'string'],
            [['last_update'], 'safe'],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_country', 'id_city'], 'default', 'value' => null],
            [['id_io_state', 'record_fill_color', 'record_text_color', 'id_country', 'id_city'], 'integer'],
            [['unique_id'], 'unique'],
            [['uuid_t'], 'unique'],
            [['id_io_state'], 'exist', 'skipOnError' => true, 'targetClass' => IoStates::className(), 'targetAttribute' => ['id_io_state' => 'id']],
            [['id_city'], 'exist', 'skipOnError' => true, 'targetClass' => TblCity::className(), 'targetAttribute' => ['id_city' => 'id']],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => TblCountry::className(), 'targetAttribute' => ['id_country' => 'id']],
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
            'id_country' => 'Id Country',
            'id_city' => 'Id City',
            'name' => 'Name',
            'title' => 'Title',
            'postcode' => 'Postcode',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'note' => 'Note',
        ];
    }

    /**
     * Gets query for [[TblEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblEducations()
    {
        return $this->hasMany(TblEducation::className(), ['id_univercity' => 'id']);
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
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(TblCity::className(), ['id' => 'id_city']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(TblCountry::className(), ['id' => 'id_country']);
    }
}
