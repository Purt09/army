<?php

namespace backend\forms\user;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\UsersBase;

/**
 * UsersBaseSearch represents the model behind the search form of `core\entities\User\UsersBase`.
 */
class UsersBaseSearch extends UsersBase
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_rank', 'id_state', 'id_maclabel'], 'integer'],
            [['role_name', 'unique_id', 'last_update', 'lastname', 'firstname', 'sirname', 'fio', 'insert_time', 'email', 'acc_right_num', 'acc_right_date'], 'safe'],
            [['with_inheritance', 'is_connected'], 'boolean'],
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
        $query = UsersBase::find();

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
            'with_inheritance' => $this->with_inheritance,
            'last_update' => $this->last_update,
            'id_rank' => $this->id_rank,
            'id_state' => $this->id_state,
            'id_maclabel' => $this->id_maclabel,
            'insert_time' => $this->insert_time,
            'acc_right_date' => $this->acc_right_date,
            'is_connected' => $this->is_connected,
        ]);

        $query->andFilterWhere(['ilike', 'role_name', $this->role_name])
            ->andFilterWhere(['ilike', 'unique_id', $this->unique_id])
            ->andFilterWhere(['ilike', 'lastname', $this->lastname])
            ->andFilterWhere(['ilike', 'firstname', $this->firstname])
            ->andFilterWhere(['ilike', 'sirname', $this->sirname])
            ->andFilterWhere(['ilike', 'fio', $this->fio])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'acc_right_num', $this->acc_right_num]);

        return $dataProvider;
    }
}
