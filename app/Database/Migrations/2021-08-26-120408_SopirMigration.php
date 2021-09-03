<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SopirMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'  => [
				'type'       => 'INT',
				'constraint' => '5',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('sopir');
	}

	public function down()
	{
		$this->forge->dropTable('sopir');
	}
}
