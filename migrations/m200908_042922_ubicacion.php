<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042922_ubicacion extends Migration
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
            '{{%ubicacion}}',
            [
                'idUbicacion'=> $this->bigPrimaryKey(20),
                'descripcion'=> $this->string(200)->notNull(),
                'direccion'=> $this->string(500)->notNull(),
                'telefono'=> $this->string(30)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%ubicacion}}');
    }
}
