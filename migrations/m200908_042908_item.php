<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042908_item extends Migration
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
            '{{%item}}',
            [
                'idItem'=> $this->bigPrimaryKey(20),
                'codigo'=> $this->string(25)->notNull(),
                'descripcion'=> $this->string(200)->notNull(),
                'idInstancia'=> $this->integer(11)->notNull(),
                'idMarca'=> $this->integer(11)->notNull(),
                'idUnidadMedida'=> $this->integer(11)->notNull(),
                'costo'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'existencia'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'minimo'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'maximo'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'esExento'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esServicio'=> $this->boolean(1)->null()->defaultValue(0),
                'ruta'=> $this->string(500)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_item_instancia','{{%item}}',['idInstancia'],false);
        $this->createIndex('fk_item_marca','{{%item}}',['idMarca'],false);
        $this->createIndex('fk_item_unidad_medida','{{%item}}',['idUnidadMedida'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_item_instancia', '{{%item}}');
        $this->dropIndex('fk_item_marca', '{{%item}}');
        $this->dropIndex('fk_item_unidad_medida', '{{%item}}');
        $this->dropTable('{{%item}}');
    }
}
