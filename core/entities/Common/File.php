<?php

namespace core\entities\Common;

use Yii;
use yii\helpers\Inflector;

/**
 * This is the model class for table "yii_file".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $name
 * @property int|null $user_id
 * @property int|null $delete_id
 * @property string|null $path
 * @property string|null $type
 * @property boolean $block
 * @property int|null $create_at
 * @property int|null $size
 */
class File extends \yii\db\ActiveRecord
{
    const TYPE_FILE = 'file';
    const TYPE_DIR = 'directory';

    public static function createDirectory(string $title, string $path)
    {
        $file = new self();
        $file->title = $title;
        $file->name = Inflector::slug($title, '_');
        if($path != '\\')
            $path .= '\\';
        $file->path = $path . $file->name;
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
        if($path != '\\')
            $path .= '\\';
        $file->path = $path . $file->name;
        $file->size = $size;
        $file->type = self::TYPE_FILE;
        return self::create($file);
//        if(!$file->save())
//            throw new \RuntimeException('Сохранение файла не удалось');
    }

    public function deleteFile()
    {
        $this->delete_id = Yii::$app->user->id;
        if(!$this->save())
            throw new \RuntimeException('Удаление не удалось');
    }

    private static function create(self $file)
    {
        $file->user_id = Yii::$app->user->id;
        $file->create_at = time();
        $file->block = false;
        return $file;
    }

    public static function getByPath($path)
    {
        $files = self::find()->where(['delete_id' => null])->asArray()->all();
        $results = [];
        if($path != '\\')
            array_push($results, [
                'title' => "<i class='fa fa-reply-all'> </i> Назад",
                'block' => true,
                'path' => '\\' . explode('\\', $path)[count(explode('\\', $path)) - 2],
                'type' => 'back'
            ]);
        foreach ($files as $file){
            $path_file = explode('\\', $file['path']);
            if(($path == '\\' || $path == null) && count($path_file) == 2) {
                array_push($results, $file);
                continue;
            }
            array_pop($path_file);
            if($path_file == explode('\\', $path)) {
                array_push($results, $file);
                continue;
            }
        }
        return $results;
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
            [['user_id', 'create_at', 'size', 'delete_id'], 'integer'],
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
}
