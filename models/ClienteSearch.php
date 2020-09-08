<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCliente', 'idTipoPersona', 'idTipoSeniat', 'diasTolerancia', 'idTipoRetencion', 'idEmpresa'], 'integer'],
            [['razonSocial', 'telefonoLocal', 'telefonoCelular', 'observacion', 'documento', 'correo', 'fecha', 'direccion', 'fechaCreacion'], 'safe'],
            [['esCredito', 'esTolerancia', 'esDescuento', 'esPorcentaje', 'esAgenteRetencion', 'estado', 'activo'], 'boolean'],
            [['limiteCredito', 'descuento'], 'number'],
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
        $query = Cliente::find();

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
            'idCliente' => $this->idCliente,
            'idTipoPersona' => $this->idTipoPersona,
            'fecha' => $this->fecha,
            'idTipoSeniat' => $this->idTipoSeniat,
            'esCredito' => $this->esCredito,
            'limiteCredito' => $this->limiteCredito,
            'esTolerancia' => $this->esTolerancia,
            'diasTolerancia' => $this->diasTolerancia,
            'esDescuento' => $this->esDescuento,
            'esPorcentaje' => $this->esPorcentaje,
            'descuento' => $this->descuento,
            'esAgenteRetencion' => $this->esAgenteRetencion,
            'idTipoRetencion' => $this->idTipoRetencion,
            'fechaCreacion' => $this->fechaCreacion,
            'idEmpresa' => $this->idEmpresa,
            'estado' => $this->estado,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'razonSocial', $this->razonSocial])
            ->andFilterWhere(['like', 'telefonoLocal', $this->telefonoLocal])
            ->andFilterWhere(['like', 'telefonoCelular', $this->telefonoCelular])
            ->andFilterWhere(['like', 'observacion', $this->observacion])
            ->andFilterWhere(['like', 'documento', $this->documento])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
