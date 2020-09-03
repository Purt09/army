<?php

namespace core\entities\User\Vpr;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Vpr\TblStaffPenalty;

/**
 * TblStaffPenaltySearch represents the model behind the search form of `core\entities\User\Vpr\TblStaffPenalty`.
 */
class TblStaffPenaltySearch extends TblStaffPenalty
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'order_date', 'order_number', 'notes'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_penalty_type', 'id_staff', 'id_order_owner', 'id_finish_penalty'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * @param $params
     * @param null $staff_id
     * @return ActiveDataProvider
     */
    public function search($params, $staff_id = null)
    {
        if(isset($staff_id))
            $query = TblStaffPenalty::find()->where(['id_staff' => $staff_id]);
        else
            $query = TblStaffPenalty::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'last_update' => $this->last_update,
            'id' => $this->id,
            'id_io_state' => $this->id_io_state,
            'record_fill_color' => $this->record_fill_color,
            'record_text_color' => $this->record_text_color,
            'id_penalty_type' => $this->id_penalty_type,
            'id_staff' => $this->id_staff,
            'id_order_owner' => $this->id_order_owner,
            'order_date' => $this->order_date,
            'id_finish_penalty' => $this->id_finish_penalty,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number])
            ->andFilterWhere(['ilike', 'notes', $this->notes]);

        return $dataProvider;
    }
}
