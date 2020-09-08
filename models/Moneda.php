<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moneda".
 *
 * @property int $idMoneda
 * @property string $descripcion
 * @property string $simbolo
 * @property bool $principal
 * @property string $fechaCreacion
 * @property bool $estado
 * @property bool $activo
 */
class Moneda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moneda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'simbolo'], 'required'],
            [['principal', 'estado', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['descripcion'], 'string', 'max' => 100],
            [['simbolo'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMoneda' => 'Id Moneda',
            'descripcion' => 'Descripcion',
            'simbolo' => 'Simbolo',
            'principal' => 'Principal',
            'fechaCreacion' => 'Fecha Creacion',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
