<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
	public function run()
	{
		$data = [
			'nama_admin' => 'Admin',
			'username' => 'admin',
			'password' => md5('admin')
		];

		$this->db->table('admin')->insert($data);
	}
}
