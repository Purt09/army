<?php

namespace core\entities\Education;

use core\entities\User\TblMilUnit;
use core\entities\User\Vpr\ViewTypeTrait;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "yii_subject".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $unit_id
 * @property bool|null $special
 *
 * @property Evaluation[] $evaluations
 * @property TblMilUnit $unit
 */
class Subject extends \yii\db\ActiveRecord
{
    use ViewTypeTrait;
    public static function getList()
    {
        $subjects = self::find()->asArray()->all();

        $subjects = ArrayHelper::map($subjects, 'id', 'name');
        return array_filter($subjects);
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'unit_id'], 'required'],
            [['description'], 'string'],
            [['unit_id'], 'default', 'value' => null],
            [['unit_id'], 'integer'],
            [['special'], 'boolean'],
            [['name'], 'string', 'max' => 255],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['unit_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'unit_id' => 'Кафедра',
            'special' => 'Специальный?',
        ];
    }

    /**
     * Gets query for [[Evaluations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluations()
    {
        return $this->hasMany(Evaluation::className(), ['subject_id' => 'id']);
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
}
