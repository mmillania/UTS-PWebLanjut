<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller {

    public function index()
        
    {  
        $data['mobil'] = $this->Rental_model->get_data('mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Data_mobil', $data);
        $this->load->view('templates_customer/footer');

    }
    public function detail_mobil($id)
        
    {  
        $data['detail'] = $this->Rental_model->ambil_id_mobil($id);
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Detail_mobil', $data);
        $this->load->view('templates_customer/footer');

    }

}

/* End of file Data_mobil.php */

?>
