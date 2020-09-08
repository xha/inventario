<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042911_item_precio extends Migration
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
            '{{%item_precio}}',
            [
                'idPrecio'=> $this->bigPrimaryKey(20),
                'idItem'=> $this->bigInteger(20)->notNull(),
                'precio'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'idMoneda'=> $this->integer(11)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_item_precio_item','{{%item_precio}}',['idItem'],false);
        $this->createIndex('fk_item_precio_moneda','{{%item_precio}}',['idMoneda'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_item_precio_item', '{{%item_precio}}');
        $this->dropIndex('fk_item_precio_moneda', '{{%item_precio}}');
        $this->dropTable('{{%item_precio}}');
    }
}
