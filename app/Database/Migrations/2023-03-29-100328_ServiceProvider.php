<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceProvider extends Migration
{
public function up()
{
$this->forge->addField([
'service_provider_id' => [
'type' => 'INT',
'constraint' => 5,
'unsigned' => true,
'auto_increment' => true,
],
'service_provider_Name' => [
'type' => 'VARCHAR',
'constraint' => '100',
],
'service_provider_userName' => [
'type' => 'TEXT',
'null' => true,
],
'service_provider_mobile_no' => [
'type' => 'INT',
'constraint'=>'13',
],
'service_provider_Email'=>[
'type'=>'VARCHAR',
'constraint'=>'30',
],
'service_provider_password'=>[
'type'=>'VARCHAR',
'constraint'=>'13',
],
'service_provider_address'=>[
'type'=> 'VARCHAR',
'constraint'=>'50',
],
'availability'=>[
'type'=>'BOOLEAN',
'constraint'=>'1',
],
]);
$this->forge->addKey('service_provider_id', true);
$this->forge->addForeignKey('machineid', 'machines ','machine_id', 'CASCASDE','CASCADE');
$this->forge->createTable('service_provider');
}

public function down()
{
$this->forge->dropTable('service_provider');
}
}

