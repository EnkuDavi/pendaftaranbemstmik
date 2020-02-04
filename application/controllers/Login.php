<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim', [
            'required' => 'Field ini harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Field ini harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $npm = $this->input->post('npm');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['npm' => $npm])->row_array();
        // Jika user ada
        if ($user) {
            // Jika User aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'npm' => $user['npm'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda Berhasil Login Sebagai Admin !
                        </div>');
                        redirect('Admin');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda Berhasil Login Sebagai Kandidat! Silahkan isi Form Pendaftaran dibawah ini!
                        </div>');
                        redirect('User');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah
                    </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini belum aktif
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak terdaftar
          </div>');
            redirect('login');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('npm', 'NPM', 'required|trim', [
            'required' => 'Field ini harus diisi !'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Field ini harus diisi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/registrasi');
        } else {

            $data = [
                'npm' => htmlspecialchars($this->input->post('npm', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your account has been created!
            </div>');
            redirect('login');
        }
    }
}
