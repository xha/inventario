<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042903_estatus_transaccion extends Migration
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
            '{{%estatus_transaccion}}',
            [
                'idEstatusTransaccion'=> $this->primaryKey(11),
                'descripcion'=> $this->string(200)->notNull(),
                'color'=> $this->string(20)->notNull(),
                'nivel'=> $this->integer(11)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%estatus_transaccion}}');
    }
}
