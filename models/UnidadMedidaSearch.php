<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UnidadMedida;

/**
 * UnidadMedidaSearch represents the model behind the search form of `app\models\UnidadMedida`.
 */
class UnidadMedidaSearch extends UnidadMedida
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUnidadMedida', 'idEmpresa'], 'integer'],
            [['descripcion', 'abreviatura', 'fechaCreacion'], 'safe'],
            [['estado', 'activo'], 'boolean'],
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
        $query = UnidadMedida::find();

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
            'idUnidadMedida' => $this->idUnidadMedida,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'abreviatura', $this->abreviatura]);

        return $dataProvider;
    }
}
