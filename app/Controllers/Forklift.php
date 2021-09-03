<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Cookie\Cookie;

class Forklift extends BaseController
{
	public function index()
	{	
		if (session()->get('login_admin')) {
			$data['forklift'] = model('ForkliftModel')->get()->getResult();
			echo view('template_admin\header');
			echo view('template_admin\sidebar');
			echo view('Admin\data_forklift',$data);
			echo view('template_admin\footer');
		} else {
			session()->setFlashdata('pesan', 'Login Admin Terlebih Dahulu');
			return redirect()->to('admin/login');
		}
		
	}

	public function tambah()
	{
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\tambah_forklift');
		echo view('template_admin\footer');
	}

	public function detail($id)
	{
		$forklift = model('ForkliftModel')->find($id);
		$data['id'] = $forklift['id'];
		$data['tonase'] = $forklift['tonase'];
		$data['merk'] = $forklift['merk'];
		$data['harga'] = $forklift['harga'];
		$data['status'] = $forklift['status'];
		$data['images'] = $forklift['images'];

		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\detail_forklift',$data);
		echo view('template_admin\footer');
	}

	public function edit($id)
	{
		$forklift = model('ForkliftModel')->find($id);
		$data['id'] = $forklift['id'];
		$data['tonase'] = $forklift['tonase'];
		$data['merk'] = $forklift['merk'];
		$data['harga'] = $forklift['harga'];
		$data['status'] = $forklift['status'];
		$data['images'] = $forklift['images'];

		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\edit_forklift',$data);
		echo view('template_admin\footer');
	}

	public function edit_proses()
	{
		$id = $_POST['id'];
		$tonase = $_POST['tonase'];
		$merk = $_POST['merk'];
		$harga = $_POST['harga'];
		$status = $_POST['status'];
		$images = $_POST['images'];

		$data = [
			'tonase' => $tonase,
			'merk' => $merk,
			'harga' => $harga,
			'status' => $status,
		];

		model('ForkliftModel')->update($id,$data);
		session()->setFlashdata('pesan','Data Berhasil Diubah');
		return redirect()->to('admin/forklift');
	}

	public function tambah_proses()
	{	
		$tonase = $_POST['tonase'];
		$merk = $_POST['merk'];
		$harga = $_POST['harga'];
		$status = $_POST['status'];

		$data = [
			'tonase' => $tonase,
			'merk' => $merk,
			'harga' => $harga,
			'status' => $status,
			'images' => 'images/forklift/8_TCM.jpg',
		];

		model('ForkliftModel')->insert($data);
		session()->setFlashdata('pesan','Data Berhasil Disimpan');
		return redirect()->to('admin/forklift');
	}

	public function delete($id)
	{
		model('ForkliftModel')->delete($id);
		session()->setFlashdata('pesan','Data Berhasil Dihapus');
		return redirect()->to('admin/forklift');
	}
}
