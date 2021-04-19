<?php

namespace core\entities\Education;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\Education\Evaluation;

/**
 * EvaluationSearch represents the model behind the search form of `core\entities\Education\Evaluation`.
 */
class EvaluationSearch extends Evaluation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'result', 'semester_id', 'user_id', 'subject_id'], 'integer'],
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
        $query = Evaluation::find();

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
            'result' => $this->result,
            'semester_id' => $this->semester_id,
            'user_id' => $this->user_id,
            'subject_id' => $this->subject_id,
        ])->orderBy('id DESC');

        return $dataProvider;
    }
}
