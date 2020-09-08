<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form of `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUsuario', 'idPreguntaSeguridad', 'idPerfil'], 'integer'],
            [['usuario', 'correo', 'clave', 'color', 'respuestaSeguridad', 'fechaCreacion'], 'safe'],
            [['activo'], 'boolean'],
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
        $query = Usuario::find();

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
            'idUsuario' => $this->idUsuario,
            'idPreguntaSeguridad' => $this->idPreguntaSeguridad,
            'idPerfil' => $this->idPerfil,
            'fechaCreacion' => $this->fechaCreacion,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'usuario', $this->usuario])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'clave', $this->clave])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'respuestaSeguridad', $this->respuestaSeguridad]);

        return $dataProvider;
    }
}
