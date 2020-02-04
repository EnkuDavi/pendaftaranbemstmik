<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('pages/admin', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->Crud_model->hapusData($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Data Kandidat Berhasil Dihapus
        </div>');
        redirect('admin');
    }
}
