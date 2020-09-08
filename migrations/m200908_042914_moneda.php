<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042914_moneda extends Migration
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
            '{{%moneda}}',
            [
                'idMoneda'=> $this->primaryKey(11),
                'descripcion'=> $this->string(100)->notNull(),
                'simbolo'=> $this->string(15)->notNull(),
                'principal'=> $this->boolean(1)->notNull()->defaultValue(0),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%moneda}}');
    }
}
