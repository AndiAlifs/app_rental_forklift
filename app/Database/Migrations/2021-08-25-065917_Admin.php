<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_admin'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			],
			'username'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			],
			'password'  => [
				'type'       => 'VARCHAR',
				'constraint' => '120',
			]
		]);
		$this->forge->addKey('id_admin', true);
		$this->forge->createTable('admin');
		
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
