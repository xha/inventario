<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_existencia".
 *
 * @property int $idItemExistencia
 * @property int $idUbicacion
 * @property int $idItem
 * @property float|null $existencia
 * @property float|null $cantidadPendiente
 * @property float|null $cantidadComprometida
 * @property int $idSucursal
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class ItemExistencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_existencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUbicacion', 'idItem', 'idSucursal', 'idEmpresa'], 'required'],
            [['idUbicacion', 'idItem', 'idSucursal', 'idEmpresa'], 'integer'],
            [['existencia', 'cantidadPendiente', 'cantidadComprometida'], 'number'],
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
            'idItemExistencia' => 'Id Item Existencia',
            'idUbicacion' => 'Id Ubicacion',
            'idItem' => 'Id Item',
            'existencia' => 'Existencia',
            'cantidadPendiente' => 'Cantidad Pendiente',
            'cantidadComprometida' => 'Cantidad Comprometida',
            'idSucursal' => 'Id Sucursal',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
