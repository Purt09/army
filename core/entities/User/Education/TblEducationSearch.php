<?php

namespace core\entities\User\Education;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Education\TblEducation;

/**
 * TblEducationSearch represents the model behind the search form of `core\entities\User\Education\TblEducation`.
 */
class TblEducationSearch extends TblEducation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'datestart', 'dateend', 'diplom_number'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_edication_level', 'id_univercity', 'id_staff'], 'integer'],
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
        $query = TblEducation::find();

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
            'id_edication_level' => $this->id_edication_level,
            'id_univercity' => $this->id_univercity,
            'id_staff' => $this->id_staff,
            'datestart' => $this->datestart,
            'dateend' => $this->dateend,
            'is_military' => $this->is_military,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'diplom_number', $this->diplom_number]);

        return $dataProvider;
    }
}
