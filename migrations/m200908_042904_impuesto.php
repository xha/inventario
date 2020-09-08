<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042904_impuesto extends Migration
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
            '{{%impuesto}}',
            [
                'idImpuesto'=> $this->primaryKey(11),
                'descripcion'=> $this->string(100)->notNull(),
                'monto'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'esRetencion'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esCompra'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esVenta'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esPorcentaje'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esLibroImpuesto'=> $this->boolean(1)->notNull()->defaultValue(0),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%impuesto}}');
    }
}
