<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property int $idPerfil
 * @property string $descripcion
 * @property string $fechaCreacion
 * @property bool $activo
 *
 * @property Usuario[] $usuarios
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['fechaCreacion'], 'safe'],
            [['activo'], 'boolean'],
            [['descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPerfil' => 'Id Perfil',
            'descripcion' => 'Descripcion',
            'fechaCreacion' => 'Fecha Creacion',
            'activo' => 'Activo',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['idPerfil' => 'idPerfil']);
    }
}
