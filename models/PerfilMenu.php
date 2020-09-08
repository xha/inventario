<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil_menu".
 *
 * @property int $idMenu
 * @property int $idPerfil
 * @property bool $esLector
 * @property bool $esEscritor
 * @property bool $esBorrador
 * @property string $fechaCreacion
 * @property int $idEmpresa
 *
 * @property Empresa $idEmpresa0
 */
class PerfilMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idMenu', 'idPerfil', 'idEmpresa'], 'required'],
            [['idMenu', 'idPerfil', 'idEmpresa'], 'integer'],
            [['esLector', 'esEscritor', 'esBorrador'], 'boolean'],
            [['fechaCreacion'], 'safe'],
            [['idEmpresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['idEmpresa' => 'idEmpresa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMenu' => 'Menu',
            'idPerfil' => 'Perfil',
            'esLector' => 'Leer',
            'esEscritor' => 'Escribir',
            'esBorrador' => 'Borrar',
            'fechaCreacion' => 'Fecha Creacion',
            'idEmpresa' => 'Id Empresa',
        ];
    }

    /**
     * Gets query for [[IdEmpresa0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdEmpresa0()
    {
        return $this->hasOne(Empresa::className(), ['idEmpresa' => 'idEmpresa']);
    }
}
