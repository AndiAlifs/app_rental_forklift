<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
			],'customer'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,				
			],'id_forklift'          => [
				'type'           => 'INT',
				'constraint'     => 5,				
			],'tanggal_rental'          => [
				'type'           => 'DATE',
			],'tanggal_kembali'          => [
				'type'           => 'DATE',
				'null'			=> TRUE
			],'waktu_rental'          => [
				'type'           => 'TIME',
				'null'			=> TRUE
			],'lokasi'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,				
			],'jumlah_shift'          => [
				'type'           => 'INT',
				'constraint'     => 5,				
			],'harga_shift'          => [
				'type'           => 'INT',
				'constraint'     => 50,				
			],'total_harga'          => [
				'type'           => 'INT',
				'constraint'     => 5,				
			],'sopir'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,				
			],'status_kembali'    => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,				
			],'pembayaran'    => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,				
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('transaksi');
	}

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
