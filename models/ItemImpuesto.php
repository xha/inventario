<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_impuesto".
 *
 * @property int $idItem
 * @property int $idImpuesto
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class ItemImpuesto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_impuesto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idItem', 'idImpuesto', 'idEmpresa'], 'required'],
            [['idItem', 'idImpuesto', 'idEmpresa'], 'integer'],
            [['fechaCreacion'], 'safe'],
            [['estado', 'activo'], 'boolean'],
            [['idItem', 'idImpuesto'], 'unique', 'targetAttribute' => ['idItem', 'idImpuesto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idItem' => 'Id Item',
            'idImpuesto' => 'Id Impuesto',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
