<?php

namespace core\entities\User\MilitaryRank;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * TblStaffMilitaryRankSearch represents the model behind the search form of `core\entities\User\MilitaryRank\TblStaffMilitaryRank`.
 */
class TblStaffMilitaryRankSearch extends TblStaffMilitaryRank
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'uuid_t', 'rr_name', 'r_icon', 'order_date', 'order_number'], 'safe'],
            [['id', 'id_io_state', 'record_fill_color', 'record_text_color', 'id_military_rank', 'id_order_owner', 'id_staff'], 'integer'],
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
        if($staff_id != null)
            $query = TblStaffMilitaryRank::find()->where(['id_staff' => $staff_id]);
        else
            $query = TblStaffMilitaryRank::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' =>
                ['order_date' => SORT_DESC]
            ],
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
            'id_military_rank' => $this->id_military_rank,
            'id_order_owner' => $this->id_order_owner,
            'id_staff' => $this->id_staff,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'uuid_t', $this->uuid_t])
            ->andFilterWhere(['ilike', 'rr_name', $this->rr_name])
            ->andFilterWhere(['ilike', 'r_icon', $this->r_icon])
            ->andFilterWhere(['ilike', 'order_number', $this->order_number]);

        return $dataProvider;
    }
}
