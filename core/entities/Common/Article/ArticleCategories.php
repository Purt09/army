<?php

namespace core\entities\Common\Article;

use core\entities\User\Vpr\ViewTypeTrait;
use Yii;

/**
 * This is the model class for table "yii_article_categories".
 *
 * @property int $id
 * @property string $name
 *
 * @property Article[] $articles
 */
class ArticleCategories extends \yii\db\ActiveRecord
{
    use ViewTypeTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_article_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Articles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }
}
