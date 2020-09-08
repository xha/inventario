<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042910_item_impuesto extends Migration
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
            '{{%item_impuesto}}',
            [
                'idItem'=> $this->bigInteger(20)->notNull(),
                'idImpuesto'=> $this->integer(11)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->addPrimaryKey('pk_on_item_impuesto','{{%item_impuesto}}',['idItem','idImpuesto']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_item_impuesto','{{%item_impuesto}}');
        $this->dropTable('{{%item_impuesto}}');
    }
}
