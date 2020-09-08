<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042913_menu extends Migration
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
            '{{%menu}}',
            [
                'idMenu'=> $this->primaryKey(11),
                'descripcion'=> $this->string(50)->null()->defaultValue(null),
                'ruta'=> $this->string(200)->null()->defaultValue(null),
                'idPadre'=> $this->integer(11)->notNull()->defaultValue(0),
                'controlador'=> $this->string(50)->null()->defaultValue(null),
                'accion'=> $this->string(50)->null()->defaultValue(null),
                'icon'=> $this->string(50)->null()->defaultValue(null),
                'visible'=> $this->boolean(1)->null()->defaultValue(0),
                'orden'=> $this->string(10)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }
}
