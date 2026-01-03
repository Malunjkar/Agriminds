<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Machines extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'machine_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'machine_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'machine_type' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'machine_rates' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'mo_no' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('machine_id', true);
        $this->forge->createTable('machine');

    }

    public function down()
    {
        $this->forge->dropTable('machine');
    }
}
