<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function login()
	{
		echo view('Admin/login');
	}

	public function login_proses()
	{
		$admin = model('AdminModel')->find($_POST['username']);
		if ($admin) {
			if ($admin['password'] == md5($_POST['password'])) {
				session()->set('login_admin',TRUE);
				session()->setFlashdata('pesan', 'Login admin Berhasil');
				return redirect()->to('/admin/forklift');
			} else {
				session()->setFlashdata('pesan', 'Login admin Gagal');
				return redirect()->to('admin/login');
			}
		} else {
			session()->setFlashdata('pesan', 'Login admin Gagal');
			return redirect()->to('admin/login');
		}
	}

	public function logout()
	{
		session()->remove('login_admin');
		session()->setFlashdata('pesan', 'Logout admin Berhasil');
		return redirect()->to('/');
	}
}
