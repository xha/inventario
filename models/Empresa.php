<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $idEmpresa
 * @property string $rif
 * @property string $razonSocial
 * @property string|null $representante
 * @property string $direccion
 * @property string $correo
 * @property string $fechaLicencia
 * @property string $fechaCreacion
 * @property bool $activo
 * @property string|null $concatenado
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rif', 'razonSocial', 'direccion', 'correo'], 'required'],
            [['fechaLicencia', 'fechaCreacion'], 'safe'],
            [['activo'], 'boolean'],
            [['rif'], 'string', 'max' => 20],
            [['razonSocial', 'representante'], 'string', 'max' => 200],
            [['direccion'], 'string', 'max' => 400],
            [['correo'], 'string', 'max' => 100],
            [['concatenado'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEmpresa' => 'Id Empresa',
            'rif' => 'Rif',
            'razonSocial' => 'Razon Social',
            'representante' => 'Representante',
            'direccion' => 'Direccion',
            'correo' => 'Correo',
            'fechaLicencia' => 'Fecha Licencia',
            'fechaCreacion' => 'Fecha Creacion',
            'activo' => 'Activo',
            'concatenado' => 'Concatenado',
        ];
    }
}
