<?php 
 
class Invoice extends CI_Controller
{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1' ){
			$this->session->set_flashdata('Anda Belum Login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Username atau Password Anda Salah!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('login/auth/login');

		}
	}
	
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('admin/templates_admin/header');
		$this->load->view('admin/templates_admin/sidebar');
		$this->load->view('invoice' , $data);
		$this->load->view('admin/templates_admin/footer');

	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('admin/templates_admin/header');
		$this->load->view('admin/templates_admin/sidebar');
		$this->load->view('detail_invoice' , $data);
		$this->load->view('admin/templates_admin/footer');
	}
}