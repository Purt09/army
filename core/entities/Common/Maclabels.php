<?php

namespace core\entities\Common;

use Yii;

/**
 * This is the model class for table "maclabels".
 *
 * @property string $unique_id
 * @property string $last_update
 * @property int $id
 * @property string $name
 * @property string $mac_value
 *
 * @property Position[] $positions
 * @property TblIoObjects[] $tblIoObjects
 * @property Users[] $users
 */
class Maclabels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maclabels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'name', 'mac_value'], 'required'],
            [['unique_id', 'name', 'mac_value'], 'string'],
            [['last_update'], 'safe'],
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
            'name' => 'Name',
            'mac_value' => 'Mac Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasMany(Position::className(), ['id_maclabel' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblIoObjects()
    {
        return $this->hasMany(TblIoObjects::className(), ['id_maclabel' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id_maclabel' => 'id']);
    }
}
