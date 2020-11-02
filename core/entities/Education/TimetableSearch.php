<?php

namespace core\entities\Education;

use core\entities\Education\Timetable;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * TimetableSearch represents the model behind the search form of `core\entities\Education\Timetable`.
 */
class TimetableSearch extends Timetable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'semester_id', 'unit_id'], 'integer'],
            [['title'], 'safe'],
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
     * @param null $unit_id
     * @return ActiveDataProvider
     */
    public function search($params, $unit_id = null)
    {
        if(is_null($unit_id))
            $query = Timetable::find();
        else
            $query = Timetable::find()->where(['unit_id' => $unit_id])->andWhere(['summary' => true]);


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
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title]);

        return $dataProvider;
    }
}
