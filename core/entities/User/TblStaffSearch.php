<?php

namespace core\entities\User;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\TblStaff;

/**
 * TblStaffSearch represents the model behind the search form of `core\entities\User\TblStaff`.
 */
class TblStaffSearch extends TblStaff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'fio', 'lastname', 'firstname', 'sirname', 'passport_number', 'email', 'mobile_phone', 'wife_mobile_phone', 'home_phone', 'work_phone', 'address', 'birthday_date', 'udl_number', 'foto'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_current_mil_rank', 'id_current_mil_position'], 'integer'],
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
        $query = TblStaff::find();

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
            'id_current_mil_rank' => $this->id_current_mil_rank,
            'id_current_mil_position' => $this->id_current_mil_position,
            'birthday_date' => $this->birthday_date,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'fio', $this->fio])
            ->andFilterWhere(['ilike', 'lastname', $this->lastname])
            ->andFilterWhere(['ilike', 'firstname', $this->firstname])
            ->andFilterWhere(['ilike', 'sirname', $this->sirname])
            ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'mobile_phone', $this->mobile_phone])
            ->andFilterWhere(['ilike', 'wife_mobile_phone', $this->wife_mobile_phone])
            ->andFilterWhere(['ilike', 'home_phone', $this->home_phone])
            ->andFilterWhere(['ilike', 'work_phone', $this->work_phone])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'udl_number', $this->udl_number])
            ->andFilterWhere(['ilike', 'foto', $this->foto]);

        return $dataProvider;
    }
}
