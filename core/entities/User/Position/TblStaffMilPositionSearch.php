<?php

namespace core\entities\User\Position;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Position\TblStaffMilPosition;

/**
 * TblStaffMilPositionSearch represents the model behind the search form of `core\entities\User\Position\TblStaffMilPosition`.
 */
class TblStaffMilPositionSearch extends TblStaffMilPosition
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'name', 'vus', 'order_date', 'order_number'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_mil_unit', 'id_mil_position', 'tarif', 'id_staff', 'id_order_owner'], 'integer'],
            [['is_military'], 'boolean'],
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
        $query = TblStaffMilPosition::find();

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
            'id_mil_unit' => $this->id_mil_unit,
            'id_mil_position' => $this->id_mil_position,
            'tarif' => $this->tarif,
            'is_military' => $this->is_military,
            'id_staff' => $this->id_staff,
            'id_order_owner' => $this->id_order_owner,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'vus', $this->vus])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number]);

        return $dataProvider;
    }
}
