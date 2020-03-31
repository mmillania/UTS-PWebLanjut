<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaksi extends CI_Controller {

    public function index()
    {   
        $data['transaksi'] = $this->Rental_model->get_data('transaksi')->result();
        // $data['transaksi'] = $this->Rental_model->get_all();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/Data_transaksi', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_transaksi()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('Admin/Form_tambah_transaksi');
       $this->load->view('templates_admin/footer');

    }

    public function tambah_transaksi_aksi()
    {
       $this->_rules();

       if ($this->form_validation->run() == FALSE) {
           $this->tambah_transaksi();
       }else {
           $id_customer         = $this->input->post('id_customer');
           $id_mobil            = $this->input->post('id_mobil');
           $tgl_pinjam          = $this->input->post('tgl_pinjam');
           $tgl_kembali         = $this->input->post('tgl_kembali');
           $tgl_pengembalian    = $this->input->post('tgl_pengembalian');
           $status_pengembalian = $this->input->post('status_pengembalian');
           $status_transaksi    = $this->input->post('status_transaksi');

           $data = array (
               'id_customer'        => $id_customer,
               'id_mobil'           => $id_mobil,
               'tgl_pinjam'         => $tgl_pinjam,
               'tgl_kembali'        => $tgl_kembali,
               'tgl_pengembalian'   => $tgl_pengembalian,
               'status_pengembalian'=> $status_pengembalian,
               'status_transaksi'   => $status_transaksi
           );

           $this->Rental_model->insert_data($data, 'transaksi');
           $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Transaksi Berhasil Ditambahkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect ('Admin/Data_transaksi');
       }

    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_customer','ID Customer', 'required');
        $this->form_validation->set_rules('id_mobil','ID Mobil', 'required');
        $this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali', 'required');
        $this->form_validation->set_rules('tgl_pengembalian','Tanggal Pengembalian', 'required');
        $this->form_validation->set_rules('status_pengembalian','Status Pengembalian', 'required');
        $this->form_validation->set_rules('status_transaksi','Status Transaksi', 'required');
    }

}

/* End of file Data_transaksi.php */

?>
