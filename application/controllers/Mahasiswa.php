<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    
    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'semester' => $this->input->post('semester'),
            'ipk' => $this->input->post('ipk'),
        ];
        $this->load->view('view-data-mahasiswa', $data);
    }
}
?>