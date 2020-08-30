<?php

namespace core\entities\News;

use Yii;

/**
 * This is the model class for table "yii_news".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $img
 * @property string|null $content
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $publications
 * @property bool $important
 *
 * @property NewsPublications $publications0
 */
class News extends \yii\db\ActiveRecord
{
    const STATUS_WAIT = 0;
    const STATUS_ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'created_at', 'updated_at'], 'required'],
            [['description', 'content', 'img'], 'string'],
            [['important'], 'boolean'],
            [['status', 'created_at', 'updated_at', 'publications'], 'default', 'value' => null],
            [['status', 'created_at', 'updated_at', 'publications'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['publications'], 'exist', 'skipOnError' => true, 'targetClass' => NewsPublications::className(), 'targetAttribute' => ['publications' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Краткое описание',
            'img' => 'Картинка',
            'content' => 'Содержание',
            'status' => 'Статус',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
            'publications' => 'Опубликовано',
            'important' => 'Опубликовать в шапке',
        ];
    }

    /**
     * Gets query for [[Publications0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPublications0()
    {
        return $this->hasOne(NewsPublications::className(), ['id' => 'publications']);
    }
}
