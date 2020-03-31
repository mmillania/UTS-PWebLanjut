<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
        
    {  
        // $data['mobil'] = $this->Rental_model->get_data('mobil')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Beranda');
        $this->load->view('templates_customer/footer');

    }
    

}

/* End of file Beranda.php */

?>
