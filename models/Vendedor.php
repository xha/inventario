<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendedor".
 *
 * @property int $idVendedor
 * @property string|null $razonSocial
 * @property string|null $telefonoLocal
 * @property string|null $telefonoCelular
 * @property string|null $observacion
 * @property string $documento
 * @property string|null $correo
 * @property string|null $fecha
 * @property string|null $direccion
 * @property bool $esComisionVenta
 * @property bool $esComisionCobro
 * @property bool $esComisionTabuladorVenta
 * @property bool $esComisionTabuladorCobro
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Vendedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['documento', 'idEmpresa'], 'required'],
            [['fecha', 'fechaCreacion'], 'safe'],
            [['esComisionVenta', 'esComisionCobro', 'esComisionTabuladorVenta', 'esComisionTabuladorCobro', 'estado', 'activo'], 'boolean'],
            [['idEmpresa'], 'integer'],
            [['razonSocial', 'observacion', 'correo'], 'string', 'max' => 200],
            [['telefonoLocal', 'telefonoCelular'], 'string', 'max' => 20],
            [['documento'], 'string', 'max' => 30],
            [['direccion'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idVendedor' => 'Id Vendedor',
            'razonSocial' => 'Razon Social',
            'telefonoLocal' => 'Telefono Local',
            'telefonoCelular' => 'Telefono Celular',
            'observacion' => 'Observacion',
            'documento' => 'Documento',
            'correo' => 'Correo',
            'fecha' => 'Fecha',
            'direccion' => 'Direccion',
            'esComisionVenta' => 'Es Comision Venta',
            'esComisionCobro' => 'Es Comision Cobro',
            'esComisionTabuladorVenta' => 'Es Comision Tabulador Venta',
            'esComisionTabuladorCobro' => 'Es Comision Tabulador Cobro',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
