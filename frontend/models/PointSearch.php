<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Point;

/**
 * PointSearch represents the model behind the search form about `frontend\models\Point`.
 */
class PointSearch extends Point
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'latitud', 'longitud', 'distrito', 'manzana', 'uv', 'barrio', 'direccion', 'telefono', 'numeropuerta', 'nombre', 'actividadeconomica', 'type'], 'safe'],
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
        $query = Point::find();

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
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'latitud', $this->latitud])
            ->andFilterWhere(['like', 'longitud', $this->longitud])
            ->andFilterWhere(['like', 'distrito', $this->distrito])
            ->andFilterWhere(['like', 'manzana', $this->manzana])
            ->andFilterWhere(['like', 'uv', $this->uv])
            ->andFilterWhere(['like', 'barrio', $this->barrio])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'numeropuerta', $this->numeropuerta])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'actividadeconomica', $this->actividadeconomica])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
