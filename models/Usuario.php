<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $idUsuario
 * @property string $usuario
 * @property string $correo
 * @property string $clave
 * @property string|null $color
 * @property int $idPreguntaSeguridad
 * @property string $respuestaSeguridad
 * @property int $idPerfil
 * @property string $fechaCreacion
 * @property bool $activo
 *
 * @property Perfil $idPerfil0
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'correo', 'clave', 'idPreguntaSeguridad', 'respuestaSeguridad', 'idPerfil'], 'required'],
            [['idPreguntaSeguridad', 'idPerfil'], 'integer'],
            [['fechaCreacion'], 'safe'],
            [['activo'], 'boolean'],
            [['usuario', 'color', 'respuestaSeguridad'], 'string', 'max' => 50],
            [['correo'], 'string', 'max' => 200],
            [['clave'], 'string', 'max' => 250],
            [['idPerfil'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['idPerfil' => 'idPerfil']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'usuario' => 'Usuario',
            'correo' => 'Correo',
            'clave' => 'Clave',
            'color' => 'Color',
            'idPreguntaSeguridad' => 'Id Pregunta Seguridad',
            'respuestaSeguridad' => 'Respuesta Seguridad',
            'idPerfil' => 'Id Perfil',
            'fechaCreacion' => 'Fecha Creacion',
            'activo' => 'Activo',
        ];
    }

    /**
     * Gets query for [[IdPerfil0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerfil0()
    {
        return $this->hasOne(Perfil::className(), ['idPerfil' => 'idPerfil']);
    }
}
