<?php

namespace core\entities\Army;

use core\entities\Army\Plan;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * PlanSearch represents the model behind the search form of `core\entities\Army\Plan`.
 */
class PlanSearch extends Plan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'unit_id', 'created_at', 'date', 'sort'], 'integer'],
            [['title', 'text'], 'safe'],
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
     * @param int|null $category_id
     * @return ActiveDataProvider
     */
    public function search($params, $category_id = null)
    {
        if(is_null($category_id))
            $query = Plan::find();
        else {
            $query = Plan::find()->where(['category_id' => $category_id]);
        }

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
            'id' => $this->id,
            'category_id' => $this->category_id,
            'unit_id' => $this->unit_id,
            'created_at' => $this->created_at,
            'date' => $this->date,
            'sort' => $this->sort,
        ])->orderBy('id DESC');

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'text', $this->text]);

        return $dataProvider;
    }
}
