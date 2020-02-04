<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    public function getAllKandidat()
    {
        return $this->db->get('kandidat')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama')),
            "kelas" => htmlspecialchars($this->input->post('jurusan')),
            "motivasi" => htmlspecialchars($this->input->post('motivasi')),
            "pandangan" => htmlspecialchars($this->input->post('pandangan')),
            "pendapat" => htmlspecialchars($this->input->post('pendapat')),
            "self" => htmlspecialchars($this->input->post('self')),
            "visi_misi" => htmlspecialchars($this->input->post('visi'))
        ];

        $this->db->insert('kandidat', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('kandidat', ['id' => $id]);
    }
}
