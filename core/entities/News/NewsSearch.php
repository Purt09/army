<?php

namespace core\entities\News;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use core\entities\News\News;
use core\repositories\news\NewsRepository;
use yii\helpers\ArrayHelper;

/**
 * NewsSearch represents the model behind the search form of `core\entities\News\News`.
 */
class NewsSearch extends News
{
  private $news;
  public function __construct()
  {
      $this->news = new NewsRepository();
  }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at', 'publications'], 'integer'],
            [['title', 'description', 'img', 'content'], 'safe'],
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
     * @param string $type
     *
     * @return ActiveDataProvider
     */
    public function search($params, string $type = 'main')
    {
        $newsPublications = $this->news->getNewsByType($type)->all();
        $ids = [];
        foreach ($newsPublications as $key => $item)
          array_push($ids,$item->id);


        $query = News::find()->where(['publications' => $ids]);

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'publications' => $this->publications,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'img', $this->img])
            ->andFilterWhere(['ilike', 'content', $this->content]);

        return $dataProvider;
    }
}
