<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller {

 public function __construct(){
 parent::__construct();

 $this->load->model('index_model');
 }
 public function index(){
 $data['barang'] = $this->index_model->view();
 $this->load->view ('dashboard/templates/header');
$this->load->view ('dashboard/templates/sidebar');
 $this->load->view('index', $data);
 $this->load->view ('dashboard/templates/footer');
 }

 public function search(){
 // Ambil data NIS yang dikirim via ajax post
 $keyword = $this->input->post('keyword');
 $res = $this->index_model->search($keyword);

 // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
 $hasil = $this->load->view('view', array('barang'=>$res),
true);

 // Buat sebuah array
 $callback = array(
 'barang' => $hasil, 
 // Set array hasil dengan isi dari view.php yang diload tadi
 );
 echo json_encode($callback); // konversi varibael $callback menjadi JSON
 }

}