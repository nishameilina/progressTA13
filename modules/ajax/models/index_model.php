<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class index_model extends CI_Model {
 public function view(){
 return $this->db->get('tbl_barang')->result(); 
 // Tampilkan semua data yang ada di tabel siswa
 }
 public function search($keyword){
 $this->db->or_like('nm_brg', $keyword);
 $this->db->or_like('keterangan', $keyword);
 $this->db->or_like('kategori', $keyword);
 $this->db->or_like('harga', $keyword);
 $this->db->or_like('stok', $keyword);
 $this->db->or_like('gambar', $keyword);

 $result = $this->db->get('tbl_barang')->result(); // Tampilkan data siswa berdasarkan keyword
 return $result;
 }
}