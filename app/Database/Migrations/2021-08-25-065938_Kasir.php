<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kasir extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			],
			'password'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			]
		]);
		$this->forge->addKey('username', true);
		$this->forge->createTable('kasir');
	}

	public function down()
	{
		$this->forge->dropTable('kasir');
	}
}
