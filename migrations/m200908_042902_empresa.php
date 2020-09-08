<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042902_empresa extends Migration
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
            '{{%empresa}}',
            [
                'idEmpresa'=> $this->primaryKey(11),
                'rif'=> $this->string(20)->notNull(),
                'razonSocial'=> $this->string(200)->notNull(),
                'representante'=> $this->string(200)->null()->defaultValue(null),
                'direccion'=> $this->string(400)->notNull(),
                'correo'=> $this->string(100)->notNull(),
                'fechaLicencia'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
                'concatenado'=> $this->string(500)->null()->defaultValue(null),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%empresa}}');
    }
}
