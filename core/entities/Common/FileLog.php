<?php

namespace core\entities\Common;

use Yii;
use core\entities\User\User;

/**
 * This is the model class for table "yii_file_log".
 *
 * @property int $id
 * @property int $user_id
 * @property int $created_at
 * @property string $type
 * @property string $description
 *
 * @property User $user
 */
class FileLog extends \yii\db\ActiveRecord
{
    public static function create($type, $desc)
    {
        $file = new FileLog();
        $file->user_id = \Yii::$app->user->id;
        $file->created_at = time();
        $file->type = $type;
        $file->description = $desc;
        return $file;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_file_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'type', 'description'], 'required'],
            [['user_id'], 'default', 'value' => null],
            [['user_id', 'created_at'], 'integer'],
            [['type', 'description'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'type' => 'Тип',
            'description' => 'Описание',
            'created_at' => 'Время'
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
