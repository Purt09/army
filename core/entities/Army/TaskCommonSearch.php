<?php

namespace core\entities\Army;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\Army\TaskCommon;

/**
 * TaskCommonSearch represents the model behind the search form of `core\entities\Army\TaskCommon`.
 */
class TaskCommonSearch extends TaskCommon
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'order_date_finish', 'date_finish', 'created_at'], 'integer'],
            [['order_id', 'name', 'description'], 'safe'],
            [['is_complete_cafedra_51', 'is_complete_cafedra_52', 'is_complete_cafedra_53', 'is_complete_cafedra_55', 'is_complete_course_51', 'is_complete_course_52', 'is_complete_course_53', 'is_complete_course_54', 'is_complete_course_55', 'is_complete_manager_cv', 'is_complete_manager_vpr', 'is_complete_manager_teacher'], 'boolean'],
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
        $query = TaskCommon::find();

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
            'order_date_finish' => $this->order_date_finish,
            'date_finish' => $this->date_finish,
            'is_complete_cafedra_51' => $this->is_complete_cafedra_51,
            'is_complete_cafedra_52' => $this->is_complete_cafedra_52,
            'is_complete_cafedra_53' => $this->is_complete_cafedra_53,
            'is_complete_cafedra_55' => $this->is_complete_cafedra_55,
            'is_complete_course_51' => $this->is_complete_course_51,
            'is_complete_course_52' => $this->is_complete_course_52,
            'is_complete_course_53' => $this->is_complete_course_53,
            'is_complete_course_54' => $this->is_complete_course_54,
            'is_complete_course_55' => $this->is_complete_course_55,
            'is_complete_manager_cv' => $this->is_complete_manager_cv,
            'is_complete_manager_vpr' => $this->is_complete_manager_vpr,
            'is_complete_manager_teacher' => $this->is_complete_manager_teacher,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['ilike', 'order_id', $this->order_id])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
