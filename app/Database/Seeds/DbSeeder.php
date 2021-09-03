<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DbSeeder extends Seeder
{
	public function run()
	{
		$this->call('Admin');
		$this->call('Kasir');
		$this->call('SopirSeeder');
		$this->call('Forklift');
	}
}
