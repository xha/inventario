<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario".
 *
 * @property int $idInventario
 * @property int $idUsuario
 * @property int $idTipoTransaccion
 * @property int $idMoneda
 * @property float $montoNeto
 * @property float $gravable
 * @property float $exento
 * @property float $impuesto
 * @property float $descuento
 * @property float $montoTotal
 * @property int $idUbicacion
 * @property int $idUbicacion2
 * @property string|null $observacion
 * @property string $fechaInventario
 * @property string $fechaOperacion
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Inventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUsuario', 'idTipoTransaccion', 'idMoneda', 'idUbicacion', 'fechaInventario', 'fechaOperacion', 'idEmpresa'], 'required'],
            [['idUsuario', 'idTipoTransaccion', 'idMoneda', 'idUbicacion', 'idUbicacion2', 'idEmpresa'], 'integer'],
            [['montoNeto', 'gravable', 'exento', 'impuesto', 'descuento', 'montoTotal'], 'number'],
            [['fechaInventario', 'fechaOperacion', 'fechaCreacion'], 'safe'],
            [['estado', 'activo'], 'boolean'],
            [['observacion'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idInventario' => 'Id Inventario',
            'idUsuario' => 'Id Usuario',
            'idTipoTransaccion' => 'Id Tipo Transaccion',
            'idMoneda' => 'Id Moneda',
            'montoNeto' => 'Monto Neto',
            'gravable' => 'Gravable',
            'exento' => 'Exento',
            'impuesto' => 'Impuesto',
            'descuento' => 'Descuento',
            'montoTotal' => 'Monto Total',
            'idUbicacion' => 'Id Ubicacion',
            'idUbicacion2' => 'Id Ubicacion2',
            'observacion' => 'Observacion',
            'fechaInventario' => 'Fecha Inventario',
            'fechaOperacion' => 'Fecha Operacion',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
