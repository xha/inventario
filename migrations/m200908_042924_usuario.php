<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042924_usuario extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%usuario}}',
            [
                'idUsuario'=> $this->primaryKey(11),
                'usuario'=> $this->string(50)->notNull(),
                'correo'=> $this->string(200)->notNull(),
                'clave'=> $this->string(250)->notNull(),
                'color'=> $this->string(50)->null()->defaultValue(null),
                'idPreguntaSeguridad'=> $this->integer(11)->notNull(),
                'respuestaSeguridad'=> $this->string(50)->notNull(),
                'idPerfil'=> $this->integer(11)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_Usuario_Perfil','{{%usuario}}',['idPerfil'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_Usuario_Perfil', '{{%usuario}}');
        $this->dropTable('{{%usuario}}');
    }
}
