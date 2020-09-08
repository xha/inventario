<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042905_instancia extends Migration
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
            '{{%instancia}}',
            [
                'idInstancia'=> $this->primaryKey(11),
                'idPadre'=> $this->integer(11)->notNull(),
                'descripcion'=> $this->string(200)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'esServicio'=> $this->boolean(1)->null()->defaultValue(0),
                'esCompuesto'=> $this->boolean(1)->null()->defaultValue(0),
                'orden'=> $this->string(10)->null()->defaultValue(null),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%instancia}}');
    }
}
