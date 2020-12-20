<?php

namespace core\entities\Common\Article;

use core\entities\User\TblMilUnit;

/**
 * This is the model class for table "yii_article".
 *
 * @property int $id
 * @property string $name
 * @property string|null $text
 * @property string|null $image
 * @property int $category_id
 * @property int $unit_id
 *
 * @property TblMilUnit $unit
 * @property ArticleCategories $category
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'unit_id'], 'required'],
            [['text'], 'string'],
            [['category_id', 'unit_id'], 'default', 'value' => null],
            [['category_id', 'unit_id'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblMilUnit::className(), 'targetAttribute' => ['unit_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArticleCategories::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'text' => 'Текст',
            'image' => 'Картинка',
            'category_id' => 'Категория',
            'unit_id' => 'Подразделение',
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
        return $this->hasOne(ArticleCategories::className(), ['id' => 'category_id']);
    }
}
