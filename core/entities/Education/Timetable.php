<?php

namespace core\entities\Education;

use core\entities\traits\ViewTitleTrait;
use core\entities\User\TblMilUnit;
use Yii;

/**
 * This is the model class for table "yii_timetable".
 *
 * @property int $id
 * @property int $semester_id
 * @property int $unit_id
 * @property string $title
 * @property boolean $summary
 *
 * @property TblMilUnit $unit
 * @property Semester $semester
 */
class Timetable extends \yii\db\ActiveRecord
{
    use ViewTitleTrait;

    public function behaviors()
    {
        return [
            [
                'class' => \pantera\media\behaviors\MediaUploadBehavior::className(),
                'buckets' => [
                    'mediaMain' => [],
                    'mediaOther' => [
                        'multiple' => false,
                    ],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_timetable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester_id', 'unit_id', 'title'], 'required'],
            [['semester_id', 'unit_id'], 'default', 'value' => null],
            [['semester_id', 'unit_id'], 'integer'],
            ['summary', 'boolean'],
            [['title'], 'string', 'max' => 255],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['unit_id' => 'id']],
            [['semester_id'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['semester_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'semester_id' => 'Семестр',
            'unit_id' => 'Подразделение',
            'title' => 'Название',
            'summary' => 'Сводное? '
        ];
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(TblMilUnit::className(), ['id' => 'unit_id']);
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
}
