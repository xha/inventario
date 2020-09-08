<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_transaccion".
 *
 * @property int $idTipoTransaccion
 * @property string $descripcion
 * @property int $nivel
 * @property bool|null $esCompra
 * @property bool|null $esVenta
 * @property bool|null $esInventario
 * @property int|null $correlativo
 * @property bool|null $signo
 * @property string|null $prefijo
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class TipoTransaccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_transaccion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'nivel', 'idEmpresa'], 'required'],
            [['nivel', 'correlativo', 'idEmpresa'], 'integer'],
            [['esCompra', 'esVenta', 'esInventario', 'signo', 'estado', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['descripcion'], 'string', 'max' => 100],
            [['prefijo'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipoTransaccion' => 'Id Tipo Transaccion',
            'descripcion' => 'Descripcion',
            'nivel' => 'Nivel',
            'esCompra' => 'Es Compra',
            'esVenta' => 'Es Venta',
            'esInventario' => 'Es Inventario',
            'correlativo' => 'Correlativo',
            'signo' => 'Signo',
            'prefijo' => 'Prefijo',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
