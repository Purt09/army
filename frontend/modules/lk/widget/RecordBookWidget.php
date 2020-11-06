<?php


namespace frontend\modules\lk\widget;


use core\entities\Education\Evaluation;
use core\entities\Education\Semester;
use core\entities\User\TblStaff;
use yii\base\Widget;

class RecordBookWidget extends Widget
{
    /**
     * @var Semester
     */
    public $semester;

    /**
     * @var TblStaff
     */
    public $staff;

    public function run()
    {
        $evaluations = Evaluation::find()->where(['semester_id' => $this->semester->id])
            ->andWhere(['user_id' => $this->staff->user->id])->all();

        return $this->render('record-book', [
            'semester' => $this->semester,
            'staff' => $this->staff
        ]);
    }
}