<?php

namespace backend\forms\user;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\User\User;
use yii\db\ActiveQuery;
use yii\db\Query;
use yii\db\QueryBuilder;

/**
 * UserSearch represents the model behind the search form of `common\entities\User\User`.
 */
class UserSearch extends User
{
    public $date_from;
    public $date_to;
    public $rank_id;
    public $role_id;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'rank_id'], 'integer'],
            ['role_id', 'string'],
            [['username', 'auth_key', 'password_hash', 'verification_token'], 'safe'],
            [['date_from', 'date_to'], 'date', 'format' => 'php:Y-m-d']
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
        $query = User::find();


        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if ($this->rank_id != null)
            $query->joinWith(['base' => function ($q) {
                $q->where('id_rank = ' . $this->rank_id);
            }]);

        $this->filterByRole($query);
        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['>=', 'created_at', $this->date_from ? strtotime($this->date_from . ' 00:00:00') : null])
            ->andFilterWhere(['<=', 'created_at', $this->date_to ? strtotime($this->date_to . ' 23:59:59') : null]);


        return $dataProvider;
    }

    /** Ищет по роли
     * @param ActiveQuery $query
     */
    private function filterByRole(ActiveQuery $query)
    {
        if($this->role_id != null) {
            $user_ids = \Yii::$app->authManager->getUserIdsByRole($this->role_id);
            $query->andFilterWhere(['id' => $user_ids]);
        }
    }
}
