<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Impuesto;

/**
 * ImpuestoSearch represents the model behind the search form of `app\models\Impuesto`.
 */
class ImpuestoSearch extends Impuesto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idImpuesto', 'idEmpresa'], 'integer'],
            [['descripcion', 'fechaCreacion'], 'safe'],
            [['monto'], 'number'],
            [['esRetencion', 'esCompra', 'esVenta', 'esPorcentaje', 'esLibroImpuesto', 'estado', 'activo'], 'boolean'],
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
        $query = Impuesto::find();

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
            'idImpuesto' => $this->idImpuesto,
            'monto' => $this->monto,
            'esRetencion' => $this->esRetencion,
            'esCompra' => $this->esCompra,
            'esVenta' => $this->esVenta,
            'esPorcentaje' => $this->esPorcentaje,
            'esLibroImpuesto' => $this->esLibroImpuesto,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
