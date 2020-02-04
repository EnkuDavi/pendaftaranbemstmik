<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }

    public function index()
    {
        $data['kandidat'] = $this->Crud_model->getAllKandidat();
        $this->load->view('template/header');
        $this->load->view('pages/home', $data);
        $this->load->view('template/footer');
    }
}
