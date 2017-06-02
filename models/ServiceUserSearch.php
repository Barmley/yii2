<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ServiceUser;

/**
 * ServiceUserSearch represents the model behind the search form about `app\models\ServiceUser`.
 */
class ServiceUserSearch extends ServiceUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'UStatus', 'UIsAdmin'], 'integer'],
            [['Uname', 'UEmail', 'UPass', 'UCity'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ServiceUser::find();

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
            'UserId' => $this->UserId,
            'UStatus' => $this->UStatus,
            'UIsAdmin' => $this->UIsAdmin,
        ]);

        $query->andFilterWhere(['like', 'Uname', $this->Uname])
            ->andFilterWhere(['like', 'UEmail', $this->UEmail])
            ->andFilterWhere(['like', 'UPass', $this->UPass])
            ->andFilterWhere(['like', 'UCity', $this->UCity]);

        return $dataProvider;
    }
}
