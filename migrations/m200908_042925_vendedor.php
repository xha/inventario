<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042925_vendedor extends Migration
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
            '{{%vendedor}}',
            [
                'idVendedor'=> $this->bigPrimaryKey(20),
                'razonSocial'=> $this->string(200)->null()->defaultValue(null),
                'telefonoLocal'=> $this->string(20)->null()->defaultValue(null),
                'telefonoCelular'=> $this->string(20)->null()->defaultValue(null),
                'observacion'=> $this->string(200)->null()->defaultValue(null),
                'documento'=> $this->string(30)->notNull(),
                'correo'=> $this->string(200)->null()->defaultValue(null),
                'fecha'=> $this->date()->null()->defaultValue(null),
                'direccion'=> $this->string(500)->null()->defaultValue(null),
                'esComisionVenta'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esComisionCobro'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esComisionTabuladorVenta'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esComisionTabuladorCobro'=> $this->boolean(1)->notNull()->defaultValue(0),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%vendedor}}');
    }
}
