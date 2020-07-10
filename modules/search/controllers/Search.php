<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {
 public function __construct(){
 parent::__construct();

 $this->load->model('Model_form');
 }
 public function index(){
 $this->load->view('search');
 }
 public function search(){
 // Ambil data NIS yang dikirim via ajax post
 $id = $this->input->post('id_brg');
 $brg = $this->Model_form->viewBy($id);
 if( ! empty($brg)){ // Jika data siswa ada/ditemukan
 // Buat sebuah array
 $callback = array(
 'status' => 'success', // Set array status dengan success
 'nama' => $siswa->nm_brg, // Set array nama dengan isi kolom nama pada tabel siswa
  // Set array jenis_kelamin dengan isi kolom alamat pada tabel siswa
 );
 }else{
 $callback = array('status' => 'failed'); // set array status dengan failed
 }
 echo json_encode($callback); // konversi varibael $callback menjadi JSON
 }
}