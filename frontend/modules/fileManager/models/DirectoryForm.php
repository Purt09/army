<?php
/**
 * Created by PhpStorm.
 * User: Stepan Ipatyev
 * Date: 19.01.18
 * Time: 15:03
 */

namespace frontend\modules\fileManager\models;

use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\helpers\Inflector;

/**
 * Class DirectoryForm
 * @package app\modules\fileManager\models
 * @property Directory $directory
 */
class DirectoryForm extends Model
{
    /** @var string */
    public $name;
    /** @var string */
    public $oldName;
    /** @var string */
    public $path;
    /** @var bool */
    public $isNew = true;

    public function rules()
    {
        return [
            [['path'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('filemanager', 'Name'),
        ];
    }

    /**
     * @throws \yii\base\Exception
     * @throws \yii\base\ErrorException
     */
    public function save()
    {
        $this->name = Inflector::slug($this->name, '_');
        if ($this->oldName) {
            if ($this->oldName != $this->name) {
                FileHelper::copyDirectory($this->directory->fullPath . $this->oldName, $this->directory->fullPath . $this->name);
                FileHelper::removeDirectory($this->directory->fullPath . $this->oldName);
            }
            return;
        }
        try {
            FileHelper::createDirectory($this->directory->fullPath . $this->name);
        } catch (\Exception $e){

        } finally {
            FileHelper::createSubDirectory($this->directory->fullPath . $this->name);
        }


    }

    /**
     * @return Directory
     */
    public function getDirectory()
    {
        return Directory::createByPath($this->path);
    }
}