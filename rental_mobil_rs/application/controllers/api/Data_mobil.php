<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'libraries/REST_Controller.php';
require APPPATH .'libraries/Format.php';

class Data_mobil extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rental_model','mobil');
    }


    public function index_get()
    {
        $id = $this->get('id_mobil');
        if($id === null) {
            $mbl = $this->mobil->getMobil();
        } else {
            $mbl = $this->mobil->getMobil($id);
        }

            if($mbl) {
                $this->response([
                    'status' => true,
                    'data' => $mbl
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
    }

    public function index_delete(){
        $id = $this->delete('id_mobil');
        if($id === null) {
                $this->response([
                    'status' => false,
                    'message' => 'provide an id!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                if($this->mobil->deleteMobil($id)>0){
                    //ok
                    $this->response([
                        'status' => true,
                        'id' =>$id,
                        'messege' => 'deleted.'
                    ], REST_Controller::HTTP_OK);
                }else{
                    //id not found
                    $this->response([
                        'status' => false,
                        'message' => 'id not found'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
               
            }
    } 
    
    public function index_post(){
        $data=[
            'id_mobil' => $this->post('id_mobil'),
            'kode_type' => $this->post('kode_type'),
            'merk' => $this->post('merk'),
            'nopol' => $this->post('nopol'),
            'warna' => $this->post('warna'),
            'tahun' => $this->post('tahun'),
            'harga' => $this->post('harga'),
            'status' => $this->post('status'),
            'gambar' => $this->post('gambar'),
            
            
        ];

        if($this->mobil->createMobil($data)>0){
            $this->response([
                'status' => true,
                'message' => 'new mobil has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            //id not found
            $this->response([
                'status' =>false,
                'message' => 'failed to create new data mobil!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id_mobil');
        $data=[
        
            'id_mobil' => $this->put('id_mobil'),
            'kode_type' => $this->put('kode_type'),
            'merk' => $this->put('merk'),
            'nopol' => $this->put('nopol'),
            'warna' => $this->put('warna'),
            'tahun' => $this->put('tahun'),
            'harga' => $this->put('harga'),
            'status' => $this->put('status'),
            'gambar' => $this->put('gambar'),
            
        ];

        if($this->mobil->updateMobil($data, $id)>0){
            $this->response([
                'status' => true,
                'message' => 'data mobil has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            //id not found
            $this->response([
                'status' =>false,
                'message' => 'failed to update data mobil!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    }


/* End of file Controllername.php */