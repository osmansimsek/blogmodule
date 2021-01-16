<?php

namespace osmansimsek\blogmodule\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use osmansimsek\blogmodule\models\Blogdetails;

/**
 * BlogdetailsSearch represents the model behind the search form of `vendor\osmansimsek\blogmodule\src\models\Blogdetails`.
 */
class BlogdetailsSearch extends Blogdetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blogid'], 'integer'],
            [['blogtitle', 'blogheader', 'blogtext', 'blogauthorname', 'blogauthorlastname'], 'safe'],
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
        $query = Blogdetails::find();

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
            'blogid' => $this->blogid,
        ]);

        $query->andFilterWhere(['like', 'blogtitle', $this->blogtitle])
            ->andFilterWhere(['like', 'blogheader', $this->blogheader])
            ->andFilterWhere(['like', 'blogtext', $this->blogtext])
            ->andFilterWhere(['like', 'blogauthorname', $this->blogauthorname])
            ->andFilterWhere(['like', 'blogauthorlastname', $this->blogauthorlastname]);

        return $dataProvider;
    }
}
