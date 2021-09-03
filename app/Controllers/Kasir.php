<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kasir extends BaseController
{
	public function index()
	{
		$data['forklift'] = model('ForkliftModel')->get()->getResult();

		echo view('Kasir/header');
		echo view('Kasir/template_kasir', $data);
	}

	public function rental($id)
	{
		if (session()->get('login_kasir')) {
			$forklift = model('ForkliftModel')->find($id);
			$data['id'] = $forklift['id'];
			$data['tonase'] = $forklift['tonase'];
			$data['merk'] = $forklift['merk'];
			$data['harga'] = $forklift['harga'];
			$data['status'] = $forklift['status'];
			$data['images'] = $forklift['images'];

			$data['sopir'] = model('SopirModel')->get()->getResult();

			echo view('Kasir/header');
			echo view('Kasir/form_rental', $data);
		} else {
			session()->setFlashdata('pesan', 'Login Kasir Terlebih Dahulu');
			return redirect()->to('kasir/login');
		}
	}

	public function login()
	{
		echo view('Kasir/login');
	}

	public function login_proses()
	{
		$kasir = model('KasirModel')->find($_POST['username']);
		if ($kasir) {
			if ($kasir['password'] == md5($_POST['password'])) {
				session()->set('login_kasir',TRUE);
				session()->setFlashdata('pesan', 'Login Kasir Berhasil');
				return redirect()->to('/');
			} else {
				session()->setFlashdata('pesan', 'Login Kasir Gagal');
				return redirect()->to('kasir/login');
			}
		} else {
			session()->setFlashdata('pesan', 'Login Kasir Gagal');
			return redirect()->to('kasir/login');
		}
	}

	public function logout()
	{
		session()->remove('login_kasir');
		session()->setFlashdata('pesan', 'Logout Kasir Berhasil');
		return redirect()->to('/');
	}
}
