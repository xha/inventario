<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerfilMenu;

/**
 * MarcaSearch represents the model behind the search form of `backend\models\Marca`.
 */
class PerfilMenuSearch extends PerfilMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idMenu', 'idPerfil', 'idEmpresa'], 'integer'],
            [['esLector', 'esEscritor', 'esBorrador'], 'boolean'],
            [['fechaCreacion'], 'safe'],
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
        $query = PerfilMenu::find();

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
            'idMenu' => $this->idMenu,
            'idPerfil' => $this->idPerfil,
            'esLector' => $this->esLector,
            'esEscritor' => $this->esEscritor,
            'esBorrador' => $this->esBorrador,
        ]);

        return $dataProvider;
    }
}
