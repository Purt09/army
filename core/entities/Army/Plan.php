<?php

namespace core\entities\Army;

use core\entities\User\TblMilUnit;
use Yii;

/**
 * This is the model class for table "yii_plan".
 *
 * @property int $id
 * @property string $title
 * @property string|null $text
 * @property int $category_id
 * @property int $unit_id
 * @property int $created_at
 * @property mixed $date
 * @property int|null $sort
 * @property string $img
 *
 * @property TblMilUnit $unit
 * @property PlanCategory $category
 */
class Plan extends \yii\db\ActiveRecord
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
        return 'yii_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'unit_id', 'created_at'], 'required'],
            [['text', 'img'], 'string'],
            [['category_id', 'unit_id', 'created_at', 'sort'], 'default', 'value' => null],
            [['category_id', 'unit_id', 'created_at', 'sort'], 'integer'],
            ['date', 'safe'],
            [['title'], 'string', 'max' => 255],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['unit_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PlanCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'text' => 'Описание/Задачи',
            'category_id' => 'Категория',
            'unit_id' => 'Подразделение',
            'created_at' => 'Дата создания',
            'date' => 'Дата',
            'sort' => 'Сортировка',
            'img' => 'Изображение'
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
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(PlanCategory::className(), ['id' => 'category_id']);
    }
}
