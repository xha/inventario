<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidad_medida".
 *
 * @property int $idUnidadMedida
 * @property string $descripcion
 * @property string $abreviatura
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class UnidadMedida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidad_medida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'abreviatura', 'idEmpresa'], 'required'],
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'integer'],
            [['estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
            [['abreviatura'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUnidadMedida' => 'Id Unidad Medida',
            'descripcion' => 'Descripcion',
            'abreviatura' => 'Abreviatura',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
