<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042921_tipo_transaccion extends Migration
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
            '{{%tipo_transaccion}}',
            [
                'idTipoTransaccion'=> $this->primaryKey(11),
                'descripcion'=> $this->string(100)->notNull(),
                'nivel'=> $this->integer(11)->notNull(),
                'esCompra'=> $this->boolean(1)->null()->defaultValue(0),
                'esVenta'=> $this->boolean(1)->null()->defaultValue(0),
                'esInventario'=> $this->boolean(1)->null()->defaultValue(0),
                'correlativo'=> $this->integer(11)->null()->defaultValue(null),
                'signo'=> $this->boolean(1)->null()->defaultValue(0),
                'prefijo'=> $this->string(20)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%tipo_transaccion}}');
    }
}
