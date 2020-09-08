<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042916_perfil_menu extends Migration
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
            '{{%perfil_menu}}',
            [
                'idMenu'=> $this->integer(11)->notNull(),
                'idPerfil'=> $this->integer(11)->notNull(),
                'esLector'=> $this->boolean(1)->notNull()->defaultValue(1),
                'esEscritor'=> $this->boolean(1)->notNull()->defaultValue(1),
                'esBorrador'=> $this->boolean(1)->notNull()->defaultValue(1),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%perfil_menu}}');
    }
}
