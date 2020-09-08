<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property int $idMarca
 * @property string $descripcion
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'idEmpresa'], 'required'],
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'integer'],
            [['estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMarca' => 'Id',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
