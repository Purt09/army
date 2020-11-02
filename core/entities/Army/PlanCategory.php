<?php

namespace core\entities\Army;

use core\entities\User\Vpr\ViewTypeTrait;
use Yii;

/**
 * This is the model class for table "yii_plan_category".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $alias
 *
 * @property Plan[] $plans
 */
class PlanCategory extends \yii\db\ActiveRecord
{
    use ViewTypeTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_plan_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['name', 'alias'], 'string', 'max' => 255],
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
            'text' => 'Описание',
            'alias' => 'Идентификатор'
        ];
    }

    /**
     * Gets query for [[Plans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['category_id' => 'id']);
    }
}
