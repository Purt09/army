<?php

namespace core\entities\News;

use Yii;

/**
 * This is the model class for table "yii_news_publications".
 *
 * @property int $id
 * @property bool|null $main
 * @property bool|null $51_cafedra
 * @property bool|null $52_cafedra
 * @property bool|null $53_cafedra
 * @property bool|null $54_cafedra Это 55 кафедра, просто не хочу менять бд
 *
 * @property News[] $articles
 */
class NewsPublications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_news_publications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main', '51_cafedra', '52_cafedra', '53_cafedra', '54_cafedra'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main' => 'Опубликовать на главной факультета',
            '51_cafedra' => 'Опубликовать на 51 кафедре',
            '52_cafedra' => 'Опубликовать на 52 кафедре',
            '53_cafedra' => 'Опубликовать на 53 кафедре',
            '54_cafedra' => 'Опубликовать на 55 кафедре',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasOne(News::className(), ['publications' => 'id']);
    }
}
