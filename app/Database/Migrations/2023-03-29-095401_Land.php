<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Land extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'land_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'land_area' => [
                'type' => 'FLOAT',
                'constraint'=> '10',
                
            ],
            'land_address'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'50',
            ],
            'land_owner_name'=>[
                'type'=>'VARCHAR',
                'constraint'=>'30',
            ],
            'owner_Email'=>[
                'type'=>'VARCHAR',
                'constraint'=>'30',
            ],
            
        ]);
        $this->forge->addKey('land_id', true);
        $this->forge->createTable('land');
    }

    public function down()
    {
        $this->forge->dropTable('land');
    }
}
