<?php

namespace frontend\modules\fileManager\models;


use yii\base\Model;
use yii\helpers\Inflector;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $files;
    public $path;

    public function rules()
    {
        return [
            ['path', 'required'],
            ['files', 'file', 'skipOnEmpty' => false, 'maxFiles' => 0]
        ];
    }

    public function upload()
    {
        $extantion = stristr($this->files['0']->name, '.');
        $name = stristr($this->files['0']->name, '.', true);
        $this->files['0']->name = Inflector::slug($name, '_', false) . $extantion;

        $directory = Directory::createByPath($this->path);
        if ($this->validate()) {
            foreach ($this->files as $file) {
                $file->saveAs($directory->fullPath . $file->baseName . '.' . $file->extension);
            }

            return true;
        } else {
            return false;
        }
    }

    public function attributeLabels()
    {
        return [
            'files' => \Yii::t('filemanager', 'Files')
        ];
    }

    public function checkPath($attribute)
    {
        $directory = Directory::createByPath($this->$attribute);

        if (!$directory->isExist) {
            $this->addError($attribute, \Yii::t('filemanager', 'Is set to nonexistent path.'));
        } elseif (is_file($directory->fullPath)) {
            $this->addError($attribute, \Yii::t('filemanager', 'On the specified path there is a file.'));
        }
    }
}