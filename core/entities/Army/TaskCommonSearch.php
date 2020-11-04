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
<<<<<<< HEAD
=======
    public $date_from;
    public $date_to;

>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'order_date_finish', 'date_finish', 'created_at'], 'integer'],
            [['order_id', 'name', 'description'], 'safe'],
            [['is_complete_cafedra_51', 'is_complete_cafedra_52', 'is_complete_cafedra_53', 'is_complete_cafedra_55', 'is_complete_course_51', 'is_complete_course_52', 'is_complete_course_53', 'is_complete_course_54', 'is_complete_course_55', 'is_complete_manager_cv', 'is_complete_manager_vpr', 'is_complete_manager_teacher'], 'boolean'],
<<<<<<< HEAD
=======
            [['date_from', 'date_to'], 'date', 'format' => 'php:Y-m-d']
>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
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
<<<<<<< HEAD
=======
            'sort' => ['defaultOrder'=>'id DESC']
>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
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
<<<<<<< HEAD
=======
            ->andFilterWhere(['>=', 'order_date_finish', $this->date_from ? strtotime($this->date_from . ' 00:00:00') : null])
            ->andFilterWhere(['<=', 'order_date_finish', $this->date_to ? strtotime($this->date_to . ' 23:59:59') : null])
>>>>>>> 137fea962eb71a72fc6b334f36da150718de07db
            ->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
