<?php 
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model extends CI_Model {

    private $_client;

    public function __construct(){

        $this->_client = new Client([
            'base_uri' => 'http://localhost/rental_mobil_rs/api/'

        ]);
    }

    public function get_data($table){
        return $this->db->get($table);
    }

    public function get_data_mobil(){
        // return $this->db->get($table);
       

        $response = $this->_client->request('GET', 'Data_mobil');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    

    public function get_data_type(){
        // return $this->db->get($table);
       

        $response = $this->_client->request('GET', 'Data_type');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
    
    public function ambil_id_mobil($id){
        // $hasil = $this->db->where('id_mobil', $id)->get('mobil');

        // if($hasil->num_rows() > 0){
        //     return $hasil->result();
        // }else{
        //     return false;
        // }

        
        $response = $this->_client->request('GET', 'Data_mobil', [
            'query' => [
                'id_mobil' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function insert_data($data, $table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }


    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
                       ->where('username', $username)
                       ->where('password', md5($password))
                       ->limit(1)
                       ->get('customer');

        if ($result->num_rows() > 0) {
            return $result->row();
        }else{
            return FALSE;
        }
    }

    public function cariDataMobil(){
        $keyword=$this->input->post('keyword');
        $this->db->like('merk',$keyword);
        
        return $this->db->get('mobil')->result_array();
    }

    public function get_all()
    {
        
        $this->db->select('transaksi.*, customer.nama, mobil.merk' );
        $this->db->join('customer','customer.id_customer = transaksi.id_customer');
        $this->db->join('mobil','mobil.id_mobil = transaksi.id_mobil');
        $query = $this->db->get('transaksi');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function getMobil($id = null){
        if($id == null){
            return $this->db->get('mobil')->result_array();
        }else{
            return $this->db->get_where('mobil', ['id_mobil'=>$id])->result_array();
        }
    }

    public function deleteMobil($id){
        $this->db->delete('mobil',['id_mobil' => $id]);
        return $this->db->affected_rows();
        // $response = $this->_client->request('DELETE', 'Data_mobil',[
        //     'form_params' => [
        //         'id_mobil' => $id
        //     ]
        // ]);
        // $result = json_decode($response->getBody()->getContents(), true);

        // return $result;
    }
    
    public function createMobil($data){
        $this->db->insert('mobil', $data);
        return $this->db->affected_rows();
    }

    public function updateMobil($data, $id){
        $this->db->update('mobil', $data, ['id_mobil' => $id]);
        return $this->db->affected_rows();
    }

    public function getType($id = null){
        if($id == null){
            return $this->db->get('type')->result_array();
        }else{
            return $this->db->get_where('type', ['id_type'=>$id])->result_array();
        }
    }

    public function deleteType($id){
        $this->db->delete('type',['id_type' => $id]);
        return $this->db->affected_rows();
    }

    public function createType($data){
        $this->db->insert('type', $data);
        return $this->db->affected_rows();
    }

    public function updateType($data, $id){
        $this->db->update('type', $data, ['id_type' => $id]);
        return $this->db->affected_rows();
    }
    
}

/* End of file Rental_model.php */


?>
