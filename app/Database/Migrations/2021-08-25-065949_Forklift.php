<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Forklift extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],
			'tonase'  => [
				'type'       => 'INT',
				'constraint' => 5,
			],
			'harga'  => [
				'type'       => 'INT',
				'constraint' => 30,
			],
			'merk'  => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'status'  => [
				'type'       => 'INT',
				'constraint' => '1',
				'default' => 1,
			],
			'images'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('forklift');
	}

	public function down()
	{
		$this->forge->dropTable('forklift');
	}
}
