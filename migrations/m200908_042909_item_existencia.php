<?php

use yii\db\Schema;
use yii\db\Migration;

class m200908_042909_item_existencia extends Migration
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
            '{{%item_existencia}}',
            [
                'idItemExistencia'=> $this->bigPrimaryKey(20),
                'idUbicacion'=> $this->bigInteger(20)->notNull(),
                'idItem'=> $this->bigInteger(20)->notNull(),
                'existencia'=> $this->decimal(20, 4)->null()->defaultValue(null),
                'cantidadPendiente'=> $this->decimal(20, 4)->null()->defaultValue(null),
                'cantidadComprometida'=> $this->decimal(20, 4)->null()->defaultValue(null),
                'idSucursal'=> $this->integer(11)->notNull(),
                'fechaCreacion'=> $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
                'idEmpresa'=> $this->integer(11)->notNull(),
                'estado'=> $this->boolean(1)->notNull()->defaultValue(1),
                'activo'=> $this->boolean(1)->notNull()->defaultValue(1),
            ],$tableOptions
        );
        $this->createIndex('fk_item_existencia_idItem','{{%item_existencia}}',['idItem'],false);
        $this->createIndex('fk_item_existencia_idUbicacion','{{%item_existencia}}',['idUbicacion'],false);

    }

    public function safeDown()
    {
        $this->dropIndex('fk_item_existencia_idItem', '{{%item_existencia}}');
        $this->dropIndex('fk_item_existencia_idUbicacion', '{{%item_existencia}}');
        $this->dropTable('{{%item_existencia}}');
    }
}
