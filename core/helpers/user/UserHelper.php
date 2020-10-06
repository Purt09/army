<?php

namespace core\helpers\user;

use core\entities\User\TblStaff;
use core\entities\User\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class UserHelper
{
    /**
     * @return array
     */
    public static function statusList()
    {
        return [
            User::STATUS_WAIT => 'Wait',
            User::STATUS_ACTIVE => 'Active',
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
            case User::STATUS_WAIT:
                $class = 'label label-default';
                break;
            case User::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-danger';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }

    /**
     * @param TblStaff $staff
     * @return string
     */
    public static function getScienceGraduates(TblStaff $user)
    {
        $result = '';
        if (isset($user->tblStaffScienceGraduates)) {
            $result .= '<li class="list-group-item">';
            foreach ($user->tblStaffScienceGraduates as $scienceGraduate) {
                $result .= '<b>Ученая степень: </b>' . $scienceGraduate->scienceGraduate->name . ' ';
//                $result .= '<i class="fa fa-info-circle link"  data-toggle="modal" data-target="#modal-default-' . $scienceGraduate->id . '"></i>';
//                $result .= '<div class="modal fade" id="modal-default-' . $scienceGraduate->id . '">';
//                $result .= '<div class="modal-dialog">
//                                        <div class="modal-content">
//                                            <div class="modal-body">';
//                $result .= ' <b>Степень: </b>' . $scienceGraduate->scienceGraduate->name . '<br>';
//                $result .= ' <b>Приказ подписал: </b>' . $scienceGraduate->orderOwner->name . '<br>';
//                $result .= ' <b>Дата приказа: </b> ' . $scienceGraduate->order_date . '<br>';
//                $result .= ' <b>Номер приказа: </b> ' . $scienceGraduate->order_number . '<br>';
//                $result .= ' <b>Номер: </b> ' . $scienceGraduate->number . '<br>';
//                $result .= ' <b>Специальный код: </b>' . $scienceGraduate->speciality_code . '<br>';
//                $result .= ' <b>Специалитет: </b> ' . $scienceGraduate->speciality . '<br>';
//                $result .= '</div></div></div></div><br> ';
            }
            $result .= '</li>';
        }
        return $result;
    }

    /**
     * @param TblStaff $staff
     * @return string
     */
    public static function getScienceRanks(TblStaff $user)
    {
        $result = '';
        if (isset($user->tblStaffScienceRanks)) {
            $result .= '<li class="list-group-item">';
            foreach ($user->tblStaffScienceRanks as $scienceRank) {
                $result .= '<b>Ученое звание: </b>' . $scienceRank->scienceRank->name . ' ';
//                $result .= '<i class="fa fa-info-circle link"  data-toggle="modal" data-target="#modal-default-' . $scienceRank->id . '"></i>';
//                $result .= '<div class="modal fade" id="modal-default-' . $scienceRank->id . '">';
//                $result .= '<div class="modal-dialog">
//                                        <div class="modal-content">
//                                            <div class="modal-body">';
//                $result .= ' <b>Степень: </b>' . $scienceRank->scienceRank->name . '<br>';
//                $result .= ' <b>Приказ подписал: </b>' . $scienceRank->orderOwner->name . '<br>';
//                $result .= ' <b>Дата приказа: </b> ' . $scienceRank->order_date . '<br>';
//                $result .= ' <b>Номер приказа: </b> ' . $scienceRank->order_number . '<br>';
//                $result .= ' <b>Номер: </b> ' . $scienceRank->number . '<br>';
//                $result .= ' <b>Специальный код: </b>' . $scienceRank->speciality_code . '<br>';
//                $result .= ' <b>Специалитет: </b> ' . $scienceRank->speciality . '<br>';
//                $result .= '</div></div></div></div><br> ';
            }
            $result .= '</li>';
        }
        return $result;
    }
}