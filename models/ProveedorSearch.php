<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proveedor;

/**
 * ProveedorSearch represents the model behind the search form of `app\models\Proveedor`.
 */
class ProveedorSearch extends Proveedor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idProveedor', 'idTipoPersona', 'idTipoSeniat', 'idTipoRetencion', 'idEmpresa'], 'integer'],
            [['razonSocial', 'telefonoLocal', 'telefonoCelular', 'observacion', 'documento', 'correo', 'fecha', 'direccion', 'representante', 'fechaCreacion'], 'safe'],
            [['porcentajeRetencionIVA'], 'number'],
            [['esRetencionIVA', 'estado', 'activo'], 'boolean'],
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
        $query = Proveedor::find();

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
            'idProveedor' => $this->idProveedor,
            'idTipoPersona' => $this->idTipoPersona,
            'fecha' => $this->fecha,
            'idTipoSeniat' => $this->idTipoSeniat,
            'idTipoRetencion' => $this->idTipoRetencion,
            'porcentajeRetencionIVA' => $this->porcentajeRetencionIVA,
            'esRetencionIVA' => $this->esRetencionIVA,
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
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'representante', $this->representante]);

        return $dataProvider;
    }
}
