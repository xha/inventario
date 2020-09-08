<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marca;

/**
 * MarcaSearch represents the model behind the search form of `backend\models\Marca`.
 */
class MarcaSearch extends Marca
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idMarca', 'idEmpresa'], 'integer'],
            [['descripcion', 'fechaCreacion'], 'safe'],
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
        $query = Marca::find();

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
            'idMarca' => $this->idMarca,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
