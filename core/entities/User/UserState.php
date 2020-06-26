<?php

namespace core\entities\User;

use Yii;

/**
 * This is the model class for table "user_state".
 *
 * @property string $unique_id
 * @property string $last_update
 * @property int $id
 * @property string $name
 * @property string $short_name
 *
 * @property Users[] $users
 */
class UserState extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_state';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'name', 'short_name'], 'required'],
            [['unique_id', 'name', 'short_name'], 'string'],
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
            'short_name' => 'Short Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id_state' => 'id']);
    }
}
