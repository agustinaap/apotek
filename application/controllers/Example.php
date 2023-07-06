<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'functions.php';
/**
* This is Example Controller
*/
class Example extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('apotek_data');
        $this->load->database();
        $this->load->helper(array('form', 'url'));
       
        $data['nullstock'] = $this->apotek_data->countstock();
        $data['nullex'] = $this->apotek_data->countex();
        $this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', $data, true);
	}

	

	function index() {
		$data['stokjenisobat'] = $this->apotek_data->count_jenis_obat();
		$data['stokjenisbhp'] = $this->apotek_data->count_jenis_bhp();
		$data['stokobat'] = $this->apotek_data->count_obat();
		$data['stokbhp'] = $this->apotek_data->count_bhp();
		$data['stokpemasok'] = $this->apotek_data->count_pemasok();
		$data['stockobat'] = $this->apotek_data->count_med();
		$data['stockkat'] = $this->apotek_data->count_cat();
		$data['sup'] = $this->apotek_data->count_sup();
		$data['unit'] = $this->apotek_data->count_unit();
		$data['inv'] = $this->apotek_data->count_inv();
		$data['pur'] = $this->apotek_data->count_pur();
		$data['totpur'] = $this->apotek_data->count_totpur();
		$data['totinv'] = $this->apotek_data->count_totinv();

		$this->template->write('title', 'Beranda', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/mypage', $data, true);

		$this->template->render();
	}

	

	function dashboard() {
		$this->template->write('title', 'Dashboard', TRUE);
		$this->template->write('header', 'Dashboard');
		$this->template->write_view('content', 'tes/dashboard', '', true);

		$this->template->render();
	}

	

	function table_exp() {
		$data['table_exp'] = $this->apotek_data->expired()->result();
		$data['table_alex'] = $this->apotek_data->almostex()->result();
		$this->template->write('title', 'Obat kedaluwarsa', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_exp', $data, true);

		$this->template->render();

	}

	function table_stock() {
		$data['table_stock'] = $this->apotek_data->outstock()->result();
		$data['table_alstock'] = $this->apotek_data->almostout()->result();
		$this->template->write('title', 'Obat Habis', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_stock', $data,  true);

		$this->template->render();
	}

	function form_cat() {
		$this->template->write('title', 'Tambah Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_cat', '', true);

		$this->template->render();
	}

	function form_unit() {
		$this->template->write('title', 'Tambah Unit', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_unit', '', true);

		$this->template->render();
	}

	function form_med() {
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_sup'] = $this->apotek_data->get_supplier();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$this->template->write('title', 'Tambah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_med', $data, true);

		$this->template->render();
	}


	function table_med() {
		
		$data['table_med'] = $this->apotek_data->medicine()->result();
		$this->template->write('title', 'Lihat Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_med', $data, true);

		$this->template->render();
	}

	function table_obat() {
		$data['table_obat'] = $this->apotek_data->get_obat()->result();
		$data['list_obat'] = $this->apotek_data->obat()->result();
		$this->template->write('title', 'Lihat Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_obat', $data, true);

		$this->template->render();
	}

	function table_bhp() {
		$data['table_bhp'] = $this->apotek_data->get_bhp()->result();
		$data['list_bhp'] = $this->apotek_data->bhp()->result();
		$this->template->write('title', 'Lihat BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_bhp', $data, true);

		$this->template->render();
	}

	function table_unit() {
		
		$data['table_unit'] = $this->apotek_data->unit()->result();
		$this->template->write('title', 'Lihat Unit', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_unit', $data, true);

		$this->template->render();
		
	}


	function invoice_report() {		
		$this->template->write('title', 'Grafik Penjualan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/invoice_report', true);

		$this->template->render();
		
	}

	function purchase_report() {

		$this->template->write('title', 'Grafik Pembelian', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/purchase_report', true);

		$this->template->render();
		
	}

	function report() {
		$data['totpur'] = $this->apotek_data->count_totpur();
		$data['totinv'] = $this->apotek_data->count_totinv();
		$data['report'] = $this->apotek_data->get_report();
		$this->template->write('title', 'Laporan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/report', $data, true);

		$this->template->render();
		
	}

	function table_cat() {
		
		$data['table_cat'] = $this->apotek_data->category()->result();
		$this->template->write('title', 'Lihat Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_cat', $data, true);

		$this->template->render();
	}

	function table_sup() {
		$data['table_sup'] = $this->apotek_data->supplier()->result();
		
		$this->template->write('title', 'Lihat Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_sup', $data, true);

		$this->template->render();
	}

	function table_user() {
		$data['table_user'] = $this->apotek_data->user()->result();
		
		$this->template->write('title', 'Lihat Pengguna', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_user', $data, true);

		$this->template->render();
	}

	function table_jenis_obat() {
		$data['table_jenis_obat'] = $this->apotek_data->jenis_obat()->result();
		
		$this->template->write('title', 'Lihat Jenis Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_jenis_obat', $data, true);

		$this->template->render();
	}

	function table_jenis_bhp() {
		$data['table_jenis_bhp'] = $this->apotek_data->jenis_bhp()->result();
		
		$this->template->write('title', 'Lihat Jenis BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_jenis_bhp', $data, true);

		$this->template->render();
	}

	function table_pemasok_obat() {
		$data['table_pemasok_obat'] = $this->apotek_data->pemasok_obat()->result();
		
		$this->template->write('title', 'Lihat Pemasok Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_pemasok_obat', $data, true);

		$this->template->render();
	}

	function table_hutang() {
		$data['table_hutang'] = $this->apotek_data->hutang()->result();
		
		$this->template->write('title', 'Lihat Hutang', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_hutang', $data, true);

		$this->template->render();
	}

	function form_sup() {
		$this->template->write('title', 'Tambah Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_sup', '', true);

		$this->template->render();
	}
	

	function form_user() {
		$this->template->write('title', 'Tambah User', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_user', '', true);

		$this->template->render();
	}

	function form_jenis_obat() {
		$this->template->write('title', 'Tambah Jenis Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_jenis_obat', '', true);

		$this->template->render();
	}

	function form_jenis_bhp() {
		$this->template->write('title', 'Tambah Jenis BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_jenis_bhp', '', true);

		$this->template->render();
	}

	function form_obat() {
		$data['table_jenis_obat'] = $this->apotek_data->jenis_obat()->result();
		$this->template->write('title', 'Tambah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_obat', $data, true);

		$this->template->render();
	}

	function form_bhp() {
		$data['table_jenis_bhp'] = $this->apotek_data->jenis_bhp()->result();
		$this->template->write('title', 'Tambah BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_bhp', $data, true);

		$this->template->render();
	}
	
	function form_pemasok_obat() {
		$this->template->write('title', 'Tambah Pemasok Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_pemasok_obat', '', true);

		$this->template->render();
	}
	function form_pembelian_obat() {
		$data['table_obat'] = $this->apotek_data->obat()->result();
		$data['table_bhp'] = $this->apotek_data->bhp()->result();
		$data['table_pemasok_obat'] = $this->apotek_data->pemasok_obat()->result();
		$this->template->write('title', 'Tambah Pembelian Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_pembelian_obat', '', true);

		$this->template->render();
	}

	function form_invoice() {
		$data['table_med'] = $this->apotek_data->medicine()->result();
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_med'] = $this->apotek_data->get_medicine();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$this->template->write('title', 'Tambah Penjualan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_invoice', $data, true);

		$this->template->render();
	}


	function form_purchase() {
		$data['table_med'] = $this->apotek_data->medicine()->result();
		$data['get_sup'] = $this->apotek_data->get_supplier();
		
		$data['get_med'] = $this->apotek_data->get_medicine();
		
		$this->template->write('title', 'Tambah Pembelian', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_purchase', $data, true);

		$this->template->render();
	}

	function table_purchase() {
		$data['table_purchase'] = $this->apotek_data->purchase()->result();
		
		$this->template->write('title', 'Lihat Pembelian', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_purchase', $data, true);

		$this->template->render();
	}

	function getmedbysupplier(){
        $nama_pemasok=$this->input->post('nama_pemasok');
        $data=$this->apotek_data->getmedbysupplier($nama_pemasok);
        echo json_encode($data);
    }


	

	function form_customer() {
		$this->template->write('title', 'Tambah Pelanggan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/form_customer', '', true);

		$this->template->render();
	}

	

	function table_customer() {
		$this->template->write('title', 'Lihat Pelanggan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_customer', '', true);

		$this->template->render();
	}

	function table_invoice() {
		$data['table_invoice'] = $this->apotek_data->invoice()->result();
		$this->template->write('title', 'Lihat Penjualan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/table_invoice', $data, true);

		$this->template->render();
	}



	function add_medicine()
	{
		$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = date("Y-m-d",strtotime($this->input->post('kedaluwarsa')));
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$nama_pemasok = $this->input->post('nama_pemasok');
 
		$data = array(
			'nama_obat' => $nama_obat,
			'penyimpanan' => $penyimpanan,
			'stok' => $stok,
			'unit' => $unit,
			'nama_kategori' => $nama_kategori,
			'kedaluwarsa' => $kedaluwarsa,
			'des_obat' => $des_obat,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			'nama_pemasok' => $nama_pemasok,
			
			);
		$this->apotek_data->insert_data($data,'table_med');

		$this->session->set_flashdata('med_added', 'Obat berhasil ditambahkan');
		redirect('example/table_med');

	}


	function add_category(){
		$nama_kategori = $this->input->post('nama_kategori');
		$des_kat = $this->input->post('des_kat');
 
		$data = array(
			'nama_kategori' => $nama_kategori,
			'des_kat' => $des_kat,
			
			);
		$this->apotek_data->insert_data($data,'table_cat');

		$this->session->set_flashdata('cat_added', 'Kategori berhasil ditambahkan');
		redirect('example/table_cat');
	}

	function add_unit(){
		$unit = $this->input->post('unit');
		$data = array(
			'unit' => $unit,
			
			
			);
		$this->apotek_data->insert_data($data,'table_unit');

		$this->session->set_flashdata('unit_added', 'Unit berhasil ditambahkan');
		redirect('example/table_unit');
	}


	function add_supplier(){
		$nama_pemasok = $this->input->post('nama_pemasok');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
 
		$data = array(
			'nama_pemasok' => $nama_pemasok,
			'alamat' => $alamat,
			'telepon' => $telepon,
			);
		$this->apotek_data->insert_data($data,'table_sup');

		$this->session->set_flashdata('sup_added', 'Pemasok berhasil ditambahkan');
		redirect('example/table_sup');
	}


	function add_user(){
		$nama_pengguna = $this->input->post('nama_pengguna');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$password = $this->input->post('password');
		$password_confirmation = $this->input->post('password_confirmation');

		if ($password === $password_confirmation) {
			$data = array(
				'nama_pengguna' => $nama_pengguna,
				'email' => $email,
				'level_pengguna' => $level,
				'kata_sandi' => $password,
				);
			
			$status_add = $this->apotek_data->check_data_if_available($nama_pengguna,'tabel_pengguna','nama_pengguna');
			
			if ($status_add == 200) {
				$this->apotek_data->insert_data($data,'tabel_pengguna');
				$this->session->set_flashdata('user_added', 'Pengguna berhasil ditambahkan');
				redirect('example/table_user');
			}
			else if ($status_add == 500) {
				$this->session->set_flashdata('password_not_match', "Username yang anda masukkan sudah terdaftar, mohon coba username yang lain");
				$this->session->set_flashdata('add_username', $nama_pengguna);
				$this->session->set_flashdata('add_email', $email);
				$this->session->set_flashdata('add_level', $level);
				redirect('example/form_user/');
			}
		}
		else {
			$this->session->set_flashdata('password_not_match', "Password konfirmasi tidak sesuai, mohon coba lagi");
			$this->session->set_flashdata('add_username', $nama_pengguna);
			$this->session->set_flashdata('add_email', $email);
			$this->session->set_flashdata('add_level', $level);
			redirect('example/form_user/');
		}	
	}

	function add_jenis_obat(){
		$jenis = $this->input->post('jenis');

		$data = array('nama' => $jenis);
			
		$status_add = $this->apotek_data->check_data_if_available($jenis,'tabel_jenis_obat','nama');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_jenis_obat');
			$this->session->set_flashdata('success', 'Jenis obat berhasil ditambahkan');
			redirect('example/table_jenis_obat');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Jenis obat yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_jenis', $jenis);
			redirect('example/form_jenis_obat/');
		}
	}

	function add_jenis_bhp(){
		$jenis = $this->input->post('jenis');

		$data = array('nama' => $jenis);
			
		$status_add = $this->apotek_data->check_data_if_available($jenis,'tabel_jenis_bhp','nama');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_jenis_bhp');
			$this->session->set_flashdata('success', 'Jenis BHP berhasil ditambahkan');
			redirect('example/table_jenis_bhp');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Jenis BHP yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_jenis', $jenis);
			redirect('example/form_jenis_bhp/');
		}
	}

	function add_obat(){
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$merk = $this->input->post('merk');
		$jenis = $this->input->post('jenis');
		$bpjs = $this->input->post('bpjs');

		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $nama_obat,
			'nama_merk' => $merk,
			'jenis_obat' => $jenis,
			'bpjs' => $bpjs
		);
			
		$status_add = $this->apotek_data->check_data_if_available($id_obat,'tabel_obat','id_obat');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_obat');
			$this->session->set_flashdata('success', 'Obat berhasil ditambahkan');
			redirect('example/table_obat');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Obat yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_id_obat', $id_obat);
			$this->session->set_flashdata('add_nama_obat', $nama_obat);
			$this->session->set_flashdata('add_merk_obat', $merk);
			$this->session->set_flashdata('add_jenis', $jenis);
			$this->session->set_flashdata('add_bpjs', $bpjs);
			redirect('example/form_obat/');
		}
	}

	function add_bhp(){
		$id_bhp = $this->input->post('id_bhp');
		$nama_bhp = $this->input->post('nama_bhp');
		$jenis = $this->input->post('jenis');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_bhp' => $id_bhp,
			'nama_bhp' => $nama_bhp,
			'jenis_bhp' => $jenis,
			'keterangan' => $keterangan
		);
			
		$status_add = $this->apotek_data->check_data_if_available($id_bhp,'tabel_bhp','id_bhp');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_bhp');
			$this->session->set_flashdata('success', 'BHP berhasil ditambahkan');
			redirect('example/table_bhp');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Bahan yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_id_bhp', $id_bhp);
			$this->session->set_flashdata('add_nama_bhp', $nama_bhp);
			$this->session->set_flashdata('add_jenis', $jenis);
			$this->session->set_flashdata('add_ket', $keterangan);
			redirect('example/form_bhp/');
		}
	}

	function add_pemasok_obat(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'nama_pemasok' => $nama,
			'alamat' => $alamat,
			'no_telepon' => $telepon
		);
			
		$status_add = $this->apotek_data->check_data_if_available($nama,'tabel_pemasok','nama_pemasok');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_pemasok');
			$this->session->set_flashdata('success', 'Pemasok obat berhasil ditambahkan');
			redirect('example/table_pemasok_obat');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Pemasok obat yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_nama', $nama);
			$this->session->set_flashdata('add_alamat', $alamat);
			$this->session->set_flashdata('add_telepon', $telepon);
			redirect('example/form_pemasok_obat/');
		}
	}
	function add_pembelian_obat(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'nama_pemasok' => $nama,
			'alamat' => $alamat,
			'no_telepon' => $telepon
		);
			
		$status_add = $this->apotek_data->check_data_if_available($nama,'tabel_pemasok','nama_pemasok');
		
		if ($status_add == 200) {
			$this->apotek_data->insert_data($data,'tabel_pemasok');
			$this->session->set_flashdata('success', 'Pemasok obat berhasil ditambahkan');
			redirect('example/table_pemasok_obat');
		}
		else if ($status_add == 500) {
			$this->session->set_flashdata('failed_save_data', "Pemasok obat yang anda masukkan sudah terdaftar, silakan masukkan inputan yang lain");
			$this->session->set_flashdata('add_nama', $nama);
			$this->session->set_flashdata('add_alamat', $alamat);
			$this->session->set_flashdata('add_telepon', $telepon);
			redirect('example/form_pemasok_obat/');
		}
	}

	function add_invoice(){
		 
			$nama_pembeli = $this->input->post('nama_pembeli');
			$tgl_beli = date("Y-m-d",strtotime($this->input->post('tgl_beli')));
			$grandtotal = $this->input->post('grandtotal');
			$ref = generateRandomString();
			$nama_obat = $this->input->post('nama_obat');
			$harga_jual = $this->input->post('harga_jual');
			$banyak = $this->input->post('banyak');
			$subtotal = $this->input->post('subtotal');

		foreach($nama_obat as $key=>$val){
		   
		$data[] = array(
				'nama_pembeli' => $nama_pembeli,
				'tgl_beli' => $tgl_beli,
				'grandtotal' => $grandtotal,
				'ref' => $ref,
				'nama_obat' => $val,
				'harga_jual' => $harga_jual[$key],
				'banyak' => $banyak[$key],
				'subtotal' => $subtotal[$key],
				
				);

		$this->db->set('stok', 'stok-'.$banyak[$key], FALSE);
	    $this->db->where('nama_obat', $val);
	    $updated = $this->db->update('table_med');
		
		}
		
		$this->db->insert_batch('table_invoice', $data);

		$this->session->set_flashdata('inv_added', 'Penjualan berhasil ditambahkan');
		redirect('example/table_invoice');
	}

	function add_purchase(){
		 
			$nama_pemasok = $this->input->post('nama_pemasok');
			$tgl_beli = date("Y-m-d",strtotime($this->input->post('tgl_beli')));
			$grandtotal = $this->input->post('grandtotal');
			$ref = generateRandomString();
			$nama_obat = $this->input->post('nama_obat');
			$harga_beli = $this->input->post('harga_beli');
			$banyak = $this->input->post('banyak');
			$subtotal = $this->input->post('subtotal');

		foreach($nama_obat as $key=>$val){
		   
		$data[] = array(
				'nama_pemasok' => $nama_pemasok,
				'tgl_beli' => $tgl_beli,
				'grandtotal' => $grandtotal,
				'ref' => $ref,
				'nama_obat' => $val,
				'harga_beli' => $harga_beli[$key],
				'banyak' => $banyak[$key],
				'subtotal' => $subtotal[$key],
				
				);

		$this->db->set('stok', 'stok+'.$banyak[$key], FALSE);
	    $this->db->where('nama_obat', $val);
	    $updated = $this->db->update('table_med');
		
		}
		
		$this->db->insert_batch('table_purchase', $data);
		$this->session->set_flashdata('pur_added', 'Pembelian berhasil ditambahkan');
		redirect('example/table_purchase');
		
	}



	function invoice_page($ref) {
		$where = array('ref' => $ref);
		$data['table_invoice'] = $this->apotek_data->show_data($where, 'table_invoice')->result();
		$data['show_invoice'] = $this->apotek_data->show_invoice($where, 'table_invoice')->result();
		$this->template->write('title', 'Invoice Penjualan', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/invoice', $data, true);

		$this->template->render();
	}


	function purchase_page($ref) {
		$where = array('ref' => $ref);
		$data['table_purchase'] = $this->apotek_data->show_data($where, 'table_purchase')->result();
		$data['show_invoice'] = $this->apotek_data->show_invoice($where, 'table_purchase')->result();
		$this->template->write('title', 'Invoice Pembelian', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/purchase', $data, true);

		$this->template->render();
	}


	function edit_form_cat($id_kat) {
		$where = array('id_kat' => $id_kat);
		$data['table_cat'] = $this->apotek_data->edit_data($where,'table_cat')->result();
		$this->template->write('title', 'Ubah Kategori', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_cat', $data, true);

		$this->template->render();
	}

	function update_category(){
		$id_kat = $this->input->post('id_kat');
		$nama_kategori = $this->input->post('nama_kategori');
		$des_kat = $this->input->post('des_kat');

		$data = array(
			'nama_kategori' => $nama_kategori,
			'des_kat' => $des_kat,
		);

		$where = array(
			'id_kat' => $id_kat
		);

		$this->apotek_data->update_data($where,$data,'table_cat');

		$this->session->set_flashdata('cat_added', 'Data kategori berhasil diperbarui');
		redirect('example/table_cat');
	}

	function edit_form_med($id_obat) {
		$data['get_cat'] = $this->apotek_data->get_category();
		$data['get_sup'] = $this->apotek_data->get_supplier();
		$data['get_unit'] = $this->apotek_data->get_unit();
		$where = array('id_obat' => $id_obat);
		$data['table_med'] = $this->apotek_data->edit_data($where,'table_med')->result();
		$this->template->write('title', 'Ubah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_med', $data, true);

		$this->template->render();
	}

	function update_medicine(){
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$penyimpanan = $this->input->post('penyimpanan');
		$stok = $this->input->post('stok');
		$unit = $this->input->post('unit');
		$nama_kategori = $this->input->post('nama_kategori');
		$kedaluwarsa = date("Y-m-d",strtotime($this->input->post('kedaluwarsa')));
		$des_obat = $this->input->post('des_obat');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$nama_pemasok = $this->input->post('nama_pemasok');
	
		$data = array(
			'nama_obat' => $nama_obat,
			'penyimpanan' => $penyimpanan,
			'stok' => $stok,
			'unit' => $unit,
			'nama_kategori' => $nama_kategori,
			'kedaluwarsa' => $kedaluwarsa,
			'des_obat' => $des_obat,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			'nama_pemasok' => $nama_pemasok,
		);

		$where = array(
			'id_obat' => $id_obat
		);

		$this->apotek_data->update_data($where,$data,'table_med');
		$this->session->set_flashdata('med_added', 'Data obat berhasil diperbarui');
		redirect('example/table_med');
	}


	function edit_form_sup($id_pem) {
		$where = array('id_pem' => $id_pem);
		$data['table_sup'] = $this->apotek_data->edit_data($where,'table_sup')->result();
		$this->template->write('title', 'Ubah Pemasok', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_sup', $data, true);

		$this->template->render();
	}


	function edit_form_user($id_user) {
		$where = array('id_pengguna' => $id_user);
		$data['tabel_pengguna'] = $this->apotek_data->edit_data($where,'tabel_pengguna')->result();
		$this->template->write('title', 'Ubah Pengguna', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_user', $data, true);

		$this->template->render();
	}

	function edit_form_jenis_obat($id) {
		$where = array('id' => $id);
		$data['tabel_jenis_obat'] = $this->apotek_data->edit_data($where,'tabel_jenis_obat')->result();
		$this->template->write('title', 'Ubah Jenis Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_jenis_obat', $data, true);

		$this->template->render();
	}

	function edit_form_jenis_bhp($id) {
		$where = array('id' => $id);
		$data['tabel_jenis_bhp'] = $this->apotek_data->edit_data($where,'tabel_jenis_bhp')->result();
		$this->template->write('title', 'Ubah Jenis BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_jenis_bhp', $data, true);

		$this->template->render();
	}

	function edit_form_obat($id) {
		$where = array('id_obat' => $id);
		$data['tabel_obat'] = $this->apotek_data->edit_data($where,'tabel_obat')->result();
		$data['table_jenis_obat'] = $this->apotek_data->jenis_obat()->result();
		$this->template->write('title', 'Ubah Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_obat', $data, true);

		$this->template->render();
	}

	function edit_form_bhp($id) {
		$where = array('id_bhp' => $id);
		$data['tabel_bhp'] = $this->apotek_data->edit_data($where,'tabel_bhp')->result();
		$data['table_jenis_bhp'] = $this->apotek_data->jenis_bhp()->result();
		$this->template->write('title', 'Ubah BHP', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_bhp', $data, true);

		$this->template->render();
	}

	function edit_form_pemasok_obat($id) {
		$where = array('id_pemasok' => $id);
		$data['tabel_pemasok'] = $this->apotek_data->edit_data($where,'tabel_pemasok')->result();
		$this->template->write('title', 'Ubah Pemasok Obat', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_pemasok_obat', $data, true);

		$this->template->render();
	}

	function edit_form_unit($id_unit) {
		$where = array('id_unit' => $id_unit);
		$data['table_unit'] = $this->apotek_data->edit_data($where,'table_unit')->result();
		$this->template->write('title', 'Ubah Unit', TRUE);
		$this->template->write('header', 'Sistem Informasi Apotek');
		$this->template->write_view('content', 'tes/edit_form_unit', $data, true);

		$this->template->render();
	}


	function update_supplier(){
		$id_pem = $this->input->post('id_pem');
		$nama_pemasok = $this->input->post('nama_pemasok');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'nama_pemasok' => $nama_pemasok,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);

		$where = array(
			'id_pem' => $id_pem
		);

		$this->apotek_data->update_data($where,$data,'table_sup');

		$this->session->set_flashdata('sup_added', 'Data pemasok berhasil diperbarui');
		redirect('example/table_sup');
	}


	function update_user(){
		$id_pengguna = $this->input->post('id_pengguna');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$password = $this->input->post('password');
		$password_old = $this->input->post('password_old');
		$password_new = $this->input->post('password_new');
		$password_confirmation = $this->input->post('password_confirmation');

		if ($password_old === $password) {
			if ($password_new === $password_confirmation) {
				$data = array(
					'nama_pengguna' => $nama_pengguna,
					'email' => $email,
					'level_pengguna' => $level,
					'kata_sandi' => $password_new,
				);
		
				$where = array(
					'id_pengguna' => $id_pengguna
				);
		
				$this->apotek_data->update_data($where,$data,'tabel_pengguna');
		
				$this->session->set_flashdata('user_added', 'Data berhasil diperbarui');
				redirect('example/table_user');
			}
			else {
				$this->session->set_flashdata('password_not_match', "Password konfirmasi tidak sesuai, mohon coba lagi");
				redirect('example/edit_form_user/'.$id_pengguna);
			}
		}
		else {
			$this->session->set_flashdata('password_not_match', "Password lama tidak sesuai, mohon coba lagi");
			redirect('example/edit_form_user/'.$id_pengguna);
		}
	}
	
	function update_obat(){
		$id_asli = $this->input->post('id_asli');
		$id_obat = $this->input->post('id_obat');
		$nama = $this->input->post('nama_obat');
		$merk = $this->input->post('merk');
		$jenis = $this->input->post('jenis');
		$bpjs = $this->input->post('bpjs');

		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $nama,
			'nama_merk' => $merk,
			'jenis_obat' => $jenis,
			'bpjs' => $bpjs
		);

		$where = array(
			'id_obat' => $id_asli
		);

		if ($id_obat == $id_asli) {
			$this->apotek_data->update_data($where,$data,'tabel_obat');
			$this->session->set_flashdata('success', 'Data berhasil diperbarui');
			redirect('example/table_obat');
		}
		else {
			$check = $this->apotek_data->check_foreign_key($id_asli, 'tabel_pembelian', 'id_obat');
			if ($check == '200') {
				$this->apotek_data->update_data($where,$data,'tabel_obat');
				$this->session->set_flashdata('success', 'Data berhasil diperbarui');
				redirect('example/table_obat');
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa diperbarui karena terkait dengan tabel lain! Mohon jangan ubah Id Obat');
				$this->session->set_flashdata('add_id_obat', $id_asli);
				$this->session->set_flashdata('add_nama_obat', $nama);
				$this->session->set_flashdata('add_merk_obat', $merk);
				$this->session->set_flashdata('add_jenis', $jenis);
				$this->session->set_flashdata('add_bpjs', $bpjs);
				redirect('example/edit_form_obat/'.$id_asli);
			}
		}
	}
	
	function update_bhp(){
		$id_asli = $this->input->post('id_asli');
		$id_bhp = $this->input->post('id_bhp');
		$nama = $this->input->post('nama_bhp');
		$jenis = $this->input->post('jenis');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_bhp' => $id_bhp,
			'nama_bhp' => $nama,
			'jenis_bhp' => $jenis,
			'keterangan' => $keterangan
		);

		$where = array(
			'id_bhp' => $id_asli
		);

		if ($id_bhp == $id_asli) {
			$this->apotek_data->update_data($where,$data,'tabel_bhp');
			$this->session->set_flashdata('success', 'Data berhasil diperbarui');
			redirect('example/table_bhp');
		}
		else {
			$check = $this->apotek_data->check_foreign_key($id_asli, 'tabel_pembelian', 'id_bhp');
			if ($check == '200') {
				$this->apotek_data->update_data($where,$data,'tabel_bhp');
				$this->session->set_flashdata('success', 'Data berhasil diperbarui');
				redirect('example/table_bhp');
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa diperbarui karena terkait dengan tabel lain! Mohon jangan ubah Id Obat');
				$this->session->set_flashdata('add_id_bhp', $id_asli);
				$this->session->set_flashdata('add_nama_bhp', $nama);
				$this->session->set_flashdata('add_jenis', $jenis);
				$this->session->set_flashdata('add_ket', $keterangan);
				redirect('example/edit_form_bhp/'.$id_asli);
			}
		}
	}
	
	function update_jenis_obat(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');

		$data = array(
			'id' => $id,
			'nama' => $jenis
		);

		$where = array(
			'id' => $id
		);

		$this->apotek_data->update_data($where,$data,'tabel_jenis_obat');

		$this->session->set_flashdata('success', 'Data berhasil diperbarui');
		redirect('example/table_jenis_obat');
	}
	
	function update_jenis_bhp(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');

		$data = array(
			'id' => $id,
			'nama' => $jenis
		);

		$where = array(
			'id' => $id
		);

		$this->apotek_data->update_data($where,$data,'tabel_jenis_bhp');

		$this->session->set_flashdata('success', 'Data berhasil diperbarui');
		redirect('example/table_jenis_bhp');
	}
	
	function update_pemasok_obat(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'id_pemasok' => $id,
			'nama_pemasok' => $nama,
			'alamat' => $alamat,
			'no_telepon' => $telepon,
		);

		$where = array(
			'id_pemasok' => $id
		);

		$this->apotek_data->update_data($where,$data,'tabel_pemasok');

		$this->session->set_flashdata('success', 'Data berhasil diperbarui');
		redirect('example/table_pemasok_obat');
	}

	function update_unit(){
		$id_unit = $this->input->post('id_unit');
		$unit = $this->input->post('unit');
		
		$data = array(
			'unit' => $unit,
		
		);

		$where = array(
			'id_unit' => $id_unit
		);

		$this->apotek_data->update_data($where,$data,'table_unit');

		$this->session->set_flashdata('unit_added', 'Data unit berhasil diperbarui');
		redirect('example/table_unit');
	}


	function remove_med($id_obat){
		$where = array('id_obat' => $id_obat);
		$this->apotek_data->delete_data($where,'table_med');
		redirect('example/table_med');
	}

	function remove_cat($id_kat){
		$where = array('id_kat' => $id_kat);
		$this->apotek_data->delete_data($where,'table_cat');
		redirect('example/table_cat');
	}

	function remove_sup($id_pem){
		$where = array('id_pem' => $id_pem);
		$this->apotek_data->delete_data($where,'table_sup');
		redirect('example/table_sup');
	}

	function remove_jenis($id, $id_name, $table_name, $view_name){
		if ($table_name == 'tabel_jenis_obat') {
			$check = $this->apotek_data->check_foreign_key($id, 'tabel_obat', 'jenis_obat');
			if ($check == '200') {
				$where = array($id_name => $id);
				$this->apotek_data->delete_data($where, $table_name);
				$this->session->set_flashdata('success', 'Data berhasil dihapus!');
				redirect('example/'.$view_name);
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa dihapus karena terkait dengan tabel lain!');
				redirect('example/'.$view_name);
			}
		}
		else if ($table_name == 'tabel_jenis_bhp') {
			$check = $this->apotek_data->check_foreign_key($id, 'tabel_bhp', 'jenis_bhp');
			if ($check == '200') {
				$where = array($id_name => $id);
				$this->apotek_data->delete_data($where, $table_name);
				$this->session->set_flashdata('success', 'Data berhasil dihapus!');
				redirect('example/'.$view_name);
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa dihapus karena terkait dengan tabel lain!');
				redirect('example/'.$view_name);
			}
		}
		else if ($table_name == 'tabel_obat') {
			$check = $this->apotek_data->check_foreign_key($id, 'tabel_pembelian', 'id_obat');
			if ($check == '200') {
				$where = array($id_name => $id);
				$this->apotek_data->delete_data($where, $table_name);
				$this->session->set_flashdata('success', 'Data berhasil dihapus!');
				redirect('example/'.$view_name);
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa dihapus karena terkait dengan tabel lain!');
				redirect('example/'.$view_name);
			}
		}
		else if ($table_name == 'tabel_bhp') {
			$check = $this->apotek_data->check_foreign_key($id, 'tabel_pembelian', 'id_bhp');
			if ($check == '200') {
				$where = array($id_name => $id);
				$this->apotek_data->delete_data($where, $table_name);
				$this->session->set_flashdata('success', 'Data berhasil dihapus!');
				redirect('example/'.$view_name);
			}
			else if ($check == '500') {
				$this->session->set_flashdata('failed', 'Error! Data tidak bisa dihapus karena terkait dengan tabel lain!');
				redirect('example/'.$view_name);
			}
		}
	}

	function remove_data($id, $id_name, $table_name, $view_name){
		$where = array($id_name => $id);
		$this->apotek_data->delete_data($where, $table_name);
		 if (!$this->db->affected_rows()) {
			$result = 'Error! ID ['.$id.'] not found';
			$this->session->set_flashdata('failed', 'Gagal! Data dengan id ['.$id.'] tidak ditemukan.');
			redirect('example/'.$view_name);
		} else {
			$result = 'Success';
			$this->session->set_flashdata('success', 'Data berhasil dihapus!');
			redirect('example/'.$view_name);
		}
	}

	function remove_unit($id_unit){
		$where = array('id_unit' => $id_unit);
		
		$this->apotek_data->delete_data($where,'table_unit');
		redirect('example/table_unit');
	}


	function remove_inv($ref){
		$where = array('ref' => $ref);
		$this->apotek_data->delete_data($where,'table_invoice');


		redirect('example/table_invoice');
	}

	function remove_purchase($ref){
		$where = array('ref' => $ref);
		$this->apotek_data->delete_data($where,'table_purchase');
		redirect('example/table_purchase');
	}


	 function product()
	{
	    $nama_obat=$this->input->post('nama_obat');
        $data=$this->apotek_data->get_product($nama_obat);
        echo json_encode($data);
	}

	 


	function chart()
	{
       $data = $this->apotek_data->get_chart_cat();
		echo json_encode($data);
	}

	function chart_unit()
	{
       $data = $this->apotek_data->get_chart_unit();
		echo json_encode($data);
	}


	function chart_trans()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->get_chart_trans($tahun_beli);
		echo json_encode($data);
	}

	function chart_purchase()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->get_chart_purchase($tahun_beli);
		echo json_encode($data);
	}

	function gabung()
	{
       $tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->get_gabung($tahun_beli);
		echo json_encode($data);
	}

	function topdemand()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->topDemanded($tahun_beli);
		echo json_encode($data);
	}

	function leastdemand()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->leastDemanded($tahun_beli);
		echo json_encode($data);
	}

	function highearn()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->highestEarners($tahun_beli);
		echo json_encode($data);
	}

	function lowearn()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->lowestEarners($tahun_beli);
		echo json_encode($data);
	}

	function toppurchase()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->topPurchase($tahun_beli);
		echo json_encode($data);
	}

	function leastpurchase()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->leastPurchase($tahun_beli);
		echo json_encode($data);
	}

	function highpurchase()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->highestPurchase($tahun_beli);
		echo json_encode($data);
	}

	function lowpurchase()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->lowestPurchase($tahun_beli);
		echo json_encode($data);
	}



	function totale()
	{
		$tahun_beli=$this->input->post('tahun_beli');
       	$data = $this->apotek_data->get_tot($tahun_beli);
		echo json_encode($data);
	}

	

    

	

}









