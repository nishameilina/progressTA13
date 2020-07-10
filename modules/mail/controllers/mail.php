<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mail extends CI_Controller {
 /**
 * Kirim email dengan SMTP Gmail.
 *
 */
 public function index()
 {
 // Konfigurasi email
 $config = [
	 'mailtype' => 'html',
	 'charset' => 'utf-8',
	 'protocol' => 'smtp',
	 'smtp_host' => 'ssl://smtp.gmail.com',
	 'smtp_user' => 'nishameilinadewi095@gmail.com', 
	 'smtp_pass' => 'nishanishul95', 
	 'smtp_port' => 465,
	 'crlf' => "\r\n",
	 'newline' => "\r\n"
	 ];
 $this->load->library('email', $config);
 $this->email->from('nishameilinadewi095@gmail.com', 'dinus');
  $this->email->to('nishamlna95@gmail.com');
 //$this->email->attach('File.png');
 $this->email->subject('Kirim Email dengan SMTP Gmail');

 $this->email->message("Ini adalah contoh email
CodeIgniter yang dikirim menggunakan SMTP email Google
(Gmail).<br><br> Klik <strong><a
href='https://dinsutek.com/masaboe/materi' target='_blank'
rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");
 // Tampilkan pesan sukses atau error
 if ($this->email->send()) {
 echo 'Sukses! email berhasil dikirim.';
 } else {
 echo 'Error! email tidak dapat dikirim.';
 }
 }
}