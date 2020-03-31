<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
        
    {  
        
        $this->load->view('templates_admin/header');
        $this->load->view('Admin/About');
        $this->load->view('templates_admin/footer');

    }

}

/* End of file About.php */

?>
