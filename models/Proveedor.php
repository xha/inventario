<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property int $idProveedor
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
 * @property string|null $representante
 * @property int $idTipoRetencion
 * @property float|null $porcentajeRetencionIVA
 * @property bool|null $esRetencionIVA
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTipoPersona', 'documento', 'idTipoSeniat', 'idTipoRetencion', 'idEmpresa'], 'required'],
            [['idTipoPersona', 'idTipoSeniat', 'idTipoRetencion', 'idEmpresa'], 'integer'],
            [['fecha', 'fechaCreacion'], 'safe'],
            [['porcentajeRetencionIVA'], 'number'],
            [['esRetencionIVA', 'estado', 'activo'], 'boolean'],
            [['razonSocial', 'observacion', 'correo'], 'string', 'max' => 200],
            [['telefonoLocal', 'telefonoCelular'], 'string', 'max' => 20],
            [['documento'], 'string', 'max' => 30],
            [['direccion'], 'string', 'max' => 500],
            [['representante'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProveedor' => 'Id Proveedor',
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
            'representante' => 'Representante',
            'idTipoRetencion' => 'Id Tipo Retencion',
            'porcentajeRetencionIVA' => 'Porcentaje Retencion Iva',
            'esRetencionIVA' => 'Es Retencion Iva',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
