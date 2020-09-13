<?php

namespace core\entities\Common;

use Yii;
use yii\helpers\Inflector;
use core\entities\User\User;

/**
 * This is the model class for table "yii_file".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $name
 * @property int|null $user_id
 * @property int|null $delete_id
 * @property int|null $parent_id
 * @property string|null $path
 * @property string|null $type
 * @property boolean $block
 * @property int|null $create_at
 * @property int|null $size
 *
 *
 * @property User $user
 */
class File extends \yii\db\ActiveRecord
{
    private static $link = '';

    const TYPE_FILE = 'file';
    const TYPE_DIR = 'directory';

    public static function createDirectory(string $title, string $path)
    {
        $file = new self();
        $file->title = $title;
        $file->name = Inflector::slug($title, '_');
        if ($path != '/')
            $path .= '/';
        $file->path = $path . $file->name;
        $file->size = 0;
        $file->type = self::TYPE_DIR;
        return self::create($file);
    }

    public static function createSubDirectory(string $title, string $path)
    {
        $file = new self();
        $file->title = $title;
        $file->name = Inflector::slug($title, '_');
        if (substr($path, 0, -1) != "/") {
            $path .= "/" . $file->name;
        }
        $file->size = 0;
        $file->type = self::TYPE_DIR;
        return self::create($file);
    }

    public static function createFile(string $title, string $path, int $size)
    {
        $file = new self();
        $file->title = $title;
        $extantion = stristr($title, '.');
        $name = stristr($title, '.', true);
        $file->name = Inflector::slug($name, '_', false) . $extantion;
        if ($path != '/')
            $path .= '/';
        $file->path = $path . $file->name;
        $file->size = $size;
        $file->type = self::TYPE_FILE;
        return self::create($file);
    }

    public function deleteFile()
    {
        $this->delete_id = Yii::$app->user->id;
        if (!$this->save())
            throw new \RuntimeException('Удаление не удалось');
    }

    private static function create(self $file)
    {
        $file->user_id = Yii::$app->user->id;
        $file->create_at = time();
        $file->block = false;
        return $file;
    }

    public static function getByPath($id)
    {
        $files = self::find()->where(['delete_id' => null])
            ->andWhere(['parent_id' => $id])
            ->with('user.base')->asArray()->all();

        $results = [];
        if ($id != 0) {
            $parent = self::findOne($id);
            array_push($results, [
                'title' => "<i class='fa fa-reply-all'> </i> Назад",
                'block' => true,
                'parent_id' => $parent->parent_id,
                'type' => 'back'
            ]);
        }
        foreach ($files as $file)
            array_push($results, $file);

        return $results;
    }

    public static function getBreadCrumbs($id)
    {
        if ($id == 0)
            return 'Главная';
        $file = self::findOne($id);
        self::$link = " <a href=\"index?id={$file->id}\">{$file->title}</a> >" . self::$link;
        if ($file->parent_id != 0)
            self::getBreadCrumbs($file->parent_id);
        self::$link = substr(self::$link, 0, -1);
        return self::$link;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'create_at', 'size'], 'default', 'value' => null],
            [['user_id', 'create_at', 'size', 'delete_id', 'parent_id'], 'integer'],
            [['block'], 'boolean'],
            [['title', 'name', 'path', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'name' => 'Name',
            'user_id' => 'User ID',
            'path' => 'Path',
            'create_at' => 'Create At',
            'size' => 'Size',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
