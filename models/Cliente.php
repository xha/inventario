<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $idCliente
 * @property string|null $razonSocial
 * @property string|null $telefonoLocal
 * @property string|null $telefonoCelular
 * @property string|null $observacion
 * @property int $idTipoPersona
 * @property string $documento
 * @property string|null $correo
 * @property string|null $fecha
 * @property string|null $direccion
 * @property int $idTipoSeniat
 * @property bool $esCredito
 * @property float $limiteCredito
 * @property bool $esTolerancia
 * @property int $diasTolerancia
 * @property bool $esDescuento
 * @property bool $esPorcentaje
 * @property float $descuento
 * @property bool $esAgenteRetencion
 * @property int|null $idTipoRetencion
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTipoPersona', 'documento', 'idTipoSeniat', 'diasTolerancia', 'idEmpresa'], 'required'],
            [['idTipoPersona', 'idTipoSeniat', 'diasTolerancia', 'idTipoRetencion', 'idEmpresa'], 'integer'],
            [['fecha', 'fechaCreacion'], 'safe'],
            [['esCredito', 'esTolerancia', 'esDescuento', 'esPorcentaje', 'esAgenteRetencion', 'estado', 'activo'], 'boolean'],
            [['limiteCredito', 'descuento'], 'number'],
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
            'idCliente' => 'Id Cliente',
            'razonSocial' => 'Razon Social',
            'telefonoLocal' => 'Telefono Local',
            'telefonoCelular' => 'Telefono Celular',
            'observacion' => 'Observacion',
            'idTipoPersona' => 'Id Tipo Persona',
            'documento' => 'Documento',
            'correo' => 'Correo',
            'fecha' => 'Fecha',
            'direccion' => 'Direccion',
            'idTipoSeniat' => 'Id Tipo Seniat',
            'esCredito' => 'Es Credito',
            'limiteCredito' => 'Limite Credito',
            'esTolerancia' => 'Es Tolerancia',
            'diasTolerancia' => 'Dias Tolerancia',
            'esDescuento' => 'Es Descuento',
            'esPorcentaje' => 'Es Porcentaje',
            'descuento' => 'Descuento',
            'esAgenteRetencion' => 'Es Agente Retencion',
            'idTipoRetencion' => 'Id Tipo Retencion',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
