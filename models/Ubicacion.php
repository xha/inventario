<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubicacion".
 *
 * @property int $idUbicacion
 * @property string $descripcion
 * @property string $direccion
 * @property string|null $telefono
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Ubicacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubicacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'direccion', 'idEmpresa'], 'required'],
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'integer'],
            [['estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
            [['direccion'], 'string', 'max' => 500],
            [['telefono'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUbicacion' => 'Id Ubicacion',
            'descripcion' => 'Descripcion',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
