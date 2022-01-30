<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PembayaranController extends BaseController
{	
	public function index()
	{	
		$db      = \Config\Database::connect();

		$data['pembayaran'] = $db->table('pembayaran')
										->select('pembayaran.id, customer, tanggal_rental as tanggal_transaksi,
													waktu_rental as waktu_transaksi,total_harga,status_bayar, id_transaksi')
										->join('transaksi','pembayaran.id_transaksi = transaksi.id')
										->get()
										->getResult();

		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\data_pembayaran',$data);
		echo view('template_admin\footer');
	}

	public function lunas($id)
	{
		model('PembayaranModel')->update($id,['status_bayar' => 'Sudah Lunas']);

		session()->setFlashdata('pesan','Pesanan Ditandai Lunas');
		return redirect()->to('/admin/pembayaran');

	}

	public function belum_lunas($id)
	{
		model('PembayaranModel')->update($id,['status_bayar' => 'Belum Lunas']);

		session()->setFlashdata('pesan','Pesanan Ditandai Belum Lunas');
		return redirect()->to('/admin/pembayaran');

	}

	public function edit($id)
	{
		return redirect()->to('admin/transaksi/edit/'.$id);
	}

	public function delete($id)
	{
		model('PembayaranModel')->delete($id);
		session()->setFlashdata('pesan','Data Berhasil Dihapus');
		return redirect()->to('admin/pembayaran');
	}
}
