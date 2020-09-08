<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario_item".
 *
 * @property int $idInventarioItem
 * @property int $idInventario
 * @property int $idItem
 * @property int $numeroLinea
 * @property string $descripcionItem
 * @property float $cantidad
 * @property float $costo
 * @property float $precio
 * @property float $impuesto
 * @property float $descuento
 * @property float $montoTotal
 * @property bool $esExento
 * @property int $idSucursal
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class InventarioItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventario_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idInventarioItem', 'idInventario', 'idItem', 'numeroLinea', 'descripcionItem', 'idSucursal', 'idEmpresa'], 'required'],
            [['idInventarioItem', 'idInventario', 'idItem', 'numeroLinea', 'idSucursal', 'idEmpresa'], 'integer'],
            [['cantidad', 'costo', 'precio', 'impuesto', 'descuento', 'montoTotal'], 'number'],
            [['esExento', 'estado', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['descripcionItem'], 'string', 'max' => 200],
            [['idInventario', 'idItem'], 'unique', 'targetAttribute' => ['idInventario', 'idItem']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idInventarioItem' => 'Id Inventario Item',
            'idInventario' => 'Id Inventario',
            'idItem' => 'Id Item',
            'numeroLinea' => 'Numero Linea',
            'descripcionItem' => 'Descripcion Item',
            'cantidad' => 'Cantidad',
            'costo' => 'Costo',
            'precio' => 'Precio',
            'impuesto' => 'Impuesto',
            'descuento' => 'Descuento',
            'montoTotal' => 'Monto Total',
            'esExento' => 'Es Exento',
            'idSucursal' => 'Id Sucursal',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
