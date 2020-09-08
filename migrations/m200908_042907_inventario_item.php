<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042907_inventario_item extends Migration
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
            '{{%inventario_item}}',
            [
                'idInventarioItem'=> $this->bigInteger(20)->notNull(),
                'idInventario'=> $this->bigInteger(20)->notNull(),
                'idItem'=> $this->bigInteger(20)->notNull(),
                'numeroLinea'=> $this->integer(11)->notNull(),
                'descripcionItem'=> $this->string(200)->notNull(),
                'cantidad'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'costo'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'precio'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'impuesto'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'descuento'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'montoTotal'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'esExento'=> $this->boolean(1)->notNull()->defaultValue(0),
                'idSucursal'=> $this->integer(11)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_inventario_item_Item','{{%inventario_item}}',['idItem'],false);
        $this->addPrimaryKey('pk_on_inventario_item','{{%inventario_item}}',['idInventario','idItem']);

    }

    public function safeDown()
    {
    $this->dropPrimaryKey('pk_on_inventario_item','{{%inventario_item}}');
        $this->dropIndex('fk_inventario_item_Item', '{{%inventario_item}}');
        $this->dropTable('{{%inventario_item}}');
    }
}
