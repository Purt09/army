<?php

namespace core\entities\Common;

use core\entities\Education\Semester;
use core\entities\User\TblMilUnit;
use Yii;

/**
 * This is the model class for table "yii_sport".
 *
 * @property int $id
 * @property string $title
 * @property string|null $text
 * @property int $semester_id
 * @property int $unit_id
 * @property int $created_at
 * @property int|null $sort
 *
 * @property TblMilUnit $unit
 * @property Semester $semester
 */
class Sport extends \yii\db\ActiveRecord
{
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
        return 'yii_sport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'semester_id', 'unit_id', 'created_at'], 'required'],
            [['text'], 'string'],
            [['semester_id', 'unit_id', 'created_at', 'sort'], 'default', 'value' => null],
            [['semester_id', 'unit_id', 'created_at', 'sort'], 'integer'],
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
            'title' => 'Название',
            'text' => 'Краткое содержание',
            'semester_id' => 'Семестр',
            'unit_id' => 'Подразделение',
            'created_at' => 'Создано',
            'sort' => 'Сортировка',
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
