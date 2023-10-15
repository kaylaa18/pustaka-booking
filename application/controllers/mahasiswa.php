<?php
class mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'namalengkap' => $this->input->post('namalengkap'),
            'programstudi' => $this->input->post('programstudi'),
            'semester' => $this->input->post('semester'),
            'ipk' => $this->input->post('ipk')
        ];
        
        $this->load->view('view-data-mahasiswa', $data);
    }
}