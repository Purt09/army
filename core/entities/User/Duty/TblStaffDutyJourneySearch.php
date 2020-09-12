<?php

namespace core\entities\User\Duty;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Duty\TblStaffDutyJourney;

/**
 * TblStaffDutyJourneySearch represents the model behind the search form of `core\entities\User\Duty\TblStaffDutyJourney`.
 */
class TblStaffDutyJourneySearch extends TblStaffDutyJourney
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'date_start', 'date_end', 'order_date', 'order_number', 'organization'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_staff', 'id_city', 'id_order_owner'], 'integer'],
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
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblStaffDutyJourney::find();

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
            'id_staff' => $this->id_staff,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'id_city' => $this->id_city,
            'id_order_owner' => $this->id_order_owner,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number])
            ->andFilterWhere(['ilike', 'organization', $this->organization]);

        return $dataProvider;
    }
}
