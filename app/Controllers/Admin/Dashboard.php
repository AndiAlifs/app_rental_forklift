<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{	
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\dashboard');
		echo view('template_admin\footer');
	}
}
