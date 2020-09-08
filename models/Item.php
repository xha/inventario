<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $idItem
 * @property string $codigo
 * @property string $descripcion
 * @property int $idInstancia
 * @property int $idMarca
 * @property int $idUnidadMedida
 * @property float $costo
 * @property float $existencia
 * @property float $minimo
 * @property float $maximo
 * @property bool $esExento
 * @property bool|null $esServicio
 * @property string $ruta
 * @property string $fechaCreacion
 * @property int $idEmpresa
 * @property bool $estado
 * @property bool $activo
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion', 'idInstancia', 'idMarca', 'idUnidadMedida', 'ruta', 'idEmpresa'], 'required'],
            [['idInstancia', 'idMarca', 'idUnidadMedida', 'idEmpresa'], 'integer'],
            [['costo', 'existencia', 'minimo', 'maximo'], 'number'],
            [['esExento', 'esServicio', 'estado', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['codigo'], 'string', 'max' => 25],
            [['descripcion'], 'string', 'max' => 200],
            [['ruta'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idItem' => 'Id Item',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'idInstancia' => 'Id Instancia',
            'idMarca' => 'Id Marca',
            'idUnidadMedida' => 'Id Unidad Medida',
            'costo' => 'Costo',
            'existencia' => 'Existencia',
            'minimo' => 'Minimo',
            'maximo' => 'Maximo',
            'esExento' => 'Es Exento',
            'esServicio' => 'Es Servicio',
            'ruta' => 'Ruta',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
            'estado' => 'Estado',
            'activo' => 'Activo',
        ];
    }
}
