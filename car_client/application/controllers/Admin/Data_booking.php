<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_booking extends CI_Controller {

    public function index()
    {
    
      $data['peminjaman'] = $this->Rental_model->get_data('peminjaman')->result();

       $this->load->view('templates_admin/header');
       $this->load->view('Admin/Data_booking',$data);
       $this->load->view('templates_admin/footer');

    }
    
    public function tambah_booking()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('Admin/Form_tambah_booking');
       $this->load->view('templates_admin/footer');

    }

    public function tambah_booking_aksi()
    {
       $this->_rules();

       if ($this->form_validation->run() == FALSE) {
           $this->tambah_booking();
       }else {
           
           $nama                 = $this->input->post('nama');
           $alamat               = $this->input->post('alamat');
           $no_ktp               = $this->input->post('no_ktp');
           $no_tlp               = $this->input->post('no_tlp');
           $merk_mobil            = $this->input->post('merk_mobil');
           $tgl_pinjam           = $this->input->post('tgl_pinjam');
           $tgl_kembali          = $this->input->post('tgl_kembali');
           $durasi               = $this->input->post('durasi');
           $username             = $this->input->post('username');

           $data = array (
               
               'nama'                    => $nama,
               'alamat'                  => $alamat,
               'no_ktp'                  => $no_ktp,
               'no_tlp'                  => $no_tlp,
               'merk_mobil'              => $merk_mobil,
               'tgl_pinjam'              => $tgl_pinjam,
               'tgl_kembali'             => $tgl_kembali,
               'durasi'                  => $durasi,
               'username'                => $username
           );

           $this->Rental_model->insert_data($data, 'peminjaman');
           $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Booking Berhasil Ditambahkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect ('Admin/Data_booking');
       }

    }


   

    public function update_booking($id){
        $where = array ('id_peminjaman' => $id);
        $data['peminjaman'] = $this->db->query("SELECT * FROM peminjaman WHERE id_peminjaman = '$id'")->result();
       $this->load->view('templates_admin/header');
       $this->load->view('Admin/Form_update_booking', $data);
       $this->load->view('templates_admin/footer');
    }

    public function update_booking_aksi(){
        $this->_rules();

       if ($this->form_validation->run() == FALSE) {
           $this->update_booking();
       }else{

        $nama                 = $this->input->post('nama');
        $alamat               = $this->input->post('alamat');
        $no_ktp               = $this->input->post('no_ktp');
        $no_tlp               = $this->input->post('no_tlp');
        $merk_mobil            = $this->input->post('merk_mobil');
        $tgl_pinjam           = $this->input->post('tgl_pinjam');
        $tgl_kembali          = $this->input->post('tgl_kembali');
        $durasi               = $this->input->post('durasi');
        $username             = $this->input->post('username');



            $data = array(
               'nama'                    => $nama,
               'alamat'                  => $alamat,
               'no_ktp'                  => $no_ktp,
               'no_tlp'                  => $no_tlp,
               'merk_mobil'              => $merk_mobil,
               'tgl_pinjam'              => $tgl_pinjam,
               'tgl_kembali'             => $tgl_kembali,
               'durasi'                  => $durasi,
               'username'                => $username,
                
            );
            $where = array(
                'id_peminjaman' => $id
            );

            $this->Rental_model->update_data('peminjaman', $data, $where);
            $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Peminjaman Berhasil Diperbaharui!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect ('Admin/Data_booking');
        }
    }

    public function delete_booking($id){
        $where = array('id_peminjaman' => $id);
        $this->Rental_model->delete_data($where,'peminjaman');
                $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Peminjaman Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect ('Admin/Data_booking');
        }



    public function _rules()
    {
        
        $this->form_validation->set_rules('nama','Nama Peminjam', 'required');
        $this->form_validation->set_rules('alamat','Alamat Peminjam', 'required');
        $this->form_validation->set_rules('no_ktp','Nomor KTP', 'required');
        $this->form_validation->set_rules('no_tlp','Nomor Telepon Peminjam', 'required');
        $this->form_validation->set_rules('merk_mobil','Merk Mobil Yang Dirental', 'required');
        $this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali', 'required');
        $this->form_validation->set_rules('durasi','Durasi Peminjaman', 'required');
    }
   

}

/* End of file Data_booking.php */

?>
