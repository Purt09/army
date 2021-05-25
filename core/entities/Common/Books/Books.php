<?php

namespace core\entities\Common\Books;

use Yii;

/**
 * This is the model class for table "yii_books".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $author
 * @property int|null $pages
 * @property string|null $date
 * @property string|null $image
 * @property int $created_at
 *
 * @property BooksCategory $category
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'description', 'author', 'created_at'], 'required'],
            [['category_id', 'pages', 'created_at'], 'default', 'value' => null],
            [['category_id', 'pages', 'created_at'], 'integer'],
            [['date'], 'safe'],
            ['image', 'string'],
            [['title', 'description', 'author'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BooksCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Название',
            'description' => 'Описание',
            'author' => 'Автор',
            'pages' => 'Количество страниц',
            'date' => 'Дата выпуска',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(BooksCategory::className(), ['id' => 'category_id']);
    }
}
