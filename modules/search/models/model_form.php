<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_form extends CI_Model {

 public function viewBy($id_brg){
 $this->db->where('id_brg', $id_brg);
 $result = $this->db->get('tbl_barang')->row(); // Tampilkan data


 return $result;
 }
}