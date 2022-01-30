<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PembayaranMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'                 => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],'id_transaksi'     => [
				'type'           => 'INT',
				'unsigned'       => TRUE,
			], 'status_bayar'    => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
				'default'		 =>	'Belum Lunas'			
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_transaksi','transaksi','id','CASCADE','CASCADE');
		$this->forge->createTable('pembayaran');
	}

	public function down()
	{
		$this->forge->dropTable('pembayaran');
	}
}
