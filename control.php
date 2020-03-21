<?php 
 
 
class control extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['menumakanan'] = $this->model->tampil_data()->result();
		$this->load->view('tampil2',$data);
	}
 
	function tambah(){
		$this->load->view('tampil');
	}

	function tambah_aksi(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('foto_makanan')){
			$error = array('error' => $this->upload->display_errors());
			
		}else{
			$foto = array('upload_data' => $this->upload->data());
			// $this->load->view('v_upload_sukses', $data);

		$nama = $this->input->post('nama_makanan');
		$harga = $this->input->post('harga_makanan');
 
		$data = array(
			'nama_makanan' => $nama,
			'harga_makanan' => $harga,
			'foto_makanan' => $foto["upload_data"]["file_name"]
			);
		// print_r($foto);
		
		$this->model->input_data($data,'menumakanan');
		$this->load->view('tampil', $error);
		}
	}
}
