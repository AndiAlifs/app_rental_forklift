<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kasir extends Seeder
{
	public function run()
	{
		$data = [
			'username' => 'kasir',
			'password' => md5('kasir')
		];

		$this->db->table('kasir')->insert($data);
	}
}
