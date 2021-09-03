<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Forklift extends Seeder
{
	public function run()
	{
		$data = [[
			'tonase' => 3,
			'harga' => 800000,
			'merk' => 'DETANK',
			'images' => 'images/forklift/3_DETANK.jpg'
		],[
			'tonase' => 5,
			'harga' => 1250000,
			'merk' => 'CLARK',
			'images' => 'images/forklift/5_CLARK.jpg'
		],[
			'tonase' => 8,
			'harga' => 1400000,
			'merk' => 'TCM',
			'images' => 'images/forklift/8_TCM.jpg'
		],[
			'tonase' => 10,
			'harga' => 1500000,
			'merk' => 'TCM',
			'images' => 'images/forklift/10_TCM.jpg'
		],[
			'tonase' => 10,
			'harga' => 1500000,
			'merk' => 'TCM',
			'images' => 'images/forklift/10_TCM.jpg'
		],[
			'tonase' => 15,
			'harga' => 2500000,
			'merk' => 'TCM',
			'images' => 'images/forklift/15_TCM.jpg'
		]];

		foreach ($data as $data1) {
			$this->db->table('forklift')->insert($data1);
		}
	}
}
