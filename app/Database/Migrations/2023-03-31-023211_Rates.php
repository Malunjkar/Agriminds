<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rates extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'r_id'=>[
            'type'=>'INT',
            'constraint'=>10,
            'unsigned'=>true,
            'auto_increment'=>true,
        ],
        'amount'=>[
            'type'=>'INT',
            'constraint'=>10,
        ],
        'payment_type'=>[
            'type'=>'VARCHAR',
            'constraint'=>'100',
        ],
    ]);
    $this->forge->addKey('r_id', true);
    $this->forge->createTable('rates');
    }

    public function down()
    {
        $this->forge->dropTable('rates');
    }
}
