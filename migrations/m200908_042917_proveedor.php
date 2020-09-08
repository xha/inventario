<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042917_proveedor extends Migration
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
            '{{%proveedor}}',
            [
                'idProveedor'=> $this->bigPrimaryKey(20),
                'razonSocial'=> $this->string(200)->null()->defaultValue(null),
                'telefonoLocal'=> $this->string(20)->null()->defaultValue(null),
                'telefonoCelular'=> $this->string(20)->null()->defaultValue(null),
                'observacion'=> $this->string(200)->null()->defaultValue(null),
                'idTipoPersona'=> $this->integer(11)->notNull(),
                'documento'=> $this->string(30)->notNull(),
                'correo'=> $this->string(200)->null()->defaultValue(null),
                'fecha'=> $this->date()->null()->defaultValue(null),
                'direccion'=> $this->string(500)->null()->defaultValue(null),
                'idTipoSeniat'=> $this->integer(11)->notNull(),
                'representante'=> $this->string(50)->null()->defaultValue(null),
                'idTipoRetencion'=> $this->integer(11)->notNull(),
                'porcentajeRetencionIVA'=> $this->decimal(5, 2)->null()->defaultValue(null),
                'esRetencionIVA'=> $this->boolean(1)->null()->defaultValue(0),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_proveedor_tipo_retencion','{{%proveedor}}',['idTipoRetencion'],false);
        $this->createIndex('fk_proveedor_tipo_seniat','{{%proveedor}}',['idTipoSeniat'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_proveedor_tipo_retencion', '{{%proveedor}}');
        $this->dropIndex('fk_proveedor_tipo_seniat', '{{%proveedor}}');
        $this->dropTable('{{%proveedor}}');
    }
}
