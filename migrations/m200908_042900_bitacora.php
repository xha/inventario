<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042900_bitacora extends Migration
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
            '{{%bitacora}}',
            [
                'idBitacora'=> $this->primaryKey(11),
                'usuario'=> $this->string(50)->notNull(),
                'fecha'=> $this->timestamp()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'detalle'=> $this->string(2000)->notNull()->defaultValue(''),
                'idEmpresa'=> $this->integer(11)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%bitacora}}');
    }
}
