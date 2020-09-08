<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Instancia;

/**
 * InstanciaSearch represents the model behind the search form of `backend\models\Instancia`.
 */
class InstanciaSearch extends Instancia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idInstancia', 'idPadre', 'idEmpresa'], 'integer'],
            [['descripcion', 'fechaCreacion', 'orden'], 'safe'],
            [['esServicio', 'esCompuesto', 'estado', 'activo'], 'boolean'],
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
        $query = Instancia::find();

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
            'idInstancia' => $this->idInstancia,
            'idPadre' => $this->idPadre,
            'fechaCreacion' => $this->fechaCreacion,
            'esServicio' => $this->esServicio,
            'esCompuesto' => $this->esCompuesto,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'orden', $this->orden]);

        return $dataProvider;
    }
}
