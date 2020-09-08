<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bitacora".
 *
 * @property int $idBitacora
 * @property string $usuario
 * @property string $fecha
 * @property string $detalle
 * @property int $idEmpresa
 */
class Bitacora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bitacora';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'idEmpresa'], 'required'],
            [['fecha'], 'safe'],
            [['idEmpresa'], 'integer'],
            [['usuario'], 'string', 'max' => 50],
            [['detalle'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBitacora' => 'Id Bitacora',
            'usuario' => 'Usuario',
            'fecha' => 'Fecha',
            'detalle' => 'Detalle',
            'idEmpresa' => 'Id Empresa',
        ];
    }
}
