<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_precio".
 *
 * @property int $idPrecio
 * @property int $idItem
 * @property float $precio
 * @property int|null $idMoneda
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class ItemPrecio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_precio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idItem', 'idEmpresa'], 'required'],
            [['idItem', 'idMoneda', 'idEmpresa'], 'integer'],
            [['precio'], 'number'],
            [['fechaCreacion'], 'safe'],
            [['estado', 'activo'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPrecio' => 'Id Precio',
            'idItem' => 'Id Item',
            'precio' => 'Precio',
            'idMoneda' => 'Id Moneda',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
