<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_persona".
 *
 * @property int $idTipoPersona
 * @property string|null $descripcion
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class TipoPersona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'required'],
            [['idEmpresa'], 'integer'],
            [['estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idTipoPersona' => 'Id Tipo Persona',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
