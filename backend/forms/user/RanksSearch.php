<?php

namespace backend\forms\user;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\Ranks;

/**
 * RanksSearch represents the model behind the search form of `core\entities\User\Ranks`.
 */
class RanksSearch extends Ranks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'last_update', 'name', 'short_name', 'code'], 'safe'],
            [['id'], 'integer'],
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
        $query = Ranks::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'short_name', $this->short_name])
            ->andFilterWhere(['ilike', 'code', $this->code]);

        return $dataProvider;
    }
}
