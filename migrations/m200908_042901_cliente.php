<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042901_cliente extends Migration
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
            '{{%cliente}}',
            [
                'idCliente'=> $this->bigPrimaryKey(20),
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
                'esCredito'=> $this->boolean(1)->notNull()->defaultValue(0),
                'limiteCredito'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'esTolerancia'=> $this->boolean(1)->notNull()->defaultValue(0),
                'diasTolerancia'=> $this->integer(11)->notNull(),
                'esDescuento'=> $this->boolean(1)->notNull()->defaultValue(0),
                'esPorcentaje'=> $this->boolean(1)->notNull()->defaultValue(0),
                'descuento'=> $this->decimal(20, 4)->notNull()->defaultValue('0.0000'),
                'esAgenteRetencion'=> $this->boolean(1)->notNull()->defaultValue(0),
                'idTipoRetencion'=> $this->integer(11)->null()->defaultValue(null),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_cliente_tipo_seniat','{{%cliente}}',['idTipoSeniat'],false);
        $this->createIndex('fk_tipo_retencion_cliente','{{%cliente}}',['idTipoRetencion'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_cliente_tipo_seniat', '{{%cliente}}');
        $this->dropIndex('fk_tipo_retencion_cliente', '{{%cliente}}');
        $this->dropTable('{{%cliente}}');
    }
}
