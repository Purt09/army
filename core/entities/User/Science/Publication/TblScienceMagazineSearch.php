<?php

namespace core\entities\User\Science\Publication;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Science\Publication\TblScienceMagazine;

/**
 * TblScienceMagazineSearch represents the model behind the search form of `core\entities\User\Science\Publication\TblScienceMagazine`.
 */
class TblScienceMagazineSearch extends TblScienceMagazine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'name'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color'], 'integer'],
            [['is_ricc', 'is_vak', 'is_scopus', 'is_shadow'], 'boolean'],
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
        $query = TblScienceMagazine::find();

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
            'is_ricc' => $this->is_ricc,
            'is_vak' => $this->is_vak,
            'is_scopus' => $this->is_scopus,
            'is_shadow' => $this->is_shadow,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'name', $this->name]);

        return $dataProvider;
    }
}
