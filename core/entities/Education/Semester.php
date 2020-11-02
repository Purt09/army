<?php

namespace core\entities\Education;

use core\entities\traits\ViewTitleTrait;

/**
 * This is the model class for table "yii_semester".
 *
 * @property int $id
 * @property string $year
 * @property int $season
 * @property string $title
 *
 * @property Timetable[] $timetables
 */
class Semester extends \yii\db\ActiveRecord
{
    use ViewTitleTrait;

    const SEASON_AUTUMN = 1;
    const SEASON_SPRING = 2;

    public static function getSeasons()
    {
        return [
            self::SEASON_AUTUMN => 'Осень',
            self::SEASON_SPRING => 'Весна',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'season', 'title'], 'required'],
            [['season'], 'default', 'value' => null],
            [['season', 'year'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Год',
            'season' => 'Сезон',
            'title' => 'Название',
        ];
    }

    /**
     * Gets query for [[TblStaffMilPositions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimetables()
    {
        return $this->hasMany(Timetable::className(), ['unit_id' => 'id']);
    }

}
