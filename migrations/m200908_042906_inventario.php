<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042906_inventario extends Migration
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
            '{{%inventario}}',
            [
                'idInventario'=> $this->bigPrimaryKey(20),
                'idUsuario'=> $this->bigInteger(20)->notNull(),
                'idTipoTransaccion'=> $this->integer(11)->notNull(),
                'idMoneda'=> $this->integer(11)->notNull(),
                'montoNeto'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'gravable'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'exento'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'impuesto'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'descuento'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'montoTotal'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'idUbicacion'=> $this->integer(11)->notNull(),
                'idUbicacion2'=> $this->integer(11)->notNull()->defaultValue(0),
                'observacion'=> $this->string(500)->null()->defaultValue(null),
                'fechaInventario'=> $this->datetime()->notNull(),
                'fechaOperacion'=> $this->datetime()->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_Inventario_Moneda','{{%inventario}}',['idMoneda'],false);
        $this->createIndex('fk_Inventario_tipo_transaccion','{{%inventario}}',['idTipoTransaccion'],false);
        $this->createIndex('fk_Inventario_Ubicacion','{{%inventario}}',['idUbicacion'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_Inventario_Moneda', '{{%inventario}}');
        $this->dropIndex('fk_Inventario_tipo_transaccion', '{{%inventario}}');
        $this->dropIndex('fk_Inventario_Ubicacion', '{{%inventario}}');
        $this->dropTable('{{%inventario}}');
    }
}
