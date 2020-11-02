<?php


namespace core\helpers;


use core\entities\News\News;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class NewsHelpers
{

    /**
     * @return array
     */
    public static function statusList()
    {
        return [
            News::STATUS_WAIT => 'Не опубликовано',
            News::STATUS_ACTIVE => 'Опубликовано',
        ];
    }

    public static function statusName($status)
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    /**
     * @param $status
     * @return string
     */
    public static function statusLabel($status)
    {
        switch ($status) {
            case News::STATUS_WAIT:
                $class = 'label label-warning';
                break;
            case News::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-danger';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }
}