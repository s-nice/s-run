<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Plugin;

/**
 * PluginSearch represents the model behind the search form about `common\models\Plugin`.
 */
class PluginSearch extends Plugin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plugin_name', 'plugin_desc', 'demo_url', 'created_at', 'updated_at'], 'safe'],
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
        $query = Plugin::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'plugin_name', $this->plugin_name])
            ->andFilterWhere(['like', 'plugin_desc', $this->plugin_desc])
            ->andFilterWhere(['like', 'demo_url', $this->demo_url]);

        return $dataProvider;
    }
}
