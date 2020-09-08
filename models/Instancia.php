<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instancia".
 *
 * @property int $idInstancia
 * @property int $idPadre
 * @property string $descripcion
 * @property string $fechaCreacion
 * @property bool|null $esServicio
 * @property bool|null $esCompuesto
 * @property string|null $orden
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Instancia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instancia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPadre', 'descripcion', 'idEmpresa'], 'required'],
            [['idPadre', 'idEmpresa'], 'integer'],
            [['fechaCreacion'], 'safe'],
            [['esServicio', 'esCompuesto', 'estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
            [['orden'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idInstancia' => 'Id',
            'idPadre' => 'Id Padre',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'esServicio' => 'Es Servicio',
            'esCompuesto' => 'Es Compuesto',
            'orden' => 'Orden',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
