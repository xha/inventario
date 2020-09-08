<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form of `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idItem', 'idInstancia', 'idMarca', 'idUnidadMedida', 'idEmpresa'], 'integer'],
            [['codigo', 'descripcion', 'ruta', 'fechaCreacion'], 'safe'],
            [['costo', 'existencia', 'minimo', 'maximo'], 'number'],
            [['esExento', 'esServicio', 'estado', 'activo'], 'boolean'],
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
        $query = Item::find();

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
            'idItem' => $this->idItem,
            'idInstancia' => $this->idInstancia,
            'idMarca' => $this->idMarca,
            'idUnidadMedida' => $this->idUnidadMedida,
            'costo' => $this->costo,
            'existencia' => $this->existencia,
            'minimo' => $this->minimo,
            'maximo' => $this->maximo,
            'esExento' => $this->esExento,
            'esServicio' => $this->esServicio,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'ruta', $this->ruta]);

        return $dataProvider;
    }
}
