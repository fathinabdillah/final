<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmif extends CI_Controller {

	public function __construct(){
		parent ::__construct();

		//load model
		$this->load->model('model_hmif'); 
	}

	public function index(){
		$title = ['title'=> "HMIF FT-UH",
		'dbhmif'=> $this->model_hmif->getData('hmif',1,1),
		'hmif'=> $this->model_hmif->getAllData('hmif'),
		'proker'=> $this->model_hmif->getAllData('proker'),
		'infokom'=> $this->model_hmif->getAllData('infokom'),
		'kesek'=> $this->model_hmif->getAllData('kesek'),
		'pengmas'=> $this->model_hmif->getAllData('pengmas'),
		'pendidikan'=> $this->model_hmif->getAllData('pendidikan'),
		'psdm'=> $this->model_hmif->getAllData('psdm')
		];
		$this->load->view('view_hmif', $title);
	}

	//------------Admin-------------//
	//------------Pengurus-------------//
	public function admin(){
		$title = ['title'=> "HMIF FT-UH",
		'dbhmif'=> $this->model_hmif->getAllData('hmif')
		];
		$this->load->view('admin_hmif', $title);
	}
	
	public function tambah()
	{
		$data ['title'] = 'Tambah Data Pengurus';

		$this->load->view('tambah_hmif', $data);
	}

	public function admin_input()
	{
		$config = array(
			'upload_path' => 'img/hmif',
			'allowed_types' => 'jpg|jpeg|png|bmp',
			'max_size' => 0,
			'filename' => url_title($this->input->post('foto_hmif')),
			'encrypt_name'=>true
		);
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload('foto_hmif')){
			$data = array('foto_hmif' => $this->upload->file_name,
				'nama_hmif'=> $this->input->post('nama_hmif', true),
				'nim_hmif'=> $this->input->post('nim_hmif', true),
				'jabatan_hmif'=> $this->input->post('jabatan_hmif', true)
			);

			$this->model_hmif->insertData('hmif',$data);
			redirect('hmif/admin');

		}
		$this->data = array('getdata' => $this->db->get('hmif'));
	}

	public function edit($id)
	{
		$sess = ['title'=>"Edit Data Buku",
		'b'=> $this->model_hmif->getData('hmif',$id,'id_hmif')];
		$this->load->view('edit_hmif', $sess);
	}

	public function update_hmif()
	{
		$config = array(
			'upload_path' => 'img/hmif',
			'allowed_types' => 'jpg|jpeg|png|bmp',
			'max_size' => 0,
			'filename' => url_title($this->input->post('foto_hmif')),
			'encrypt_name'=>true
		);
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload('foto_hmif')){
			$data = array('foto_hmif' => $this->upload->file_name,
				'nama_hmif'=> $this->input->post('nama_hmif', true),
				'nim_hmif'=> $this->input->post('nim_hmif', true),
				'jabatan_hmif'=> $this->input->post('jabatan_hmif', true)
			);
			$id = $this->input->post('hidden_id');
			$this->model_hmif->update('hmif',$data, $id, 'id_hmif');
			redirect('hmif/admin');

		}
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true),
			'jabatan_hmif'=> $this->input->post('jabatan_hmif', true)
		);
		$id = $this->input->post('hidden_id');
		$this->model_hmif->update('hmif',$data, $id, 'id_hmif');
		redirect('hmif/admin');
	}

	public function delete()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('hmif', $u, 'id_hmif');
		redirect('hmif/admin','refresh');
	}


	//------------Anggota-------------//
	public function anggota(){
		$title = ['title'=> "Anggota Kompartemen",
		'infokom'=> $this->model_hmif->getAllData('infokom'),
		'kesek'=> $this->model_hmif->getAllData('kesek'),
		'pengmas'=> $this->model_hmif->getAllData('pengmas'),
		'pendidikan'=> $this->model_hmif->getAllData('pendidikan'),
		'psdm'=> $this->model_hmif->getAllData('psdm')
		];
		$this->load->view('admin_anggota', $title);
	}

	//------------Infokom-------------//
	public function tambahinfokom()
	{
		$data ['title'] = 'Tambah Data Infokom';

		$this->load->view('tambah_infokom', $data);
	}

	public function admin_inputinfokom()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true)
		);

		$this->model_hmif->insertData('infokom',$data);
		redirect('hmif/anggota');
	}

	public function editinfokom($id)
	{
		$sess = ['title'=>"Edit Data Infokom",
		'b'=> $this->model_hmif->getData('infokom',$id,'id_hmif')];
		$this->load->view('edit_infokom', $sess);
	}

	public function update_hmifinfokom()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
		'nim_hmif'=> $this->input->post('nim_hmif', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('infokom',$data,$id, 'id_hmif');
	redirect('hmif/anggota');
	}

	public function deleteinfokom()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('infokom', $u, 'id_hmif');
		redirect('hmif/anggota','refresh');
	}

	//------------Kesek-------------//
	public function tambahkesek()
	{
		$data ['title'] = 'Tambah Data Kesek';

		$this->load->view('tambah_kesek', $data);
	}

	public function admin_inputkesek()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true)
		);

		$this->model_hmif->insertData('kesek',$data);
		redirect('hmif/anggota');
	}

	public function editkesek($id)
	{
		$sess = ['title'=>"Edit Data Kesek",
		'b'=> $this->model_hmif->getData('kesek',$id,'id_hmif')];
		$this->load->view('edit_kesek', $sess);
	}

	public function update_hmifkesek()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
		'nim_hmif'=> $this->input->post('nim_hmif', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('kesek',$data,$id, 'id_hmif');
	redirect('hmif/anggota');
	}

	public function deletekesek()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('kesek', $u, 'id_hmif');
		redirect('hmif/anggota','refresh');
	}

	//------------Pendidikan-------------//
	public function tambahpendidikan()
	{
		$data ['title'] = 'Tambah Data Pendidikan';

		$this->load->view('tambah_pendidikan', $data);
	}

	public function admin_inputpendidikan()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true)
		);

		$this->model_hmif->insertData('pendidikan',$data);
		redirect('hmif/anggota');
	}

	public function editpendidikan($id)
	{
		$sess = ['title'=>"Edit Data Pendidikan",
		'b'=> $this->model_hmif->getData('pendidikan',$id,'id_hmif')];
		$this->load->view('edit_pendidikan', $sess);
	}

	public function update_hmifpendidikan()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
		'nim_hmif'=> $this->input->post('nim_hmif', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('pendidikan',$data,$id, 'id_hmif');
	redirect('hmif/anggota');
	}

	public function deletependidikan()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('pendidikan', $u, 'id_hmif');
		redirect('hmif/anggota','refresh');
	}

	//------------Pengmas-------------//
	public function tambahpengmas()
	{
		$data ['title'] = 'Tambah Data Pengmas';

		$this->load->view('tambah_pengmas', $data);
	}

	public function admin_inputpengmas()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true)
		);

		$this->model_hmif->insertData('pengmas',$data);
		redirect('hmif/anggota');
	}

	public function editpengmas($id)
	{
		$sess = ['title'=>"Edit Data Pengmas",
		'b'=> $this->model_hmif->getData('pengmas',$id,'id_hmif')];
		$this->load->view('edit_pengmas', $sess);
	}

	public function update_hmifpengmas()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
		'nim_hmif'=> $this->input->post('nim_hmif', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('pengmas',$data,$id, 'id_hmif');
	redirect('hmif/anggota');
	}

	public function deletepengmas()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('pengmas', $u, 'id_hmif');
		redirect('hmif/anggota','refresh');
	}


	//------------PSDM-------------//
	public function tambahpsdm()
	{
		$data ['title'] = 'Tambah Data PSDM';

		$this->load->view('tambah_psdm', $data);
	}

	public function admin_inputpsdm()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
			'nim_hmif'=> $this->input->post('nim_hmif', true)
		);

		$this->model_hmif->insertData('psdm',$data);
		redirect('hmif/anggota');
	}

	public function editpsdms($id)
	{
		$sess = ['title'=>"Edit Data PSDM",
		'b'=> $this->model_hmif->getData('psdm',$id,'id_hmif')];
		$this->load->view('edit_psdm', $sess);
	}

	public function update_hmifpsdm()
	{
		$data = array('nama_hmif'=> $this->input->post('nama_hmif', true),
		'nim_hmif'=> $this->input->post('nim_hmif', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('psdm',$data,$id, 'id_hmif');
	redirect('hmif/anggota');
	}

	public function deletepsdm()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('psdm', $u, 'id_hmif');
		redirect('hmif/anggota','refresh');
	}

	//------------Proker-------------//

	public function proker(){
		$title = ['title'=> "Program Kerja",
		'proker'=> $this->model_hmif->getAllData('proker')
		];
		$this->load->view('admin_proker', $title);
	}
	public function tambahproker()
	{
		$data ['title'] = 'Tambah Data Proker';

		$this->load->view('tambah_proker', $data);
	}

	public function admin_inputproker()
	{
		$data = array('judul'=> $this->input->post('judul', true),
			'jadwal'=> $this->input->post('jadwal', true),
			'kompartemen'=> $this->input->post('kompartemen', true),
			'detail'=> $this->input->post('detail', true)
		);

		$this->model_hmif->insertData('proker',$data);
		redirect('hmif/proker');
	}

	public function editproker($id)
	{
		$sess = ['title'=>"Edit Data Proker",
		'b'=> $this->model_hmif->getData('proker',$id,'id')];
		$this->load->view('edit_proker', $sess);
	}

	public function update_hmifproker()
	{
		$data = array('judul'=> $this->input->post('judul', true),
			'jadwal'=> $this->input->post('jadwal', true),
			'kompartemen'=> $this->input->post('kompartemen', true),
			'detail'=> $this->input->post('detail', true)
	);
	$id = $this->input->post('hidden_id');
	$this->model_hmif->update('proker',$data,$id, 'id');
	redirect('hmif/proker');
	}

	public function deleteproker()
	{
		$u = $this->uri->segment(3);
		$this->model_hmif->delete('proker', $u, 'id');
		redirect('hmif/proker','refresh');
	}

	public function tambahpesan()
	{
		$data = array('email'=> $this->input->post('email', true),
			'password'=> $this->input->post('password', true),
			'message'=> $this->input->post('message', true)
		);

		$this->model_hmif->insertData('pesan',$data);
		redirect('hmif');
	}
	
}
