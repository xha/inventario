<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042918_tipo_persona extends Migration
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
            '{{%tipo_persona}}',
            [
                'idTipoPersona'=> $this->primaryKey(11),
                'descripcion'=> $this->string(200)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%tipo_persona}}');
    }
}
