<?php


namespace common\components\column;


use yii\grid\DataColumn;
use yii\helpers\Html;

class ShowMoreColumn extends DataColumn
{
    /**
     * @var int
     */
    public $size = 30;
    /**
     * @var string
     */
    public $textMore = 'Больше';
    /**
     * @var string
     */
    public $textLow = 'Меньше';
    /**
     * @var int
     */
    public $maxWidth = 180;
    /**
     * @var int
     */
    public $maxHeight = 80;


    public function getDataCellValue($model, $key, $index)
    {
        $value = parent::getDataCellValue($model, $key, $index);
        if(strlen($value) <= $this->size)
            return Html::tag('span', $value, ['id' => 'show_more_full_id_' . $model->id]);
        $subValue = substr($value, 0, $this->size);
        $style = "
            #show_more_full_id_$model->id{
                display:none;
            }
            #show_more_sub_id_$model->id{
                display:block;
            }
        ";
        return Html::tag('style', $style) . Html::tag('span', $subValue, ['id' => 'show_more_sub_id_' . $model->id]) .
            Html::tag('span', $value, ['id' => 'show_more_full_id_' . $model->id, 'class' => 'show_more_full_text']) .
            Html::a($this->textMore, null, ['class' => 'show_more_a', 'id' => 'show_more_a_id_' . $model->id, 'onclick' => "test($model->id)"]);
    }

    protected function renderFooterCellContent()
    {
        $style = "
            .show_more_a{
                cursor: pointer;
            }
            .show_more_full_text {
                max-width: {$this->maxWidth}px;
                msx-height: {$this->maxHeight}px;
                overflow: auto;
            }
        ";
        $js = "
            function test(id) {
                element = document.getElementById('show_more_a_id_' + id);
                if(element.textContent == \"$this->textMore\") {
                    element = document.getElementById('show_more_full_id_' + id);
                    element.setAttribute(\"style\", \"display:block\");
                    element = document.getElementById('show_more_sub_id_' + id);
                    element.setAttribute(\"style\", \"display:none\");
                    element = document.getElementById('show_more_a_id_' + id);
                    element.textContent=\"$this->textLow\";
                } else {
                    element = document.getElementById('show_more_full_id_' + id);
                    element.setAttribute(\"style\", \"display:none\");
                    element = document.getElementById('show_more_sub_id_' + id);
                    element.setAttribute(\"style\", \"display:block\");
                    element = document.getElementById('show_more_a_id_' + id);
                    element.textContent=\"$this->textMore\";
                }
            }
        ";
        return  Html::tag('script', $js) . Html::tag('style', $style);
    }

}