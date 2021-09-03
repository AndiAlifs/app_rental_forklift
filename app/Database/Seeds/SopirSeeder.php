<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SopirSeeder extends Seeder
{
	public function run()
	{
		$nama = ["Pak Apri", "Pak Risbat", "Pak Ahim"]; 
		$model = model('SopirModel');
		foreach ($nama as $value) {
			$model->insert(["nama" => $value]);
		}
	}
}
