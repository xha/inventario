<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042926_Relations extends Migration
{

    public function init()
    {
       $this->db = 'db';
       parent::init();
    }

    public function safeUp()
    {
        $this->addForeignKey('fk_usuario_idPerfil',
            '{{%usuario}}','idPerfil',
            '{{%perfil}}','idPerfil',
            'CASCADE','CASCADE'
         );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_usuario_idPerfil', '{{%usuario}}');
    }
}
