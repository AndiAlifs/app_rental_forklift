<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sopir extends BaseController
{
	public function index()
	{
		$data['sopir'] = model('SopirModel')->get()->getResult();
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\data_sopir',$data);
		echo view('template_admin\footer');
	}

	public function tambah()
	{
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\tambah_sopir');
		echo view('template_admin\footer');
	}

	public function tambah_proses()
	{
		model('SopirModel')->insert(['nama' => $_POST['nama']]);
		session()->setFlashdata('pesan','Data Berhasil Disimpan');
		return redirect()->to('admin/sopir');	
	}

	public function delete($id)
	{
		model('SopirModel')->where('id',$id)->delete();
		session()->setFlashdata('pesan','Data Berhasil Dihapus');
		return redirect()->to('admin/sopir');
	}
}
