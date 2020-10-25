<?php

namespace core\entities\Education;

use core\entities\User\User;

/**
 * This is the model class for table "yii_evaluation".
 *
 * @property int $id
 * @property int $result
 * @property int $semester_id
 * @property int $user_id
 * @property int $subject_id
 *
 * @property Semester $semester
 * @property Subject $subject
 * @property User $user
 */
class Evaluation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_evaluation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['result', 'semester_id', 'user_id', 'subject_id'], 'required'],
            [['result', 'semester_id', 'user_id', 'subject_id'], 'default', 'value' => null],
            [['result', 'semester_id', 'user_id', 'subject_id'], 'integer'],
            [['semester_id', 'user_id', 'subject_id'], 'unique', 'targetAttribute' => ['semester_id', 'user_id', 'subject_id']],
            [['semester_id'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['semester_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
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
            'result' => 'Оценка',
            'semester_id' => 'Семестр',
            'user_id' => 'Пользователь',
            'subject_id' => 'Предмет',
        ];
    }

    /**
     * Gets query for [[Semester]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
        return $this->hasOne(Semester::className(), ['id' => 'semester_id']);
    }

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
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
