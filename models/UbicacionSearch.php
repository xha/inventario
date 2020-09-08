<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ubicacion;

/**
 * UbicacionSearch represents the model behind the search form of `app\models\Ubicacion`.
 */
class UbicacionSearch extends Ubicacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUbicacion', 'idEmpresa'], 'integer'],
            [['descripcion', 'direccion', 'telefono', 'fechaCreacion'], 'safe'],
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
        $query = Ubicacion::find();

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
            'idUbicacion' => $this->idUbicacion,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono]);

        return $dataProvider;
    }
}
