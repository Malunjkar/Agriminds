<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Farmer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'farmer_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'farmer_fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                
            ],
            'farmer_username' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                
            ],
            'farmer_mobile_no' => [
                'type'          => 'INT',
                'constraint'=>'13',
            ],
            'farmer_Email'=>[
                'type'=>'VARCHAR',
                'constraint'=>'30',
            ],
            'farmer_password'=>[
                'type'=>'VARCHAR',
                'constraint'=>'13',
            ],
            'farmer_address'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'50',
            ],
            
        ]);
        $this->forge->addKey('farmer_id', true);
        $this->forge->addForeignKey('admin_id', 'admin ', 'CASCASDE','CASCADE');
        $this->forge->createTable('farmer');
    }

    public function down()
    {
        $this->forge->dropTable('farmer');
    }
}
