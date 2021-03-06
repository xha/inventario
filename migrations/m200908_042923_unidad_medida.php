<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042923_unidad_medida extends Migration
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
            '{{%unidad_medida}}',
            [
                'idUnidadMedida'=> $this->primaryKey(11),
                'descripcion'=> $this->string(200)->notNull(),
                'abreviatura'=> $this->string(10)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%unidad_medida}}');
    }
}
