<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $idMenu
 * @property string|null $descripcion
 * @property string|null $ruta
 * @property int $idPadre
 * @property string|null $controlador
 * @property string|null $accion
 * @property string|null $icon
 * @property bool|null $visible
 * @property string|null $orden
 * @property string $fechaCreacion
 * @property bool $activo
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPadre'], 'integer'],
            [['visible', 'activo'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['descripcion', 'controlador', 'accion', 'icon'], 'string', 'max' => 50],
            [['ruta'], 'string', 'max' => 200],
            [['orden'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMenu' => 'Id Menu',
            'descripcion' => 'Descripcion',
            'ruta' => 'Ruta',
            'idPadre' => 'Id Padre',
            'controlador' => 'Controlador',
            'accion' => 'Accion',
            'icon' => 'Icon',
            'visible' => 'Visible',
            'orden' => 'Orden',
            'fechaCreacion' => 'Fecha Creacion',
            'activo' => 'Activo',
        ];
    }
}
