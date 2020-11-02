<?php

namespace core\entities\Army;

use Yii;

/**
 * This is the model class for table "yii_task_common".
 *
 * @property int $id
 * @property string $order_id
 * @property int $order_date_finish
 * @property int $date_finish
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $is_complete_cafedra_51
 * @property bool|null $is_complete_cafedra_52
 * @property bool|null $is_complete_cafedra_53
 * @property bool|null $is_complete_cafedra_55
 * @property bool|null $is_complete_course_51
 * @property bool|null $is_complete_course_52
 * @property bool|null $is_complete_course_53
 * @property bool|null $is_complete_course_54
 * @property bool|null $is_complete_course_55
 * @property bool|null $is_complete_manager_cv
 * @property bool|null $is_complete_manager_vpr
 * @property bool|null $is_complete_manager_teacher
 * @property int $created_at
 */
class TaskCommon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_task_common';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'order_date_finish', 'date_finish', 'created_at'], 'required'],
            [['order_date_finish', 'date_finish', 'created_at'], 'default', 'value' => null],
            [['order_date_finish', 'date_finish', 'created_at'], 'safe'],
            [['description'], 'string'],
            [['is_complete_cafedra_51', 'is_complete_cafedra_52', 'is_complete_cafedra_53', 'is_complete_cafedra_55', 'is_complete_course_51', 'is_complete_course_52', 'is_complete_course_53', 'is_complete_course_54', 'is_complete_course_55', 'is_complete_manager_cv', 'is_complete_manager_vpr', 'is_complete_manager_teacher'], 'boolean'],
            [['order_id', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Номер приказа',
            'order_date_finish' => 'Дата приказа',
            'date_finish' => 'Дата исполнения',
            'name' => 'Название',
            'description' => 'Описание',
            'is_complete_cafedra_51' => 'Кафедра 51',
            'is_complete_cafedra_52' => 'Кафедра 52',
            'is_complete_cafedra_53' => 'Кафедра 53',
            'is_complete_cafedra_55' => 'Кафедра 55',
            'is_complete_course_51' => 'Курс 51',
            'is_complete_course_52' => 'Курс 52',
            'is_complete_course_53' => 'Курс 53',
            'is_complete_course_54' => 'Курс 54',
            'is_complete_course_55' => 'Курс 55',
            'is_complete_manager_cv' => 'СВ',
            'is_complete_manager_vpr' => 'ВПР',
            'is_complete_manager_teacher' => 'Учебная часть',
            'created_at' => 'Дата опубликования',
        ];
    }
}
