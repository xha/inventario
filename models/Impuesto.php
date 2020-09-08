<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "impuesto".
 *
 * @property int $idImpuesto
 * @property string $descripcion
 * @property float $monto
 * @property bool $esRetencion
 * @property bool $esCompra
 * @property bool $esVenta
 * @property bool $esPorcentaje
 * @property bool $esLibroImpuesto
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Impuesto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'impuesto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'idEmpresa'], 'required'],
            [['monto'], 'number'],
            [['esRetencion', 'esCompra', 'esVenta', 'esPorcentaje', 'esLibroImpuesto', 'estado', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'integer'],
            [['descripcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idImpuesto' => 'Id Impuesto',
            'descripcion' => 'Descripcion',
            'monto' => 'Monto',
            'esRetencion' => 'Es Retencion',
            'esCompra' => 'Es Compra',
            'esVenta' => 'Es Venta',
            'esPorcentaje' => 'Es Porcentaje',
            'esLibroImpuesto' => 'Es Libro Impuesto',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
