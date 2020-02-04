<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ["required" => "Field ini harus diisi !"]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim', ["required" => "Field ini harus diisi !"]);
        $this->form_validation->set_rules('motivasi', 'Motivasi', 'required|trim|min_length[20]', [
            "min_length" => "Ceritakan lebih banyak lagi tentang motivasi anda! ",
            "required" => "Field ini harus diisi !"
        ]);
        $this->form_validation->set_rules('pandangan', 'pandangan', 'required|trim|min_length[20]', [
            "min_length" => "Ceritakan lebih banyak lagi tentang pandangan Anda!",
            "required" => "Field ini harus diisi !"
        ]);
        $this->form_validation->set_rules('pendapat', 'Pendapat', 'required|trim|min_length[20]', [
            "min_length" => "Ceritakan lebih banyak lagi tentang pendapat Anda!",
            "required" => "Field ini harus diisi !"
        ]);
        $this->form_validation->set_rules('self', 'Kepribadian', 'required|trim|min_length[20]', [
            "min_length" => "Ceritakan lebih banyak lagi tentang diri Anda!",
            "required" => "Field ini harus diisi !"
        ]);
        $this->form_validation->set_rules('visi', 'Visi Misi', 'required|trim|min_length[20]', [
            "min_length" => "Ceritakan lebih banyak lagi tentang Visi Misi Anda!",
            "required" => "Field ini harus diisi !"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('pages/user', $data);
            $this->load->view('template/footer');
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Data Anda Gagal Ditambah , Silahkan isi Form Kembali!
            </div>');
        } else {
            $this->Crud_model->tambahData();
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Selamat! Data Anda Berhasil Ditambah Sebagai Kandidat...
            </div>');
            redirect('Home');
        }
    }
}
