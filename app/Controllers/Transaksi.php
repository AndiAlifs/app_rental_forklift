<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
	public function index()
	{	
		if (isset($_GET['dari']) && isset($_GET['dari'])) {
			$data['transaksi'] = model('transaksiModel')
									->where('tanggal_rental >=',$_GET['dari'])
									->where('tanggal_rental <=',$_GET['sampai'])
									->get()->getResult();
		} else {
			$data['transaksi'] = model('transaksiModel')->get()->getResult();
		}
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\data_transaksi',$data);
		echo view('template_admin\footer');
	}

	public function edit($id)
	{
		$_POST = model('TransaksiModel')->find($id);
		$forklift = model('ForkliftModel')->find($_POST['id_forklift']);
		
		$data = [
			'id' => $_POST['id'],
			'tonase_forklift' => $forklift['tonase'],
			'merk_forklift' => $forklift['merk'],
			'customer' => $_POST['customer'],
			'lokasi' => $_POST['lokasi'],
			'tanggal_rental' => $_POST['tanggal_rental'],
			'tanggal_selesai' => $_POST['tanggal_kembali'],
			'jumlah_shift' => $_POST['jumlah_shift'],
			'harga_shift' => $_POST['harga_shift'],
			'total_harga' => $_POST['total_harga'],
			'waktu_rental' => $_POST['waktu_rental'],
			'sopir' => $_POST['sopir'],
			'status_kembali' => $_POST['status_kembali'],
			'pembayaran' => $_POST['metode'],
		];
		
		$data['sopir_list'] = model('SopirModel')->get()->getResult();
		echo view('template_admin\header');
		echo view('template_admin\sidebar');
		echo view('Admin\edit_transaksi',$data);
		echo view('template_admin\footer');
	}

	public function edit_proses()
	{
		$data = [
			'tonase_forklift' => $_POST['tonase'],
			'merk_forklift' => $_POST['merk'],
			'customer' => $_POST['customer'],
			'lokasi' => $_POST['lokasi'],
			'tanggal_rental' => $_POST['tanggal_rental'],
			'tanggal_kembali' => $_POST['tanggal_selesai'],
			'jumlah_shift' => $_POST['jumlah_shift'],
			'harga_shift' => $_POST['harga_shift'],
			'total_harga' => $_POST['total_harga'],
			'waktu_rental' => $_POST['waktu_rental'],
			'sopir' => $_POST['sopir'],
			'status_kembali' => $_POST['status_kembali'],
			'pembayaran' => $_POST['metode'],
		];

		model('TransaksiModel')->update($_POST['id'],$data);
		session()->setFlashdata('pesan','Data Berhasil Diubah');
		return redirect()->to('admin/transaksi');
	}

	public function store()
	{	
		$data = [
			'id_forklift' => intval( $_POST['id']),
			'customer' => $_POST['pemesan'],
			'lokasi' => $_POST['lokasi'],
			'tanggal_rental' => $_POST['tanggal'],
			'jumlah_shift' => intval($_POST['shift']),
			'harga_shift' => intval($_POST['harga']),
			'total_harga' => intval($_POST['totalHarga']),
			'waktu_rental' => $_POST['waktu'].':00',
			'sopir' => $_POST['sopir'],
			'status_kembali' => 'Belum Kembali',
			'pembayaran' => $_POST['metode'],
		];
		
		model('TransaksiModel')->insert($data);
		$newTransaksi = model('TransaksiModel')->orderBy('id','DESC')->limit(1)->get()->getResult();
		
		$data = [
			'id_transaksi' => $newTransaksi[0]->id,
		];

		model('PembayaranModel')->save($data);
		
		model('ForkliftModel')->update($_POST['id'],['status' => 0]);

		session()->setFlashdata('pesan','Reservasi Berhasil Dibuat');
		return redirect()->to('/');
	}

	public function delete($id)
	{
		model('TransaksiModel')->delete($id);
		session()->setFlashdata('pesan','Data Berhasil Dihapus');
		return redirect()->to('admin/transaksi');
	}

	public function generate_pdf()
	{	
		if (isset($_GET['dari']) && isset($_GET['dari'])) {
			$data['transaksi'] = model('transaksiModel')
									->where('tanggal_rental >=',$_GET['dari'])
									->where('tanggal_rental <=',$_GET['sampai'])
									->get()->getResult();
		} else {
			$data['transaksi'] = model('transaksiModel')->get()->getResult();
		}
		
		$dompdf = new \Dompdf\Dompdf();
		$dompdf->loadHtml(view('admin/laporan',$data));
        $dompdf->setPaper('A4', 'landscape'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream(); //nama file pdf

	}
}
