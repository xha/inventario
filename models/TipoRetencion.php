<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_retencion".
 *
 * @property int $idTipoRetencion
 * @property string $descripcion
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class TipoRetencion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_retencion';
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
            [['descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipoRetencion' => 'Id Tipo Retencion',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
