<?php


namespace core\entities\User\Vpr;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;

trait ViewTypeTrait
{

    /**
     * Возвращает список типов
     *
     * @return array
     */
    public static function typeList(): array
    {
        $types = self::find()->all();
        $types = ArrayHelper::toArray($types);
        $types = ArrayHelper::map($types, 'id', 'name');
        return $types;
    }

    /**
     * Выводитт имя типа по ид
     *
     * @param $type
     * @return mixed|null
     * @throws \Exception
     */
    public static function typeName($type)
    {
        return ArrayHelper::getValue(self::typeList(), $type);
    }

    /**
     * Красивое оформление
     *
     * @param $type
     * @return string
     * @throws \Exception
     */
    public static function typeLabel($type)
    {
        return Html::tag('span', ArrayHelper::getValue(self::typeList(), $type), [
            'class' => 'label label-success',
        ]);
    }
}