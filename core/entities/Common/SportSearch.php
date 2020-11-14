<?php

namespace core\entities\Common;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\Common\Sport;

/**
 * SportSearch represents the model behind the search form of `core\entities\Common\Sport`.
 */
class SportSearch extends Sport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'semester_id', 'unit_id', 'created_at', 'sort'], 'integer'],
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
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sport::find();

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
            'semester_id' => $this->semester_id,
            'unit_id' => $this->unit_id,
            'created_at' => $this->created_at,
            'sort' => $this->sort,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'text', $this->text]);

        return $dataProvider;
    }
}
