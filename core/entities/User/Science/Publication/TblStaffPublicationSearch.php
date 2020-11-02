<?php

namespace core\entities\User\Science\Publication;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Science\Publication\TblStaffPublication;

/**
 * TblStaffPublicationSearch represents the model behind the search form of `core\entities\User\Science\Publication\TblStaffPublication`.
 */
class TblStaffPublicationSearch extends TblStaffPublication
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'publication_name', 'pages', 'out_data', 'expert_zakl_number', 'scan_title', 'scan_expert', 'scan_magazine', 'scan_content'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_staff', 'id_science_magazine'], 'integer'],
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
        $query = TblStaffPublication::find();

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
            'id_science_magazine' => $this->id_science_magazine,
            'out_data' => $this->out_data,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'publication_name', $this->publication_name])
            ->andFilterWhere(['ilike', 'pages', $this->pages])
            ->andFilterWhere(['ilike', 'expert_zakl_number', $this->expert_zakl_number])
            ->andFilterWhere(['ilike', 'scan_title', $this->scan_title])
            ->andFilterWhere(['ilike', 'scan_expert', $this->scan_expert])
            ->andFilterWhere(['ilike', 'scan_magazine', $this->scan_magazine])
            ->andFilterWhere(['ilike', 'scan_content', $this->scan_content]);

        return $dataProvider;
    }
}
