<?php

namespace core\entities\User\Science;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Science\TblStaffScienceGraduate;

/**
 * TblStaffScienceGraduateSearch represents the model behind the search form of `core\entities\User\Science\TblStaffScienceGraduate`.
 */
class TblStaffScienceGraduateSearch extends TblStaffScienceGraduate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'order_date', 'order_number', 'number', 'speciality_code', 'speciality'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_science_graduate', 'id_order_owner', 'id_staff'], 'integer'],
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
        $query = TblStaffScienceGraduate::find();

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
            'id_science_graduate' => $this->id_science_graduate,
            'id_order_owner' => $this->id_order_owner,
            'id_staff' => $this->id_staff,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number])
            ->andFilterWhere(['ilike', 'number', $this->number])
            ->andFilterWhere(['ilike', 'speciality_code', $this->speciality_code])
            ->andFilterWhere(['ilike', 'speciality', $this->speciality]);

        return $dataProvider;
    }
}
