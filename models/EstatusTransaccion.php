<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estatus_transaccion".
 *
 * @property int $idEstatusTransaccion
 * @property string $descripcion
 * @property string $color
 * @property int|null $nivel
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class EstatusTransaccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estatus_transaccion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'color', 'idEmpresa'], 'required'],
            [['nivel', 'idEmpresa'], 'integer'],
            [['fechaCreacion'], 'safe'],
            [['estado', 'activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200],
            [['color'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEstatusTransaccion' => 'Id Estatus Transaccion',
            'descripcion' => 'Descripcion',
            'color' => 'Color',
            'nivel' => 'Nivel',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
