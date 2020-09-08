<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042915_perfil extends Migration
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
            '{{%perfil}}',
            [
                'idPerfil'=> $this->primaryKey(11),
                'descripcion'=> $this->string(50)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%perfil}}');
    }
}
